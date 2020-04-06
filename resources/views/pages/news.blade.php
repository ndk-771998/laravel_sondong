@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">{!! $title !!}</li>
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
                    <div class="d-flex flex-column news ">
                        @foreach($result as $item)
                        <a href="{{ url($urlRedirect.'/'.$item->slug) }}">
                            <div class="d-flex description">
                                <div><img src="{!! $item->getMetaField('thumbnail') !!}" alt=""></div>
                                <div>
                                    <h6>{!! $item->title !!}</h6>
                                    <p>{!! $item->description !!}</p>
                                    <u>Xem chi tiết</u>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
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
