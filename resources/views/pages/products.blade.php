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
                        <div class="product" id="product">
                            <div class="row">
                                <div class="col-4">
                                    <h5>SẢN PHẨM</h5>
                                </div>
                                <div class="col-8  d-flex justify-content-end">
                                    <select id="orderProductsSelect" class="col-4" name="order_by">
                                        <option>Sắp xếp</option>
                                        <option value="created_at|desc"
                                            {{ $activeFilter === 'created_at|desc' ? 'selected' : '' }}>Mới nhất
                                        </option>
                                        <option value="order|desc"
                                            {{ $activeFilter === 'order|desc' ? 'selected' : '' }}>Hot nhất</option>
                                    </select>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="row">
                                @foreach($products_custom as $product)
                                <div class="col-6 col-md-4">
                                    <a href="/product/{!! $product->slug !!}">
                                        <div class="d-flex flex-column justify-content-center product-item">
                                            <div class="product-img">
                                                <img src="{!! $product->thumbnail !!}" alt="">
                                            </div>
                                            <div class="product-title">
                                                <p>{!! $product->name !!}</p>
                                            </div>
                                            <div class="product_author">
                                                <p>Nhà thiết kế: {!! $product->brand !!}</p>
                                            </div>
                                            <div class="product-price d-flex justify-content-between">
                                                <div class="price">
                                                    <p>{!! number_format($product->price) !!} đ</p>
                                                </div>
                                                <div class="original_price">{!!number_format($product->original_price)
                                                    !!} đ</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-end">
                                {{-- {{ $products->fragment('product')->links('include.pagination') }} --}}
                                {{ $products->appends($_GET)->render('include.pagination') }}
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
