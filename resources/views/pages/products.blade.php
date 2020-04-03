@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">Sản phẩm</li>
        </ul>
    </div>
</nav>
<section>
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="home">
                        <div class="product"  id="product">
                            <h5>SẢN PHẨM</h5>
                            <div class="hr"></div>
                            <div class="row">
                                @foreach($products_custom as $product)
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
                            <div class="d-flex justify-content-end">
                                    {{ $products->fragment('product')->links('include.pagination') }}
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    @include('layout.nav-right')
                </div>
            </div>
        </section>
        @endsection
