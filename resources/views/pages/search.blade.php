@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb"id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active">Tìm kiếm</li>
        </ul>
    </div>
</nav>
<section>
    <div class="container">
        <div class="search">
            <div class="search-form">
                <label class="text-uppercase">Tìm kiếm</label>
                <div class="col-12 col-md-6 form">
                    <form action="{{ route('search') }}">
                        <div class="input-group row">
                            <input type="search" name="search" placeholder="Tìm kiếm..."aria-describedby="button-addon5" class="form-control">
                            <div class="input-group-append">
                                <button id="button-addon5"type="submit"class="btn d-flex"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div><i>Kết quả tìm kiếm:</i></div>
                @if($result !== [] && $result['search'] !== null)
                <div>
                    <ul class="nav nav-pills mb-3"id="pills-tab"role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active"id="pills-home-tab"data-toggle="pill"href="#pills-home"role="tab"aria-controls="pills-home"aria-selected="true">Tất cả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"id="pills-profile-tab"data-toggle="pill"href="#pills-profile"role="tab"aria-controls="pills-profile"aria-selected="false">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"id="pills-contact-tab"data-toggle="pill"href="#pills-contact"role="tab"aria-controls="pills-contact"aria-selected="false">Tin tức</a>
                        </li>
                    </ul>
                    <div class="tab-content"id="pills-tabContent">
                        <div class="tab-pane fade show active"id="pills-home"role="tabpanel"aria-labelledby="pills-home-tab">
                            <div class="product">
                                <div><i>Sản phẩm</i></div>
                                @if ($products->count())
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                @foreach($products as $product)
                                                <div class="col-4 col-md-2">
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
                                        </div>
                                    </div>
                                    <div class="">
                                        {{ $products->fragment('pills-home')->links('layout.search-pagination') }}
                                    </div>
                                </div>
                                @else
                                <h6 class="mt-1">Không tìm thấy kết quả !</h6>
                                @endif
                            </div>
                            <div class="news">
                                <div><i>Tin tức</i></div>
                                @if ($news->count())
                                <div>
                                    <div class="d-flex flex-column" id="news">
                                        @foreach($news as $newsItem)
                                        <div class="description">
                                            <a href="{!! $newsItem->slug !!}" class="d-flex">
                                                <div><img src="{!! $newsItem->getMetaField('thumbnail') !!}" alt=""></div>
                                                <div class="news-info">
                                                    <h6>{!! $newsItem->title !!}</h6>
                                                    <p>{!! $newsItem->description !!}</p>
                                                    <div><u>Xem chi tiết</u></div>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @else
                                <h6 class="mt-1">Không tìm thấy kết quả !</h6>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile"role="tabpanel"aria-labelledby="pills-profile-tab">
                            <div class="product">
                                @if ($products_tabpane->count())
                                <div class="row">
                                    @foreach($products_tabpane as $product_tabpane)
                                    <div class="col-4 col-md-2">
                                        <a href="/">
                                            <div class="d-flex flex-column justify-content-center product-item">
                                                <div class="product-img">
                                                    <img src="{!! $product_tabpane->thumbnail !!}"alt="">
                                                </div>
                                                <div class="product-title">
                                                    <p>{!! $product_tabpane->name !!}</p>
                                                </div>
                                                <div class="product_author">
                                                    <p>Nhà thiết kế: Phi Tahc</p>
                                                </div>
                                                <div class="product-price d-flex justify-content-between">
                                                    <div class="price"><p>{!! number_format($product_tabpane->price) !!} đ</p></div>
                                                    <div class="original_price">{!!number_format($product_tabpane->original_price) !!} đ</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    <div class="col-12 mt-2 d-flex justify-content-center">
                                        {{ $products_tabpane->fragment('pills-profile')->links('include.pagination') }}
                                    </div>
                                </div>
                            </div>
                            @else
                            <h6 class="mt-1">Không tìm thấy kết quả !</h6>
                            @endif
                        </div>
                        <div class="tab-pane fade"id="pills-contact"role="tabpanel"aria-labelledby="pills-contact-tab">
                            <div class="news">
                                <div><i>Tin tức</i></div>
                                @if ($news_tabpane->count())
                                <div>
                                    <div class="d-flex flex-column" id="news-pane">
                                        @foreach($news_tabpane as $newsItem)
                                        <div class="description">
                                            <a href="{!! $newsItem->slug !!}" class="d-flex">
                                                <div><img src="{!! $newsItem->getMetaField('thumbnail') !!}" alt=""></div>
                                                <div class="news-info">
                                                    <h6>{!! $newsItem->title !!}</h6>
                                                    <p>{!! $newsItem->description !!}</p>
                                                    <div><u>Xem chi tiết</u></div>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                        <div class="mt-2">
                                            {{ $news_tabpane->fragment('news-pane')->links('include.pagination') }}
                                        </div>
                                    </div>
                                </div>
                                @else
                                <h6 class="mt-1">Không tìm thấy kết quả !</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="mt-3 h5 text-danger">Hãy nhập từ khóa !</div>
                @endif
            </div>
        </div>
    </div>
</div>
</section>
@endsection
