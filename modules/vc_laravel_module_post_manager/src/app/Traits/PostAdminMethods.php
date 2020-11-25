<?php

namespace VCComponent\Laravel\Post\Traits;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use VCComponent\Laravel\Post\Events\PostCreatedByAdminEvent;
use VCComponent\Laravel\Post\Events\PostDeletedEvent;
use VCComponent\Laravel\Post\Events\PostUpdatedByAdminEvent;
use VCComponent\Laravel\Post\Repositories\PostRepository;
use VCComponent\Laravel\Post\Transformers\PostTransformer;
use VCComponent\Laravel\Post\Validators\PostValidatorInterface;
use VCComponent\Laravel\Vicoders\Core\Exceptions\NotFoundException;
use VCComponent\Laravel\Vicoders\Core\Exceptions\PermissionDeniedException;

trait PostAdminMethods
{
    public function __construct(PostRepository $repository, PostValidatorInterface $validator, Request $request)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
        $this->validator  = $validator;
        $this->type       = $this->getPostTypeFromRequest($request);

        if (config('post.auth_middleware.admin.middleware') !== '') {
            $this->middleware(
                config('post.auth_middleware.admin.middleware'),
                ['except' => config('post.auth_middleware.admin.except')]
            );
        }

        if (isset(config('post.transformers')['post'])) {
            $this->transformer = config('post.transformers.post');
        } else {
            $this->transformer = PostTransformer::class;
        }
    }

    public function getStatus($request, $query)
    {
        if ($request->has('status')) {
            $pattern = '/^\d$/';

            if (!preg_match($pattern, $request->status)) {
                throw new Exception('The input status is incorrect');
            }

            $query = $query->where('status', $request->status);
        }
        return $query;
    }
    public function fomatDate($date)
    {

        $fomatDate = Carbon::createFromFormat('Y-m-d', $date);

        return $fomatDate;
    }

    public function field($request)
    {
        if ($request->has('field')) {
            if ($request->field === 'updated') {
                $field = 'updated_at';
            } elseif ($request->field === 'published') {
                $field = 'published_date';
            } elseif ($request->field === 'created') {
                $field = 'created_at';
            }
            return $field;
        } else {
            throw new Exception('field requied');
        }
    }

    public function getFromDate($request, $query)
    {
        if ($request->has('from')) {

            $field     = $this->field($request);
            $form_date = $this->fomatDate($request->from);
            $query     = $query->whereDate($field, '>=', $form_date);
        }
        return $query;
    }

    public function getToDate($request, $query)
    {
        if ($request->has('to')) {
            $field   = $this->field($request);
            $to_date = $this->fomatDate($request->to);
            $query   = $query->whereDate($field, '<=', $to_date);
        }
        return $query;
    }

    public function index(Request $request)
    {
        $query = $this->entity;

        $query = $this->getFromDate($request, $query);
        $query = $this->getToDate($request, $query);
        $query = $this->getStatus($request, $query);

        $query = $this->applyQueryScope($query, 'type', $this->type);
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['title', 'description', 'content'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $per_page = $request->has('per_page') ? (int) $request->get('per_page') : 15;
        $posts    = $query->paginate($per_page);

        if ($request->has('includes')) {
            $transformer = new $this->transformer(explode(',', $request->get('includes')));
        } else {
            $transformer = new $this->transformer;
        }

        return $this->response->paginator($posts, $transformer);
    }

    function list(Request $request) {
        $query = $this->entity;

        $query = $this->getFromDate($request, $query);
        $query = $this->getToDate($request, $query);
        $query = $this->getStatus($request, $query);

        $query = $this->applyQueryScope($query, 'type', $this->type);
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['title', 'description', 'content'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $posts = $query->get();

        if ($request->has('includes')) {
            $transformer = new $this->transformer(explode(',', $request->get('includes')));
        } else {
            $transformer = new $this->transformer;
        }

        return $this->response->collection($posts, $transformer);
    }

    public function show(Request $request, $id)
    {
        $post = $this->repository->findWhere(['id' => $id, 'type' => $this->type])->first();
        if (!$post) {
            throw new NotFoundException(title_case($this->type) . ' entity');
        }

        if (config('post.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToShow($user, $id)) {
                throw new PermissionDeniedException();
            }
        }

        if ($request->has('includes')) {
            $transformer = new $this->transformer(explode(',', $request->get('includes')));
        } else {
            $transformer = new $this->transformer;
        }

        return $this->response->item($post, $transformer);
    }

    public function store(Request $request)
    {
        if (config('post.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToCreate($user)) {
                throw new PermissionDeniedException();
            }
        }

        $data           = $this->filterPostRequestData($request, $this->entity, $this->type);
        $schema_rules   = $this->validator->getSchemaRules($this->entity, $this->type);
        $no_rule_fields = $this->validator->getNoRuleFields($this->entity, $this->type);

        $this->validator->isValid($data['default'], 'RULE_ADMIN_CREATE');
        $this->validator->isSchemaValid($data['schema'], $schema_rules);


        $post       = $this->repository->create($data['default']);
        $post->type = $this->type;
        $post->save();

        if (count($no_rule_fields)) {
            foreach ($no_rule_fields as $key => $value) {
                $post->postMetas()->updateOrCreate([
                    'key'   => $key,
                    'value' => null,
                ], ['value' => '']);
            }
        }

        if (count($data['schema'])) {
            foreach ($data['schema'] as $key => $value) {
                $post->postMetas()->updateOrcreate([
                    'key' => $key,
                ], [
                    'value' => $value,
                ]);
            }
            // dd($post->postMetas);
        }

        event(new PostCreatedByAdminEvent($post));

        return $this->response->item($post, new $this->transformer);
    }

    public function update(Request $request, $id)
    {
        $post = $this->repository->findWhere(['id' => $id, 'type' => $this->type])->first();
        if (!$post) {
            throw new NotFoundException(Str::title($this->type) . ' entity');
        }

        if (config('post.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToUpdateItem($user, $id)) {
                throw new PermissionDeniedException();
            }
        }

        $data         = $this->filterPostRequestData($request, $this->entity, $this->type);
        $schema_rules = $this->validator->getSchemaRules($this->entity, $this->type);

        $this->validator->isValid($data['default'], 'RULE_ADMIN_UPDATE');
        $this->validator->isSchemaValid($data['schema'], $schema_rules);

        $post = $this->repository->update($data['default'], $id);

        if ($request->has('status')) {
            $post->status = $request->get('status');
            $post->save();
        }

        if (count($data['schema'])) {
            foreach ($data['schema'] as $key => $value) {
                $post->postMetas()->updateOrCreate(['key' => $key], ['value' => $value]);
            }
        }

        event(new PostUpdatedByAdminEvent($post));

        return $this->response->item($post, new $this->transformer);
    }

    public function destroy(Request $request, $id)
    {
        $post = $this->repository->findWhere(['id' => $id, 'type' => $this->type])->first();
        if (!$post) {
            throw new NotFoundException(Str::title($this->type) . ' entity');
        }

        if (config('post.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToDelete($user, $id)) {
                throw new PermissionDeniedException();
            }
        }

        $this->repository->delete($id);

        event(new PostDeletedEvent());

        return $this->success();
    }

    public function bulkUpdateStatus(Request $request)
    {
        if (config('post.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToUpdate($user)) {
                throw new PermissionDeniedException();
            }
        }

        $this->validator->isValid($request, 'BULK_UPDATE_STATUS');

        $this->repository->bulkUpdateStatus($request);

        return $this->success();
    }

    public function updateStatusItem(Request $request, $id)
    {
        if (config('post.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToUpdateItem($user, $id)) {
                throw new PermissionDeniedException();
            }
        }

        $post = $this->repository->findWhere(['id' => $id, 'type' => $this->type])->first();
        if (!$post) {
            throw new NotFoundException(title_case($this->type) . ' entity');
        }

        $this->validator->isValid($request, 'UPDATE_STATUS_ITEM');

        $data         = $request->all();
        $post->status = $data['status'];
        $post->save();

        return $this->success();
    }
    public function restore($id)
    {

        $post = $this->entity::where('id', $id)->get();
        if (count($post) > 0) {
            throw new NotFoundException('Post');
        }

        $this->repository->restore($id);

        $restore = $this->entity::where('id', $id)->get();
        return $this->response->collection($restore, new $this->transformer());
    }

    public function bulkRestore(Request $request)
    {
        $posts = $this->entity->onlyTrashed()->whereIn("id", $request->id)->get();

        if (count($request->id) > $posts->count()) {
            throw new NotFoundException("Post");
        }

        $post = $this->repository->bulkRestore($request);

        $post = $this->entity->whereIn('id', $request->id)->get();

        return $this->response->collection($post, new $this->transformer());
    }

    public function getAllTrash()
    {
        $trash = $this->entity->onlyTrashed();

        if ($trash->first() == null) {
            throw new NotFoundException("Post");
        }

        $post = $trash->get();

        return $this->response->collection($post, new $this->transformer());
    }
    public function trash(Request $request)
    {
        $trash = $this->entity->onlyTrashed();

        if ($trash->first() == null) {
            throw new NotFoundException("Post");
        }
        $per_page = $request->has('per_page') ? (int) $request->get('per_page') : 15;
        $post     = $trash->paginate($per_page);

        return $this->response->item($post, new $this->transformer());
    }
    public function deleteAllTrash()
    {
        $posts = $this->entity->forceDelete();
        return $this->success();
    }

    public function deleteTrash($id)
    {
        $post = $this->repository->deleteTrash($id);
        return $this->success();
    }

    public function bulkDeleteTrash(Request $request)
    {
        $posts = $this->findWhereIn("id", $request->id);
        if (count($request->id) > $posts->count()) {
            throw new NotFoundException("Post");
        }
        $post = $this->repository->bulkDeleteTrash($request);
        return $this->success();
    }
    public function forceDelete($id)
    {

        $post = $this->entity->where('id', $id)->first();
        if (!$post) {
            throw new NotFoundException('Post');
        }

        $this->repository->forceDelete($id);

        return $this->success();
    }

    public function changeDate(Request $request, $id)
    {
        $post = $this->repository->findWhere(['id' => $id, 'type' => $this->type])->first();
        if (!$post) {
            throw new NotFoundException(Str::title($this->type) . ' entity');
        }

        if (config('post.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToUpdateItem($user, $id)) {
                throw new PermissionDeniedException();
            }
        }

        $this->validator->isValid($request, 'RULE_ADMIN_UPDATE_DATE');

        $data = $request->all();

        $data            = Carbon::parse($request->post_date)->format('Y-m-d');
        $post->post_date = $data;
        $post->save();

        return $this->response->item($post, new $this->transformer);
    }

}
