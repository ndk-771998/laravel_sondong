@extends('layout.master')
@section('content')
<section>
    <div class="container page-container">
        <div class="page-wrap row-padding-12px">
            <div class="sidebar col-padding-12px">
                @include('include.sidebar-list', ['posts_menu' => $posts_menu, 'post_type_label' => $post_type_label])
            </div>
            <div class="main col-padding-12px">
                <div class="title">{{ $post->title }}</div>
                <div class="content">
                    {!! str_replace(array("\\r", "\\n"), '', $post->content) !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
