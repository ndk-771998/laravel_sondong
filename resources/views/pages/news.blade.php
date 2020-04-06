@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">Tin tức</li>
        </ul>
    </div>
</nav>
<section class="news">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="news-head" id="news">{!! $title !!}</div>
                    <div class="line"></div>
                    @foreach($result as $item)
                    <div class="new-item">
                        <div class="row">
                            <div class="col-4"><img class="img-fluid" src="assets/images/news.png" alt=""></div>
                            <div class="pl-0 col-8">
                                <div class="news-title">
                                    {!! $item->title !!}
                                </div>
                                <div class="news-content">
                                    {!! $item->description !!}
                                </div>
                                <div>
                                    <a class="view-details" href="new-detail">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-end">
                        {{ $result->fragment('news')->links('include.pagination') }}
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
