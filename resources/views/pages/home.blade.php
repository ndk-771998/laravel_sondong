@extends('layout.master')
@section('content')
<section>
    <div class="banner-container container">
        <div class="row">
            <div class="col-12 col-md-8">
                <img class="lazyload" data-src="/assets/images/banner1.jpg" alt="banner1">
            </div>
            <div class="col-12 col-md-4 d-flex flex-column">
                <div>
                    <img class="lazyload" data-src="/assets/images/banner2.jpg" alt="banner2">
                </div>
                <div class="mt-auto">
                    <img class="lazyload" data-src="/assets/images/banner3.jpg" alt="banner3">
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
                    @foreach ($customerfeedbacks as $customerfeedback)
                    <div class="customer-feedback d-flex">
                        <div class="info d-flex">
                            <div class="avatar"><img src="{{ $customerfeedback->thumbnail }}" alt="avatar"></div>
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
                        </div>
                    </div>
                    @endforeach
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
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UPOT2tgY9QQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class=" video-title">(Review) Lenovo Ideapad 5 (2021) Phá Đảo tầm giá 15 Triệu...!!!</div>
                            </div>
                            <div class="d-flex flex-row video">
                                <div class="">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UPOT2tgY9QQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class=" video-title">(Review) Lenovo Ideapad 5 (2021) Phá Đảo tầm giá 15 Triệu...!!!</div>
                            </div>
                        </div>
                        <div class="video-right video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/OpQFFLBMEPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="video-title">
                                (Review) Lenovo Ideapad 5 (2021) Phá Đảo tầm giá 15 Triệu...!!!
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
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/word.png" alt="picture">
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/LA_4894.png" alt="picture">
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/word.png" alt="picture">
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/LA_4894.png" alt="picture">
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/word.png" alt="picture">
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/LA_4894.png" alt="picture">
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/word.png" alt="picture">
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <img src="/assets/images/LA_4894.png" alt="picture">
                </div>
            </div>

            <a class="btn-primary mb-3" href="#">
                Xem tất cả 
                <img src="/assets/images/logo/chevron-up.svg" alt="chevron">
            </a>
        </div>
    </div>
</section>
@endsection
