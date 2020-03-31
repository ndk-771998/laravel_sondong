<?php

namespace VCComponent\Laravel\Product\Transformers;

use App\Transformers\SeoMetaTransformer;
use League\Fractal\TransformerAbstract;
use VCComponent\Laravel\Category\Transformers\CategoryTransformer;
use VCComponent\Laravel\Comment\Transformers\CommentCountTransformer;
use VCComponent\Laravel\Comment\Transformers\CommentTransformer;
use VCComponent\Laravel\MediaManager\Transformers\MediaTransformer;

class ProductTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'categories',
        'media',
        'comments',
        'commentCount',
        'seoMeta',
    ];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform($model)
    {
        $transform = [
            'id'             => (int) $model->id,
            'name'           => $model->name,
            'code'           => $model->code,
            'description'    => $model->description,
            'slug'           => $model->slug,
            'status'         => (int) $model->status,
            'price'          => (int) $model->price,
            'thumbnail'      => $model->thumbnail,
            'quantity'       => $model->quantity,
            'is_hot'         => $model->is_hot,
            'author_id'      => (int) $model->author_id,
            'published_date' => $model->published_date,
        ];

        if ($model->productMetas->count()) {
            foreach ($model->productMetas as $item) {
                $transform[$item['key']] = $item['value'];
            }
        }

        $transform['timestamps'] = [
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];

        return $transform;
    }

    public function includeCategories($model)
    {
        return $this->collection($model->categories, new CategoryTransformer());
    }

    public function includeMedia($model)
    {
        return $this->collection($model->media, new MediaTransformer());
    }

    public function includeComments($model)
    {
        return $this->collection($model->comments, new CommentTransformer());
    }

    public function includeCommentCount($model) {
        return $this->collection($model->commentCount, new CommentCountTransformer());
    }

    public function includeSeoMeta($model)
    {
        if ($model->seoMeta) {
            return $this->item($model->seoMeta, new SeoMetaTransformer());
        }
    }
}
