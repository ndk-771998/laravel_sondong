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


<section class="service">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="service-head">Dịch vụ</div>
                    <div class="line"></div>

                    <div class="service-title">
                        Bảo quản quần áo,phụ trang đúng cách
                    </div>
                    <div class="service-description">
                        Thời trang là nền tảng của cuộc sống, trong mỗi chúng ta ai ai cũng đều ñịnh hình cho mình moät phong cách thời trang thể hiện cá tính và phù hợp với môi trường làm việc, tự tin trong cuộc sống. <br><br>

                        Shop thời trang là shop tiên phong trong lĩnh vực thời trang, cung cấp sỉ và lẻ hàng xách tay như quần áo, túi xách, giày dép, thắt lưng, và một số trang sức phụ kiện khác…<br><br>

                        Phân phối rộng rãi trên thị trường, giới thiệu đến khách hàng những mẫu mã mới nhaát phù hợp với xu hướng thời trang hiện nay.Shop thời trang thường xuyên tổ chức chương trình event và khuyến mãi lớn dành cho những khách hàng quen thuộc diễn ra hàng năm để tỏ lòng tri ân mà khách hàng đã dành cho shop.<br><br>

                        Tuy xuất hiện trên thị trường chỉ hơn một năm qua nhưng Shop thời trang chiếm được cảm tình của đông đảo khách hàng và cung cách phục vụ và giá cả phải chăng,với phương châm “đáp ứng mọi nhu cầu khách hàng cần”.
                    </div>
                    <div class="text-center">
                        <img class="img-fluid service-img" src="assets/images/word.png" alt="">
                    </div>
                    <div class="service-description">
                        Thời trang là nền tảng của cuộc sống, trong mỗi chúng ta ai ai cũng đều ñịnh hình cho mình moät phong cách thời trang thể hiện cá tính và phù hợp với môi trường làm việc, tự tin trong cuộc sống. <br><br>

                        Shop thời trang là shop tiên phong trong lĩnh vực thời trang, cung cấp sỉ và lẻ hàng xách tay như quần áo, túi xách, giày dép, thắt lưng, và một số trang sức phụ kiện khác…<br><br>

                        Phân phối rộng rãi trên thị trường, giới thiệu đến khách hàng những mẫu mã mới nhaát phù hợp với xu hướng thời trang hiện nay.Shop thời trang thường xuyên tổ chức chương trình event và khuyến mãi lớn dành cho những khách hàng quen thuộc diễn ra hàng năm để tỏ lòng tri ân mà khách hàng đã dành cho shop.<br><br>

                        Tuy xuất hiện trên thị trường chỉ hơn một năm qua nhưng Shop thời trang chiếm được cảm tình của đông đảo khách hàng và cung cách phục vụ và giá cả phải chăng,với phương châm “đáp ứng mọi nhu cầu khách hàng cần”.
                    </div>
                    <div class="text-center">
                        <img class="img-fluid service-img" src="assets/images/word.png" alt="">
                    </div>
                    <div class="service-description">
                        Thời trang là nền tảng của cuộc sống, trong mỗi chúng ta ai ai cũng đều ñịnh hình cho mình moät phong cách thời trang thể hiện cá tính và phù hợp với môi trường làm việc, tự tin trong cuộc sống. <br><br>

                        Shop thời trang là shop tiên phong trong lĩnh vực thời trang, cung cấp sỉ và lẻ hàng xách tay như quần áo, túi xách, giày dép, thắt lưng, và một số trang sức phụ kiện khác…<br><br>

                        Phân phối rộng rãi trên thị trường, giới thiệu đến khách hàng những mẫu mã mới nhaát phù hợp với xu hướng thời trang hiện nay.Shop thời trang thường xuyên tổ chức chương trình event và khuyến mãi lớn dành cho những khách hàng quen thuộc diễn ra hàng năm để tỏ lòng tri ân mà khách hàng đã dành cho shop.<br><br>
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