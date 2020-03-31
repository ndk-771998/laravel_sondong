<?php

namespace VCComponent\Laravel\Comment\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use VCComponent\Laravel\Comment\Actions\CommentCountAction;
use VCComponent\Laravel\Comment\Entities\Comment;

class CommentController extends BaseController {
    public function __construct(CommentCountAction $action) {
        $this->action = $action;
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $email    = !$request['email'] ? 'null' : $request['email'];
        $username = !$request['user'] ? 'user' : $request['user'];

        Comment::create([
            'commentable_id'   => $request['commentable_id'],
            'commentable_type' => $request['commentable_type'],
            'email'            => $email,
            'name'             => $username,
            'content'          => $request['content'],
        ]);

        $dataCount = [
            'commentable_id'   => $request['commentable_id'],
            'commentable_type' => $request['commentable_type'],
        ];

        $this->action->addComment($dataCount);

        return redirect()->back();

    }
}
