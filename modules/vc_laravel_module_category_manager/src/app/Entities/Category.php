<?php

namespace VCComponent\Laravel\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use VCComponent\Laravel\Category\Contracts\CategoryManagement;
use VCComponent\Laravel\Category\Contracts\CategorySchema;
use VCComponent\Laravel\Category\Traits\CategoryManagementTrait;
use VCComponent\Laravel\Category\Traits\CategorySchemaTrait;
use VCComponent\Laravel\Post\Entities\Post;
use VCComponent\Laravel\Product\Entities\Product;

class Category extends Model implements Transformable, CategorySchema, CategoryManagement
{
    use TransformableTrait, CategorySchemaTrait, CategoryManagementTrait;

    const STATUS_PENDING = 1;
    const STATUS_ACTIVE  = 2;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'type',
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

}
