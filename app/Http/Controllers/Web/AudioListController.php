<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Entities\Post;

class AudioListController extends Controller
{
    use PrepareOption;

    public function view()
    {
        $data['postlist'] = Post::where('type','audios')->paginate(10);
        return view('pages.audio-list',$data);
    }

    public function viewdetail($slug)
    {
        $data['audio_detail'] = Post::where([
            ['slug', $slug],
            ['type','audios']
        ])->get();
        $data2['dpostlist'] = Post::where([['slug','<>', $slug], ['type','audios']])->paginate(10);
        return view('pages.audio-detail',$data,$data2);
    }

}
