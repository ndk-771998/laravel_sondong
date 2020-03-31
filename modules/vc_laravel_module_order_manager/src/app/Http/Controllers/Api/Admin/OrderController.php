<?php

namespace VCComponent\Laravel\Order\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use VCComponent\Laravel\Order\Repositories\OrderRepository;
use VCComponent\Laravel\Order\Transformers\OrderTransformer;
use VCComponent\Laravel\Order\Validators\OrderValidator;
use VCComponent\Laravel\Vicoders\Core\Controllers\ApiController;

class OrderController extends ApiController
{
    protected $repository;
    protected $validator;

    public function __construct(OrderRepository $repository, OrderValidator $validator)
    {
        $this->repository  = $repository;
        $this->entity      = $repository->getEntity();
        $this->validator   = $validator;
        $this->transformer = OrderTransformer::class;

        if (config('order.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToUse($user)) {
                throw new PermissionDeniedException();
            }
        }
    }

    public function index(Request $request)
    {
        $query = $this->entity;

        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['status'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        if ($request->has('status')) {

            $request->validate([
                'status' => 'required|regex:/^(\d+\,?)*$/',
            ]);

            $status = explode(',', $request->get('status'));
            $query = $query->whereIn('status_id', $status );
        }

        if ($request->has('payment_status')) {

            $request->validate([
                'payment_status' => 'required|regex:/^(\d+\,?)*$/',
            ]);

            $payment_status = explode(',', $request->get('payment_status'));
            $query = $query->whereIn('payment_status', $payment_status);
        }

        $per_page = $request->has('per_page') ? (int) $request->get('per_page') : 15;
        $order    = $query->paginate($per_page);
        return $this->response->paginator($order, new $this->transformer);
    }

    public function show($id)
    {
        $order = $this->repository->findById($id);
        return $this->response->item($order, new $this->transformer);
    }

    public function store(Request $request)
    {
        $this->validator->isValid($request, 'RULE_ADMIN_CREATE');

        $data  = $request->all();
        $order = $this->repository->create($data);

        return $this->response->item($order, new $this->transformer);
    }

    public function update(Request $request, $id)
    {
        $this->validator->isValid($request, 'RULE_ADMIN_UPDATE');

        $this->repository->findById($id);

        $data  = $request->all();
        $order = $this->repository->update($data, $id);

        return $this->response->item($order, new $this->transformer);
    }

    public function destroy($id)
    {
        $order = $this->repository->findById($id);
        $order->delete();

        return $this->success();
    }

    public function updateStatus(Request $request, $id)
    {
        $this->validator->isValid($request, 'UPDATE_STATUS_ITEM');

        $this->repository->findById($id);

        $this->repository->updateStatus($request, $id);
        return $this->success();
    }

    public function paymentStatus(Request $request, $id)
    {
        $this->validator->isValid($request, 'UPDATE_PAYMENT_STATUS');

        $this->repository->findById($id);

        $this->repository->paymentStatus($request, $id);
        return $this->success();
    }

}
