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
use VCComponent\Laravel\Product\Traits\HasVariantTrait;
use VCComponent\Laravel\Product\Traits\ProductManagementTrait;
use VCComponent\Laravel\Product\Traits\ProductSchemaTrait;

class Product extends BaseProduct implements Transformable, ProductSchema, ProductManagement, HasMedia
{
    use TransformableTrait, ProductSchemaTrait, ProductManagementTrait, HasCategoriesTrait, HasMediaTrait, HasCommentTrait, HasVariantTrait;

    public function productTypes()
    {
        return [
            'Máy in'                => 'printer',
            'Link kiện máy tính'    => 'accessory',
        ];
    }

    public function schema()
    {
        return [
            'hightlights'   => [
                'type'  => 'TinyMCE',
                'label' => 'Đặc điểm nổi bật',
                'rule'  => [],
            ],
            'cpu'           => [
                'type'  => 'text',
                'label' => 'CPU',
                'rule'  => [],
            ],
            'ram'           => [
                'type'  => 'text',
                'label' => 'RAM',
                'rule'  => [],
            ],
            'screen'           => [
                'type'  => 'text',
                'label' => 'Màn hình',
                'rule'  => [],
            ],
            'graphics'         => [
                'type'  => 'text',
                'label' => 'Đồ họa',
                'rule'  => [],
            ],
            'hard_drive'           => [
                'type'  => 'text',
                'label' => 'Ổ cứng',
                'rule'  => [],
            ],
            'os'           => [
                'type'  => 'text',
                'label' => 'Hệ điều hành',
                'rule'  => [],
            ],
            'weight'           => [
                'type'  => 'text',
                'label' => 'Trọng lượng',
                'rule'  => [],
            ],
            'size'           => [
                'type'  => 'text',
                'label' => 'Kích thước',
                'rule'  => [],
            ],
            'origin'           => [
                'type'  => 'text',
                'label' => 'Xuất xứ',
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
            return $this->productMetas->where('key', $key)->first()->value;
        } catch (Exception $e) {
            return '';
        }
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

    public function getFirstCategoryLabelByType($type) {

        if ($this->categories) {
            $index = $this->categories->search(function ($category) use ($type) {
                return $category->type == $type;
            });
            if(is_numeric($index)) {
                return $this->categories[$index]->name;
            } else {
                return false;
            }
        } else {
            return $this->categories()->where('type', $type)->first()->name;
        }
    }
}
