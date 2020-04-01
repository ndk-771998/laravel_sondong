@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb"id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Tìm kiếm</li>
        </ul>
    </div>
</nav>
<section>
    <div class="container">
        <div class="search">
            <div class="search-form">
                <label>Tìm kiếm</label>
                <div class="col-12 col-md-6 form">
                    <form>
                        <div class="input-group row">
                            <input type="search"placeholder="Tìm kiếm..."aria-describedby="button-addon5"class="form-control">
                            <div class="input-group-append">
                                <button id="button-addon5"type="submit"class="btn d-flex"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div><i>Kết quả tìm kiếm:</i></div>
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
                                {{--  <div class="row">
                                    <div class="col-4 col-md-2">
                                        <a href="product-detail">
                                            <div class="d-flex flex-column justify-content-center product-item">
                                                <div class="product-img">
                                                    <img src="/assets/images/LA_4894.png"alt="">
                                                </div>
                                                <div class="product-title">
                                                    <p>Váy cưới khóa dây ren buộc trước</p>
                                                </div>
                                                <div class="product_author">
                                                    <p>Nhà thiết kế: Phi Tahc</p>
                                                </div>
                                                <div class="product-price d-flex justify-content-between">
                                                    <div class="price"><p>1,000,000 đ</p></div>
                                                    <div class="original_price">1,200,000 đ</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div> --}}
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2">
                                                    <a href="product-detail">
                                                        <div class="d-flex flex-column justify-content-center product-item">
                                                            <div class="product-img">
                                                                <img src="/assets/images/LA_4894.png"alt="">
                                                            </div>
                                                            <div class="product-title">
                                                                <p>Váy cưới khóa dây ren buộc trước</p>
                                                            </div>
                                                            <div class="product_author">
                                                                <p>Nhà thiết kế: Phi Tahc</p>
                                                            </div>
                                                            <div class="product-price d-flex justify-content-between">
                                                                <div class="price"><p>1,000,000 đ</p></div>
                                                                <div class="original_price">1,200,000 đ</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="news">
                                <div><i>Tin tức</i></div>
                                <div>
                                    <div class="d-flex flex-column">
                                        <div class="description">
                                            <a href="" class="d-flex">
                                                <div><img src="/assets/images/news/img1.png"alt=""></div>
                                                <div class="news-info">
                                                    <h6>Cách chọn vàng trang sức cho ngày cưới</h6>
                                                    <p>Nhiều gia đình muốn tặng cô dâu trang sức vàng 24K nhưng loại trang sức này khó sử dụng lại sau đám cưới và không thể bán đi.</p>
                                                    <div><u>Xem chi tiết</u></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade"id="pills-profile"role="tabpanel"aria-labelledby="pills-profile-tab">...</div>
                        <div class="tab-pane fade"id="pills-contact"role="tabpanel"aria-labelledby="pills-contact-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
