<?php

namespace App\Entities;

use Illuminate\Support\Str;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Post\Entities\Post as BasePost;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Post extends BasePost
{
    use HasCommentTrait, HasCategoriesTrait, HasTagsTraits, HasMediaTrait;

    public function postTypes()
    {
        return [
            'Địa điểm cưới lãng mạng' => "place",
            'Hỗ trợ tiệc cưới'        => "exhibition",
            'trang'                   => 'pages',
        ];
    }

    public function getLimitedName($limit = 10)
    {
        return Str::limit($this->name, $limit);
    }
    public function exhibitionSchema()
    {
        return [
            'is_hot' => [
                'type'  => 'string',
                'label' => 'Nổi bật',
                'rule'  => [],
            ],
        ];
    }
    public function placeSchema()
    {
        return [
            'is_hot' => [
                'type'  => 'string',
                'label' => 'Nổi bật',
                'rule'  => [],
            ],
        ];
    }
    public function scopeGetBy($query, $type, $status)
    {
        return $query->where('type',$type)->where('status', $status)->orderBy('id','desc');
    }
}
