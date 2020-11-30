<?php

namespace App\Entities;

use Exception;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Product\Contracts\ProductManagement;
use VCComponent\Laravel\Product\Contracts\ProductSchema;
use VCComponent\Laravel\Product\Entities\Product as BaseProduct;
use VCComponent\Laravel\Product\Traits\ProductManagementTrait;
use VCComponent\Laravel\Product\Traits\ProductSchemaTrait;

class Product extends BaseProduct implements Transformable, ProductSchema, ProductManagement, HasMedia
{
    use TransformableTrait, ProductSchemaTrait, ProductManagementTrait, HasCategoriesTrait, HasMediaTrait, HasCommentTrait;

    public function schema()
    {
        return [
            'brand_name' => [
                'type'  => 'string',
                'label' => 'Nhà thiết kế',
                'rule'  => [],
            ],
        ];
    }

    public function getMetaField($key)
    {
        if (!$this->productMetas->count()) {
            return '';
        }
        try {
            return $this->productMetas()->where('key', $key)->first()->value;
        } catch (Exception $e) {
            return '';
        }
    }
}
