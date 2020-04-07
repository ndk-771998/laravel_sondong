<?php

namespace VCComponent\Laravel\Comment\Traits;

use Carbon\Carbon;
use VCComponent\Laravel\Comment\Entities\Comment;
use VCComponent\Laravel\Comment\Entities\CommentCount;

trait HasCommentTrait
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function commentCount()
    {
        return $this->morphMany(CommentCount::class, 'commentable');
    }

    public function getAllComments()
    {
        return  $this->comments()->Orderby('id','desc')->get();
    }

    public function getLatestComment($page)
    {
        dd($this->comments()->Orderby('id','desc')->toSQL());
        return  $this->comments()->Orderby('id','desc')->Paginate($page);
    }

    public function datetimes()
    {
        return  Carbon::parse($this->created_at)->calendar();
    }
}
