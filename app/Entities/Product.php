<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Product\Contracts\ProductManagement;
use VCComponent\Laravel\Product\Contracts\ProductSchema;
use VCComponent\Laravel\Product\Entities\Product as EntitiesProduct;
use VCComponent\Laravel\Product\Traits\ProductManagementTrait;
use VCComponent\Laravel\Product\Traits\ProductSchemaTrait;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;


class Product extends EntitiesProduct implements Transformable, ProductSchema, ProductManagement, HasMedia
{
    use TransformableTrait, ProductSchemaTrait, ProductManagementTrait, HasCategoriesTrait, HasMediaTrait, HasCommentTrait, HasTagsTraits;

    const STATUS_PENDING = 1;
    const STATUS_ACTIVE  = 2;
    public function schema()
    {
        return [
            'thumbnail' => [
                'type' => 'text',
                'rule' => [],
            ],
        ];
    }
}
