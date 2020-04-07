<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Support\Str;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\Post\Entities\Post as BasePost;

class Post extends BasePost
{
    use HasCommentTrait;

    public function postTypes()
    {
        return [
            'place',
            'exhibition',
            'news',
        ];
    }

    public function getLimitedName($limit = 10)
    {
        return Str::limit($this->name, $limit);
    }

}
