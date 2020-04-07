@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/{!! $urlBreadcumb !!}">{!! $title !!}</a></li>
            <li class="breadcrumb-item">{!! $post->title !!}</li>
        </ul>
    </div>
</nav>
<section class="new-detail">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="new-detail-head">{!! $title !!}</div>
                    <div class="line"></div>
                    <div class="new-detail-title">
                        {!! $post->title !!}
                    </div>
                    <div class="new-detail-description">
                        {!! $post->content !!}
                    </div>
                    <div class="text-center">
                        <img class="img-fluid new-detail-img" src="{!! $post->getMetaField('thumbnail') !!}" alt="">
                    </div>
                    <div class="comment mt-5">
                        <h5>Bình luận</h5>
                        <form action="{{url('comment')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" required="" name="email" placeholder="Nhập email của bạn . . .">
                                <input type="text" class="form-control" required name="user" placeholder="Nhập tên của bạn . . .">
                                <textarea class="form-control" required name="content" placeholder="Nhập nội dung bình luận . . ."></textarea>
                                <input name="commentable_id" value="{{ $post->id }}" hidden>
                                <input name="commentable_type" value="posts" hidden>
                                <input name="comment_type" value="{!! $urlBreadcumb !!}" hidden>
                                <input type="submit" value="Gửi">
                            </div>
                        </form>
                    </div>
                    @include('comment::show')
                    <div class="news-relate">
                        <div class="news-relate-title">Tin tức liên quan:</div>
                        <ul class="">
                            @foreach($relatedPosts as $relatedPost)
                            <li><a href="{!! $relatedPost->slug !!}">{!! $relatedPost->title !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    @include('layout.nav-right')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
