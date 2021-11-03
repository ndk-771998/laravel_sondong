@extends('layout.master')
@section('content')
    <section>
        <div class="container post-detail-container">
            <div class="post-detail-wrap">
                <div class="post-category-title">Tin chính trị</div>
                <div class="post-publish-date">Thứ ba, 12/10/2021, 00:38</div>
                <hr>
                <div class="post-title">{{ $post->title }}</div>
                <div class="description">{!! $post->description !!}</div>
                <div class="content">
                    {!! $post->content !!}
                </div>
                <div class="post-author">Tin, ảnh Giáp Phượng</div>
                <hr>
                <div class="view">Lượt xem: 1234</div>
            </div>
        </div>
        <div class="container related-posts-container">
            <div class="related-posts-wrap">
                <div class="related-posts-title">
                    Tin tiêu biểu
                </div>
                <div class="related-posts">
                    @include('include.post.post-list', ['posts' => $hot_posts])
                </div>
            </div>
        </div>
        <div class="container related-posts-container">
            <div class="related-posts-wrap">
                <div class="related-posts-title">
                    Tin cùng chuyên mục
                </div>
                <div class="related-posts">
                    @include('include.post.post-list', ['posts' => $related_posts])
                </div>
            </div>
        </div>
    </section>
@endsection