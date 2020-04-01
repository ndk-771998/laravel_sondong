@extends('layout.master')
@section('content')
<section>
    <div class="header-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/images/wallpaper.png">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="/assets/images/wallpaper.png">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="/assets/images/wallpaper.png">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="/assets/images/wallpaper.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="home">
                        <div class="product" id="product">
                            <h5>SẢN PHẨM</h5>
                            <div class="hr"></div>
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-6 col-md-4">
                                    <a href="/">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="{!! $product->thumbnail !!}"alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>{!! $product->name !!}</p>
                                        </div>
                                        <div class="product_author">
                                            <p>Nhà thiết kế: Phi Tahc</p>
                                        </div>
                                        <div class="product-price d-flex justify-content-between">
                                            <div class="price"><p>{!! number_format($product->price) !!} đ</p></div>
                                            <div class="original_price">{!!number_format($product->original_price) !!} đ</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="">
                                {{ $products->fragment('product')->links('include.pagination') }}
                            </div>
                        </div>
                        <div class="product">
                            <div class="row title">
                                <div class="col-6 ">
                                    <h5>HỖ TRỢ TRIỂN LÃM CƯỚI(3)</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="">
                                        <p>Xem tất cả</p>
                                    </a>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="/assets/images/LA_4894.png"alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>Váy cưới khóa dây ren buộc trước</p>
                                        </div>
                                        <div class="product-price d-flex justify-content-between">
                                            <div class="price"><p>1,000,000 đ</p></div>
                                            <div class="original_price">1,200,000 đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="/assets/images/LA_4894.png" alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>Váy cưới khóa dây ren buộc trước</p>
                                        </div>
                                        <div class="product-price">
                                            <p>Giá bán: 1,000,000 đ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="/assets/images/LA_4894.png" alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>Váy cưới khóa dây ren buộc trước</p>
                                        </div>
                                        <div class="product-price">
                                            <p>Giá bán: 1,000,000 đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="row title">
                                <div class="col-6 ">
                                    <h5>ĐỊA ĐIỂM CƯỚI LÃNG MẠNG(3)</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="">
                                        <p>Xem tất cả</p>
                                    </a>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="/assets/images/LA_4894.png" alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>Váy cưới khóa dây ren buộc trước</p>
                                        </div>
                                        <div class="product-price">
                                            <p>Giá bán: 1,000,000 đ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="/assets/images/LA_4894.png" alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>Váy cưới khóa dây ren buộc trước</p>
                                        </div>
                                        <div class="product-price">
                                            <p>Giá bán: 1,000,000 đ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="/assets/images/LA_4894.png" alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>Váy cưới khóa dây ren buộc trước</p>
                                        </div>
                                        <div class="product-price">
                                            <p>Giá bán: 1,000,000 đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="row title">
                                <div class="col-6 ">
                                    <h5>TIN TỨC</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="">
                                        <p>Xem tất cả</p>
                                    </a>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex flex-column news ">
                                <div class="d-flex description">
                                    <div><img src="/assets/images/news/img1.png" alt=""></div>
                                    <div>
                                        <h6>Cách chọn vàng trang sức cho ngày cưới</h6>
                                        <p>Nhiều gia đình muốn tặng cô dâu trang sức vàng 24K nhưng loại trang sức này khó sử dụng lại sau đám cưới và không thể bán đi.</p>
                                        <a href="new-detail"><u>Xem chi tiết</u></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
