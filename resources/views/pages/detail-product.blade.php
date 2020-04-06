@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/product">Sản phẩm</a></li>
            <li class="breadcrumb-item active">Chi tiết</li>
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
                    <div class="product-detail">
                        <h3>Chi tiết sản phẩm</h3>
                        <div class="p-flex my-24">
                            <div class="left">

                            </div>
                            <div class="right">
                                <h4>{!! $product->name !!}</h4>
                                <ul class="info-product">
                                    <li>Mã sản phẩm: {!! $product->code !!}</li>
                                    <li class="design">Nhà thiết kế: Phi Tahc</li>
                                    <li>Tình trạng:
                                        @if ($isAvailable == true)
                                        <span>Còn hàng</span>
                                        @else
                                        <span>Hết hàng</span>
                                        @endif
                                    </li>
                                    <li class="original_price">Giá gốc: {!! number_format($product->original_price) !!} đ</li>
                                    <li>Giá bán: <span class="cost">{!! number_format($product->price) !!} đ</span>/ sản phẩm</li>
                                    {{-- <li>Số lượng: <input type="number" name="" id=""></li> --}}
                                    <li>Tổng tiền: <span class="total ">{!! number_format($product->price) !!} đ</span></li>
                                </ul>
                                <ul class="buy d-flex flex-wrap align-items-center">
                                    <li class="mb-2 mb-md-0"><a href="">Mua ngay</a></li>
                                    <li><a href="cart">Thêm vào giỏ hàng</a></li>
                                </ul>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> Hottline:+84 868 21 08 62</p>
                            </div>
                        </div>
                        <div class="comment">
                            <h5>Bình luận</h5>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Nhập email của bạn . . .">
                                    <input type="text" class="form-control " placeholder="Nhập tên của bạn . . .">
                                    <textarea class="form-control " placeholder="Nhập nội dung bình luận . . ."></textarea>
                                    <input type="submit" value="Gửi">
                                </div>
                            </form>
                        </div>
                        <div class="related-posts mt-60">
                            <h3>Chi tiết sản phẩm</h3>
                            <div class="related-list d-flex flex-wrap mb-5">
                                <div class="item">
                                    <a href="">
                                        <img src="https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/e9fe5eec-ee2f-4ee4-b3a6-1bbe7fa59d41.png" alt="">
                                    </a>
                                    <a href="">
                                        <h5>Váy cưới khóa dây ren buộc trước</h5>
                                    </a>
                                    <div class="total">
                                        Giá bán: 1,000,000 đ
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <img src="https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/e9fe5eec-ee2f-4ee4-b3a6-1bbe7fa59d41.png" alt="">
                                    </a>
                                    <a href="">
                                        <h5>Váy cưới khóa dây ren buộc trước</h5>
                                    </a>
                                    <div class="total">
                                        Giá bán: 1,000,000 đ
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <img src="https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/e9fe5eec-ee2f-4ee4-b3a6-1bbe7fa59d41.png" alt="">
                                    </a>
                                    <a href="">
                                        <h5>Váy cưới khóa dây ren buộc trước</h5>
                                    </a>
                                    <div class="total">
                                        Giá bán: 1,000,000 đ
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
