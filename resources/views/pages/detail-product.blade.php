@extends('layout.master')
@section('title')
<title>{!! $product->name !!}</title>
@endsection
@section('content')

<section>
    <div class="container product-detail-container">
        <div class="row-padding-16px">
            <div class="col-padding-16px w-100">
                @include('include.breadcrumb', ['breadcrumb' => ['Sản phẩm' => '/product', $product->name => '']])
            </div>
            
            <div class="col-padding-16px w-100 product-info-wrap">
                <div class="product-info">
                    <div class="row">
                        <div class="col-12 col-md-5 medias">
                            @if ($product->price && $product->original_price)
                                <div class="tag-sale">
                                    {{floor(($product->price - $product->original_price)/$product->original_price*100)}}%
                                </div>
                            @endif
                            <div class="thumbnail-silde-for">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                                </div>
                                @foreach ($product->media as $media)
                                    <div class="item">
                                        <img class="lazyload" data-src="{!! $media->getFullUrl() !!}" id="{{ $media->id }}"
                                            alt="{!! $media->alt_img !!}" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="thumbnail-silde-nav">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                                </div>
                                @foreach ($product->media as $media)
                                    <div class="item">
                                        <img class="lazyload" data-src="{!! $media->getFullUrl() !!}" id="{{ $media->id }}"
                                            alt="{!! $media->alt_img !!}" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-md-7 info">
                            <div class="title">{{ $product->name }}</div>
                            <div class="price">
                                <div class="discount">{{ preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->price )}} ₫</div>
                                <div class="origin">{{preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->original_price)}} ₫</div>
                            </div>
                            @if ($product->getFirstCategoryLabelByType('manufacturer'))
                            <div class="manufacturer">Hãng sản xuất: <a href="#">{{ $product->getFirstCategoryLabelByType('manufacturer') }}</a></div>
                            @endif
                            <div class="sold">Lượt mua: {{ $product->sold_quantity }}</div>
                            <div class="bonus">
                                Tặng Balo Laptop
                            </div>
                            <div class="bonus">
                                Tặng PMH 200.000đ mua máy in Brother
                            </div>
                            <div class="bonus">
                                Tặng PMH 100.000đ mua Microsoft 365 Personal/Family/Home & Student khi mua Online đến 30/09
                            </div>
                            <div class="color">
                                Chọn màu: 
                                <select name="color" id="">
                                    <option value="1">Xám</option>
                                    <option value="2">Đen</option>
                                    <option value="3">Hường</option>
                                </select>
                            </div>
                            <div class="btn-buy mt-4" data-toggle="modal" data-target="#buyNow">
                                Mua ngay
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-padding-16px product-content-wrap">
                <div class="product-content">
                    <div class="product-content-title">
                        Đặc điểm nổi bật
                    </div>
                    <div class="content">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
            <div class="col-padding-16px product-parameter-wrap">
                <div class="product-parameter">
                    <div class="product-parameter-title">
                        Thông số kỹ thuật
                    </div>
                    <table class="parameter table-striped">
                        <tr>
                            <td>CPU</td>
                            <td>{{ $product->getMetaField('cpu') }}</td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td>{{ $product->getMetaField('ram') }}</td>
                        </tr>
                        <tr>
                            <td>Màn hình</td>
                            <td>{{ $product->getMetaField('screen') }}</td>
                        </tr>
                        <tr>
                            <td>Đồ họa</td>
                            <td>{{ $product->getMetaField('graphics') }}</td>
                        </tr>
                        <tr>
                            <td>Ổ cứng</td>
                            <td>{{ $product->getMetaField('hard_drive') }}</td>
                        </tr>
                        <tr>
                            <td>Hệ điều hành</td>
                            <td>{{ $product->getMetaField('os') }}</td>
                        </tr>
                        <tr>
                            <td>Trọng lượng</td>
                            <td>{{ $product->getMetaField('weight') }}</td>
                        </tr>
                        <tr>
                            <td>Kích thước (mm)</td>
                            <td>{{ $product->getMetaField('size') }}</td>
                        </tr>
                        <tr>
                            <td>Xuất xứ</td>
                            <td>{{ $product->getMetaField('origin') }}</td>
                        </tr>
                    </table>
                    <div class="detail">
                        <a href="#">Xem cấu hình chi tiết <i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include.product.product-slide', ['list_title' => 'Các phụ kiện thường được mua cùng', 'products' => $accressories])
    @include('include.product.product-slide', ['list_title' => 'Các sản phẩm tương tự', 'products' => $relatedProducts])

    <div class="modal fade buy-now-modal" id="buyNow" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-info d-flex flex-row align-items-center">
                        <div class="thumbnail">
                            <img class="lazyload" data-src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                        </div>
                        <div class="label">
                            <div class="title">{{ $product->name }}</div>
                            <div class="price">{{ preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->price )}} ₫</div>
                        </div>
                    </div>

                    <div class="order-info">
                        <form action="{{route('order.create')}}" method="post">
                            @csrf
                            <input type="text" name="slug" value="{{$product->slug}}" style="display: none">
                            <div class="form-group">
                                <label>Giới tính:</label>
                                <div class="radio">
                                    <label><input type="radio" name="gender"> Nam</label>
                                    <label><input type="radio" name="gender"> Nữ</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Họ và tên:<span class="required">*</span></label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:<span class="required">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:<span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ giao hàng/ ghi chú:<span class="required">*</span></label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <button type="submit" class="btn btn-primary p-2 w-25 d-block order-submit">ĐẶT HÀNG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (Session::has('message-create-order-succeed'))
    <div class="modal fade order-successfully" id="orderSuccessfully" role="dialog" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/assets/images/logo/success.svg" alt="success">
                    <h2>Xác nhận đặt hàng</h2>
                    <p>Đơn hàng của bạn đã được gửi đi thành công, trong giờ mở cửa, chúng tôi sẽ liên hệ với quý khách trong ít phút.</p>
                    <button type="button" class="btn btn-primary p-2 w-25 m-auto d-block order-submit" id="orderSuccessfullySubmit">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    @if ($errors->any())
    <div class="modal fade buy-now-modal" id="buyNowError" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-info d-flex flex-row align-items-center">
                        <div class="thumbnail">
                            <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                        </div>
                        <div class="label">
                            <div class="title">{{ $product->name }}</div>
                            <div class="price">{{ preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->price )}} ₫</div>
                        </div>
                    </div>

                    <div class="order-info">
                        <form action="{{route('order.create')}}" method="post">
                            @csrf
                            <input type="text" name="slug" value="{{$product->slug}}" style="display: none">
                            <div class="form-group">
                                <label>Giới tính:</label>
                                <div class="radio">
                                    <label><input type="radio" name="gender"> Nam</label>
                                    <label><input type="radio" name="gender"> Nữ</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Họ và tên:<span class="required">*</span></label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username">
                                @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:<span class="required">*</span></label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email:<span class="required">*</span></label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ giao hàng/ ghi chú:<span class="required">*</span></label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address">
                                @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary p-2 w-25 d-block order-submit">ĐẶT HÀNG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
@endsection
