@extends('layout.master')
@section('content')
<section>
    @include('include.slides')
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
                                    <a href="product/{!! $product->slug !!}">
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
                        <div class="product">
                            <div class="row title">
                                <div class="col-6 ">
                                    <h5>HỖ TRỢ TRIỂN LÃM CƯỚI({!! $exhibitionCount!!})</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="">
                                        <p>Xem tất cả</p>
                                    </a>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="row">
                                @foreach($exhibition as $exhibitionItem)
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="{!! $exhibitionItem->thumbnail !!}"alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>{!! $exhibitionItem->name !!}</p>
                                        </div>
                                        <div class="product-price d-flex justify-content-between">
                                            <div class="price"><p>{!! number_format($exhibitionItem->price) !!} đ</p></div>
                                            <div class="original_price">{!! number_format($exhibitionItem->original_price) !!} đ</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="product">
                            <div class="row title">
                                <div class="col-6 ">
                                    <h5>ĐỊA ĐIỂM CƯỚI LÃNG MẠNG({!! $placeCount!!})</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="">
                                        <p>Xem tất cả</p>
                                    </a>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="row">
                                @foreach($place as $placeItem)
                                <div class="col-6 col-md-4">
                                    <div class="d-flex flex-column justify-content-center product-item">
                                        <div class="product-img">
                                            <img src="{!! $placeItem->thumbnail !!}" alt="">
                                        </div>
                                        <div class="product-title">
                                            <p>{!! $placeItem->name !!}</p>
                                        </div>
                                        <div class="product-price d-flex justify-content-between">
                                            <div class="price"><p>{!! number_format($placeItem->price) !!} đ</p></div>
                                            <div class="original_price">{!! number_format($placeItem->original_price) !!} đ</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="product">
                            <div class="row title">
                                <div class="col-6 ">
                                    <h5>TIN TỨC</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="/news">
                                        <p>Xem tất cả</p>
                                    </a>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex flex-column news ">
                                @foreach($news as $newsItem)
                                <a href="{{ url('posts/'.$newsItem->slug) }}">
                                    <div class="d-flex description">
                                        <div><img src="{!! $newsItem->getMetaField('thumbnail') !!}" alt=""></div>
                                        <div>
                                            <h6>{!! $newsItem->title !!}</h6>
                                            <p>{!! $newsItem->description !!}</p>
                                            <u>Xem chi tiết</u>
                                        </div>
                                    </div>
                                </a>
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
