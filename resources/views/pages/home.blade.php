@extends('layout.master')
@section('content')
<section>
    <div class="banner-container container">
        <div class="row row-padding-18px">
            <div class="col-12 col-md-8 col-padding-18px dot-slide">
                <div class="dot-slide-item">
                    <a href="{{ getOption('link-banner-1')}}">
                        <img class="lazyload home-slide-img" data-src="{{ getOption('banner-1') }}" alt="banner-home-page-1">
                    </a>
                </div>
                <div class="dot-slide-item">
                    <a href="{{ getOption('link-banner-1')}}">
                        <img class="lazyload home-slide-img" data-src="{{ getOption('banner-1') }}" alt="banner-home-page-1">
                    </a>
                </div>
                <div class="dot-slide-item">
                    <a href="{{ getOption('link-banner-1')}}">
                        <img class="lazyload home-slide-img" data-src="{{ getOption('banner-1') }}" alt="banner-home-page-1">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 col-padding-18px">
                <div>
                    <a href="{{getOption('link-banner-2')}}">
                        <img class="lazyload" data-src="{{ getOption('banner-2') }}" alt="banner-home-page-2">
                    </a>
                </div>
                <div class="" style="margin-top: 18px">
                    <a href="{{ getOption('link-banner-3') }}">
                        <img class="lazyload" data-src="{{ getOption('banner-3') }}" alt="banner-home-page-3">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('include.flash-sale.flash-sale')

    @include('include.product.product-slide', ['list_title' => 'Laptop mới', 'products' => $new_products])

    @include('include.product.product-slide', ['list_title' => 'Laptop cũ', 'products' => $old_products])

    @include('include.product.product-slide', ['list_title' => 'Máy in', 'products' => $printers])

    <div class="customer-feedback-container container">
        <div class="row">
            <div class="col-12">
                <div class="customer-feedback-wrap">
                    <div class="customer-feedback-title">
                        Cảm nhận khách hàng
                    </div>
                    <div class="slide-no-arrow d-none d-sm-block">
                        @foreach ($customerfeedbacks as $index => $customerfeedback)
                        @if ($index % 3 == 0)
                        <div class="slide-no-arrow-item">
                        @endif
                            <div class="customer-feedback d-flex">
                                <div class="info d-flex">
                                    <div class="avatar"><img class="lazyload" data-src="{{ $customerfeedback->thumbnail }}" alt="avatar"></div>
                                    <div class="text d-flex flex-column">
                                        <div class="name">{{ $customerfeedback->title }}</div>
                                        <div class="caption">{{ $customerfeedback->description }}</div>
                                        <div class="vote d-flex flex-row flex-wrap">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    {!! $customerfeedback->content !!}
                                    <img class="lazyload background-quote"  data-src="/assets/images/logo/doublequote.svg" alt="double_quote">
                                </div>
                            </div>
                        @if ($index % 3 == 2)
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <div class="slide-no-arrow d-block d-sm-none">   
                        @foreach ($customerfeedbacks as $index => $customerfeedback)
                        <div class="slide-no-arrow-item">
                            <div class="customer-feedback d-flex">
                                <div class="info d-flex">
                                    <div class="avatar"><img class="lazyload" data-src="{{ $customerfeedback->thumbnail }}" alt="avatar"></div>
                                    <div class="text d-flex flex-column">
                                        <div class="name">{{ $customerfeedback->title }}</div>
                                        <div class="caption">{{ $customerfeedback->description }}</div>
                                        <div class="vote d-flex flex-row flex-wrap">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                            <img src="/assets/images/logo/star.svg" alt="star">
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    {!! $customerfeedback->content !!}
                                    <img class="lazyload background-quote"  data-src="/assets/images/logo/doublequote.svg" alt="double_quote">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-thienthanh-container container">
        <div class="row">
            <div class="col-12">
                <div class="video-thienthanh-wrap">
                    <div class="video-thienthanh-title">
                        Video Thienthanh
                    </div>

                    <div class="video-thienthanh d-flex flex-row">
                        <div class="video-left">
                            <div class="d-flex flex-row video">
                                <div class="">
                                    {!! getOption('video-1') !!}
                                </div>
                                <div class=" video-title">{{ getOption('title-video-1')}}</div>
                            </div>
                            <div class="d-flex flex-row video">
                                <div class="">
                                    {!! getOption('video-2') !!}
                                </div>
                                <div class=" video-title">{{ getOption('title-video-2')}}</div>
                            </div>
                        </div>
                        <div class="video-right video">
                            {!! getOption('video-3') !!}
                            <div class="video-title" style="margin-top: 10px">
                                {{ getOption('title-video-3')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="customer-picture-container container">
        <div class="customer-picture-wrap">
            <div class="customer-picture-title">
                Hình ảnh khách hàng
            </div>

            <div class="customer-picture row align-items-center">
                @foreach ($customermedias as $item)
                <div class="col-6 col-sm-4 col-md-3">
                    <img class="lazyload" data-src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                </div>
                @endforeach
            </div>

            <a class="btn-primary mb-3" href="/customermedias">
                Xem tất cả 
                <img src="/assets/images/logo/chevron-up.svg" alt="chevron">
            </a>
        </div>
    </div>

    <div class="home-logos-container container">
        <div class="home-logos-wrap row-padding-16px">
            <div class="col-padding-16px col-md-3 col-6">
                <div class="d-flex flex-row logo-item">
                    <div class="logo">
                        <img class="lazyload" data-src="{{ getOption('logo-giam-gia') }}" alt="logo-giam-gia">
                    </div>
                    <div class="label">
                        Giảm giá cực sốc
                    </div>
                </div>
            </div>
            <div class="col-padding-16px col-md-3 col-6">
                <div class="d-flex flex-row logo-item">
                    <div class="logo">
                        <img class="lazyload" data-src="{{ getOption('logo-van-chuyen') }}" alt="logo-van-chuyen">
                    </div>
                    <div class="label">
                        Miễn phí vận chuyển
                    </div>
                </div>
            </div>
            <div class="col-padding-16px col-md-3 col-6">
                <div class="d-flex flex-row logo-item">
                    <div class="logo">
                        <img class="lazyload" data-src="{{ getOption('logo-khach-hang-tin-dung') }}" alt="logo-khach-hang-tin-dung">
                    </div>
                    <div class="label">
                        Khách hàng tin dùng
                    </div>
                </div>
            </div>
            <div class="col-padding-16px col-md-3 col-6">
                <div class="d-flex flex-row logo-item">
                    <div class="logo">
                        <img class="lazyload" data-src="{{ getOption('logo-bao-hanh') }}" alt="logo-bao-hanh">
                    </div>
                    <div class="label">
                        Bảo hành dài hạn
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
