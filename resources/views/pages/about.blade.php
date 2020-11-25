@extends('layout.master')
@section('title')
<title>{!! getOption('gioi-thieu-title') !!}</title>
@endsection
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active text-capitalize">{!! $post->title !!}</li>

        </ul>
    </div>
</nav>

<section class="about">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-head text-uppercase">{!! $post->title !!}</div>
                    <div class="line"></div>

                    <div class="about-title text-capitalize">
                        {!! $post->title !!}
                    </div>
                    <div  class="about-description text-capitalize">
                        {!! $post->content !!}
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
