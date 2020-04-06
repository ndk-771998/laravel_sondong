<?php

namespace App\Entities;

use VCComponent\Laravel\Product\Entities\Product
use VCComponent\Laravel\Category\Entities\Category as BaseCategory;

class Category extends BaseCategory
{

    protected $fillable = [
        'name',
        'parent_id',
        'type',
    ];


    public function products()
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }

    public function viewProducts()
    {
        return $this->morphedByMany(Product::class, 'categoryable')
            ->latest()
            ->limit(8);
    }
}
