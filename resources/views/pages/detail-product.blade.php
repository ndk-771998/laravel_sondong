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
                    <div class="row row-padding-16px">
                        <div class="col-12 col-md-5 col-padding-16px medias ">
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
                        <div class="col-12 col-md-7 col-padding-16px info ">
                            <div class="title">{{ $product->name }}</div>
                            <div class="price">
                                <div class="discount">{{ preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->price )}} ₫</div>
                                @if ($product->original_price)
                                <div class="origin">{{preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->original_price)}} ₫</div>
                                @endif
                            </div>
                            @if ($product->getMetaField('guarantee'))
                            <div class="guarantee"><strong>Bảo hành:</strong> {{ $product->getMetaField('guarantee') }} tháng</div> 
                            @endif
                            <div class="status"><strong>Tình trạng:</strong> {{ $product->quantity ? "Còn hàng" : "Đã bán hết"}}</div> 
                            <div class="parameters-link"><a href="#parameters">Xem cấu hình chi tiết</a></div>
                            <div class="bonus">
                                Tặng Balo Laptop
                            </div>
                            <div class="bonus">
                                Tặng PMH 200.000đ mua máy in Brother
                            </div>
                            <div class="bonus">
                                Tặng PMH 100.000đ mua Microsoft 365 Personal/Family/Home & Student khi mua Online đến 30/09
                            </div>
                            {{-- <div class="color">
                                Chọn màu: 
                                <select name="color" id="">
                                    <option value="1">Xám</option>
                                    <option value="2">Đen</option>
                                    <option value="3">Hường</option>
                                </select>
                            </div> --}}
                            
                            <div class="logos-wrap row-padding-16px">
                                <div class="col-padding-16px col-6">
                                    <div class="d-flex flex-row logo-item">
                                        <div class="logo">
                                            <img class="lazyload" data-src="{{ getOption('logo-van-chuyen') }}" alt="logo-van-chuyen">
                                        </div>
                                        <div class="label">
                                            Miễn phí vận chuyển
                                        </div>
                                    </div>
                                </div>
                                <div class="col-padding-16px col-6">
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
                            <div class="btn-buy" data-toggle="modal" data-target="#buyNow">
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
                <div class="product-parameter" id="parameters">
                    <div class="product-parameter-title">
                        Thông số kỹ thuật
                    </div>
                    <table class="parameter table-striped">
                        @if ($product->getMetaField('cpu'))
                        <tr>
                            <td><div>CPU</div></td>
                            <td><div>{{ $product->getMetaField('cpu') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('ram'))
                        <tr>
                            <td><div>RAM</div></td>
                            <td><div>{{ $product->getMetaField('ram') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('screen'))
                        <tr>
                            <td><div>Màn hình</div></td>
                            <td><div>{{ $product->getMetaField('screen') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('graphics'))
                        <tr>
                            <td><div>Đồ họa</div></td>
                            <td><div>{{ $product->getMetaField('graphics') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('hard_drive'))
                        <tr>
                            <td><div>Ổ cứng</div></td>
                            <td><div>{{ $product->getMetaField('hard_drive') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('os'))
                        <tr>
                            <td><div>Hệ điều hành</div></td>
                            <td><div>{{ $product->getMetaField('os') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('weight'))
                        <tr>
                            <td><div>Trọng lượng</div></td>
                            <td><div>{{ $product->getMetaField('weight') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('size'))
                        <tr>
                            <td><div>Kích thước (mm)</div></td>
                            <td><div>{{ $product->getMetaField('size') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('origin'))
                        <tr>
                            <td><div>Xuất xứ</div></td>
                            <td><div>{{ $product->getMetaField('origin') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('battery'))
                        <tr>
                            <td><div>Pin</div></td>
                            <td><div>{{ $product->getMetaField('battery') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('material'))
                        <tr>
                            <td><div>Chất liệu</div></td>
                            <td><div>{{ $product->getMetaField('material') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('resolution'))
                        <tr>
                            <td><div>Độ phân giải</div></td>
                            <td><div>{{ $product->getMetaField('resolution') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('touchscreen'))
                        <tr>
                            <td><div>Màn hình cảm ứng</div></td>
                            <td><div>{{ $product->getMetaField('touchscreen') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('lightkeybroad'))
                        <tr>
                            <td><div>Đèn bàn phím</div></td>
                            <td><div>{{ $product->getMetaField('lightkeybroad') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('sound'))
                        <tr>
                            <td><div>Công nghệ âm thanh</div></td>
                            <td><div>{{ $product->getMetaField('sound') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('bluetooth'))
                        <tr>
                            <td><div>Bluetooth</div></td>
                            <td><div>{{ $product->getMetaField('bluetooth') }}</div></td>
                        </tr>
                        @endif
                        @if ($product->getMetaField('specialfunction'))
                        <tr>
                            <td><div>Tính năng đặc biệt</div></td>
                            <td><div>{{ $product->getMetaField('specialfunction') }}</div></td>
                        </tr>
                        @endif
                    </table>
                    <div class="detail show-more-parameter">
                        <a href="#parameters" class="hide">Xem cấu hình chi tiết <i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include.product.product-slide', ['list_title' => 'Các phụ kiện thường được mua cùng', 'product_type' => 'categories/phu-kien', 'products' => $accressories, 'price_filter' => false])
    @include('include.product.product-slide', ['list_title' => 'Các sản phẩm tương tự', 'product_type' => $product->product_type, 'products' => $relatedProducts, 'price_filter' => false])

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
                    <button type="button" class="btn btn-primary p-2 w-25 m-auto d-block order-submit" id="orderSuccessfullySubmit" data-dismiss="modal">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if (Session::has('message-create-order-error'))
    <div class="modal fade order-successfully" id="orderSuccessfully" role="dialog" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    {{-- <img src="/assets/images/logo/success.svg" alt="error"> --}}
                    <h2>Lỗi đặt hàng</h2>
                    <p>Có lỗi khi tạo mới đơn hàng. Sản phẩm đã được bán hết.</p>
                    <button type="button" class="btn btn-primary p-2 w-25 m-auto d-block order-submit" id="orderSuccessfullySubmit" data-dismiss="modal">Đồng ý</button>
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
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone">
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
