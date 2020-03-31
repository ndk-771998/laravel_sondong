<?php

namespace VCComponent\Laravel\Post\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Entities\Draftable;

class DrafController extends Controller
{
    public function show($id)
    {
        $postPreview = Draftable::find($id);
        return view('pages.preview-post',[
            'postPreview' => $postPreview,
        ]);
    }
}
