<?php

namespace App\Entities;

use Illuminate\Support\Str;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\Post\Entities\Post as BasePost;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Post extends BasePost
{
    use HasCommentTrait , HasCategoriesTrait, HasTagsTraits;

    public function postTypes()
    {
        return [
            'place',
            'exhibition',
            'pages',
        ];
    }

    public function getLimitedName($limit = 10)
    {
        return Str::limit($this->name, $limit);
    }

}
