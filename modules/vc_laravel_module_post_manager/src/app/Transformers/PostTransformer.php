<?php

namespace VCComponent\Laravel\Post\Transformers;

use League\Fractal\TransformerAbstract;
use VCComponent\Laravel\Comment\Transformers\CommentTransformer;
use VCComponent\Laravel\Comment\Transformers\CommentCountTransformer;

class PostTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'comments',
        'comment_count',
    ];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform($model)
    {
        $transform = [
            'id'          => (int) $model->id,
            'title'       => $model->title,
            'slug'        => $model->slug,
            'description' => $model->description,
            'content'     => $model->content,
            'type'        => $model->type,
            'order'       => (int) $model->order,
            'status'      => (int) $model->status,
            'post_date'   => $model->post_date,
        ];

        if ($model->postMetas->count()) {
            foreach ($model->postMetas as $item) {
                $transform[$item['key']] = $item['value'];
            }
        }

        $transform['timestamps'] = [
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];

        return $transform;
    }

    public function includeCommentCount($model)
    {
        return $this->collection($model->commentCount, new CommentCountTransformer());
    }

    public function includeComments($model)
    {
        return $this->collection($model->comments, new CommentTransformer());
    }
}
