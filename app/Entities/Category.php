<?php

namespace App\Entities;

use Prettus\Repository\Traits\TransformableTrait;
use VCComponent\Laravel\Category\Entities\Category as EntitiesCategory;
use VCComponent\Laravel\Product\Traits\HasProductTrait;

class Category extends EntitiesCategory
{
    use TransformableTrait, HasProductTrait;

    public function products()
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }
}
