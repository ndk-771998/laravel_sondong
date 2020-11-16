<?php

namespace App\Entities;

use Exception;
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
            'thumbnail' => [
                'type'  => 'string',
                'label' => 'Ảnh bìa',
                'rule'  => [],
            ],
        ];
    }
    public function placeSchema()
    {
        return [
            'thumbnail' => [
                'type'  => 'string',
                'label' => 'Ảnh bìa',
                'rule'  => [],
            ],
        ];
    }

    public function getMetaField($key)
    {
        if (!$this->postMetas->count()) {
            return '';
        }
        try {
            return $this->postMetas->where('key', $key)->first()->value;
        } catch (Exception $e) {
            return '';
        }
    }
}
