@extends('layout.master')
@section('title')
<title>{!! $product->name !!}</title>
@endsection
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/product">Sản phẩm</a></li>
            <li class="breadcrumb-item active">{{$product->name}}</li>
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
                    @include('include.errors')
                    @include('include.messages')
                    <div class="product-detail">
                        <h3 class="text-uppercase">Chi tiết sản phẩm</h3>
                        <div class="p-flex my-24">
                            <div class="left">
                                <div class="product-thumbnail">
                                    <div class="item">
                                        <div class="tile" data-scale="4.0" data-image="{!! $product->thumbnail !!}"
                                            id="imgmain">
                                        </div>
                                    </div>
                                    @foreach($product->media as $media)
                                    <div class="item">
                                        <div class="tile" data-scale="4.0" data-image="{!! $media->getFullUrl() !!}">
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="product-thumbnail-child">
                                    <div class="item">
                                        <img src="{!! $product->thumbnail !!}" alt="{!! $product->name !!}" />
                                    </div>
                                    @foreach($product->media as $media)
                                    <div class="item">
                                        <img src="{!! $media->getFullUrl() !!}" id="{{$media->id}}"
                                            alt="{!! $media->alt_img !!}" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="right">
                                <h4>{!! $product->name !!}</h4>
                                <ul class="info-product">
                                    <li>Mã sản phẩm: {!! $product->sku !!}</li>
                                    <li class="design">Nhà thiết kế:{!! $product->getMetaField('brand_name') !!}</li>
                                    <li>Tình trạng:
                                        @if ($isAvailable == true)
                                        <span>Còn hàng</span>
                                        @else
                                        <span>Hết hàng</span>
                                        @endif
                                    </li>
                                    <li class="original_price">Giá gốc: {!! number_format($product->original_price) !!}
                                        đ</li>
                                    <li>Giá bán: <span class="cost">{!! number_format($product->price) !!} đ</span>/ sản
                                        phẩm</li>
                                    <li>Số lượng:
                                        @if($isAvailable)
                                        <input type="number" id="quantity_product" min="1" max="30" value="1">
                                        @else
                                        <input type="number" id="quantity_product" min="1" max="30" value="1" disabled>
                                        @endif
                                    </li>
                                    <li>Tổng tiền: <span class="total " id="total">{!! number_format($product->price)
                                            !!}</span><span class="text-dark"> đ</span></li>
                                </ul>
                                <ul class="buy d-flex flex-wrap align-items-center">
                                    @if($isAvailable)
                                    <form action="{{ route('cart-items.create') }}" method="post">
                                        {!! csrf_field() !!}
                                        <input class="productdetails-quantity" name="quantity" value="1" type="number"
                                            hidden min=1>
                                        <input name="product_id" value="{!! $product->id !!}" hidden>
                                        <input name="product_price" id="product_price" value="{!! $product->price !!}"
                                            hidden>
                                        <input name="redirect" value="cart" hidden>
                                        <li><input id="purchase-product-{!! $product->id !!}-submit" type="submit"
                                                class="btn-order" class="mb-2 mb-md-0" name="" value="Mua ngay"></li>
                                    </form>
                                    <form action="{{ route('cart-items.create') }}" method="post">
                                        {!! csrf_field() !!}
                                        <input class="productdetails-quantity" name="quantity" value="1" type="number"
                                            min=1 hidden>
                                        <input name="product_id" value="{!! $product->id !!}" hidden>
                                        <input name="product_price" value="{!! $product->price !!}" hidden>
                                        <li><input id="product-{!! $product->id !!}-submit" value="Thêm vào giỏ hàng"
                                                class="btn-next" type="submit" name=""></li>
                                    </form>
                                    @else
                                    <div class="h6 text-danger mt-2">Hết hàng</div>
                                    @endif
                                </ul>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> Hottline:
                                    {{getOption('chi-tiet-san-pham-hot-line')}}</p>
                            </div>
                        </div>
                        <div class="comment">
                            <h5>Bình luận</h5>
                            <form action="{{url('comment')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" required="" name="email"
                                        placeholder="Nhập email của bạn . . .">
                                    <input type="text" class="form-control" required name="user"
                                        placeholder="Nhập tên của bạn . . .">
                                    <textarea class="form-control" required name="content"
                                        placeholder="Nhập nội dung bình luận . . ."></textarea>
                                    <input name="commentable_id" value="{{ $product->id }}" hidden>
                                    <input name="commentable_type" value="products" hidden>
                                    <input type="submit" value="Gửi">
                                </div>
                            </form>
                        </div>
                        @include('comment::show')
                        <div class="related-posts mt-60">
                            <h3>Chi tiết sản phẩm</h3>
                            <div class="related-list d-flex flex-wrap mb-5">
                                @foreach($relatedProducts as $ProductItem)
                                <div class="item">
                                    <a href="{!! $ProductItem->slug !!}">
                                        <div class="d-flex flex-column justify-content-center product-item">
                                            <div class="product-img">
                                                <img src="{!! $ProductItem->thumbnail !!}"
                                                    alt="{!! $ProductItem->name !!}">
                                            </div>
                                            <div class="product-title">
                                                <h6>{!! $ProductItem->name !!}</h6>
                                            </div>
                                            <div class="product_author">
                                                <p>Nhà thiết kế: {!!$ProductItem->getMetaField('brand_name')!!}</p>
                                            </div>
                                            <div class="product-price d-flex justify-content-between">
                                                <div class="price">
                                                    <p>{!! number_format($ProductItem->price) !!} đ</p>
                                                </div>
                                                <div class="original_price">
                                                    {!!number_format($ProductItem->original_price) !!} đ</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
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
