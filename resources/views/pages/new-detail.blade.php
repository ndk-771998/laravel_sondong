@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">Dịch vụ</li>

        </ul>
    </div>
</nav>
<section class="new-detail">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="new-detail-head">Dịch vụ</div>
                    <div class="line"></div>
                    <div class="new-detail-title">
                        Cách điệu áo dài trong ngày cưới
                    </div>
                    <div class="new-detail-description">
                        Thời trang là nền tảng của cuộc sống, trong mỗi chúng ta ai ai cũng đều ñịnh hình cho mình moät phong cách thời trang thể hiện cá tính và phù hợp với môi trường làm việc, tự tin trong cuộc sống. <br><br>

                        Shop thời trang là shop tiên phong trong lĩnh vực thời trang, cung cấp sỉ và lẻ hàng xách tay như quần áo, túi xách, giày dép, thắt lưng, và một số trang sức phụ kiện khác…<br><br>

                        Phân phối rộng rãi trên thị trường, giới thiệu đến khách hàng những mẫu mã mới nhaát phù hợp với xu hướng thời trang hiện nay.Shop thời trang thường xuyên tổ chức chương trình event và khuyến mãi lớn dành cho những khách hàng quen thuộc diễn ra hàng năm để tỏ lòng tri ân mà khách hàng đã dành cho shop.<br><br>

                        Tuy xuất hiện trên thị trường chỉ hơn một năm qua nhưng Shop thời trang chiếm được cảm tình của đông đảo khách hàng và cung cách phục vụ và giá cả phải chăng,với phương châm “đáp ứng mọi nhu cầu khách hàng cần”.
                    </div>
                    <div class="text-center">
                        <img class="img-fluid new-detail-img" src="assets/images/word.png" alt="">
                    </div>
                    <div class="new-detail-description">
                        Thời trang là nền tảng của cuộc sống, trong mỗi chúng ta ai ai cũng đều ñịnh hình cho mình moät phong cách thời trang thể hiện cá tính và phù hợp với môi trường làm việc, tự tin trong cuộc sống. <br><br>

                        Shop thời trang là shop tiên phong trong lĩnh vực thời trang, cung cấp sỉ và lẻ hàng xách tay như quần áo, túi xách, giày dép, thắt lưng, và một số trang sức phụ kiện khác…<br><br>

                        Phân phối rộng rãi trên thị trường, giới thiệu đến khách hàng những mẫu mã mới nhaát phù hợp với xu hướng thời trang hiện nay.Shop thời trang thường xuyên tổ chức chương trình event và khuyến mãi lớn dành cho những khách hàng quen thuộc diễn ra hàng năm để tỏ lòng tri ân mà khách hàng đã dành cho shop.<br><br>

                        Tuy xuất hiện trên thị trường chỉ hơn một năm qua nhưng Shop thời trang chiếm được cảm tình của đông đảo khách hàng và cung cách phục vụ và giá cả phải chăng,với phương châm “đáp ứng mọi nhu cầu khách hàng cần”.
                    </div>
                    <div class="text-center">
                        <img class="img-fluid new-detail-img" src="assets/images/word.png" alt="">
                    </div>
                    <div class="new-detail-description">
                        Thời trang là nền tảng của cuộc sống, trong mỗi chúng ta ai ai cũng đều ñịnh hình cho mình moät phong cách thời trang thể hiện cá tính và phù hợp với môi trường làm việc, tự tin trong cuộc sống. <br><br>

                        Shop thời trang là shop tiên phong trong lĩnh vực thời trang, cung cấp sỉ và lẻ hàng xách tay như quần áo, túi xách, giày dép, thắt lưng, và một số trang sức phụ kiện khác…<br><br>

                        Phân phối rộng rãi trên thị trường, giới thiệu đến khách hàng những mẫu mã mới nhaát phù hợp với xu hướng thời trang hiện nay.Shop thời trang thường xuyên tổ chức chương trình event và khuyến mãi lớn dành cho những khách hàng quen thuộc diễn ra hàng năm để tỏ lòng tri ân mà khách hàng đã dành cho shop.<br><br>
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

                    <div class="news-relate">
                        <div class="news-relate-title">Tin tức liên quan:</div>
                        <ul class="list-unstyled">
                            <li>Giải pháp khi mặc váy cưới đuôi dài</li>
                            <li>Tổng giờ ngủ bé cần mỗi ngày đêm</li>
                            <li>Cách chọn vàng trang sức cho ngày cưới</li>
                        </ul>
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