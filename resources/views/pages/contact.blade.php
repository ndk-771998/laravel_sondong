@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">Liên hệ</li>
        </ul>
    </div>
</nav>
<section class="contact">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    @include('include.errors')
                    @include('include.messages')
                    <div class="contact-head">Liên hệ</div>
                    <div class="line"></div>
                    <div class="contact-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <form action="{!! url('contact') !!}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Họ tên :</label>
                                        <input type="text" required name="full_name" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ :</label>
                                        <input type="text" required name="address" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số điện thoại :</label>
                                        <input type="text" required name="phone_number" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email :</label>
                                        <input type="email" required name="email" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-textarea">Nội dung :</label>
                                        <textarea id="my-textarea" required class="form-control form-control-sm" name="note" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <img class="img-fluid capcha-img" src="assets/images/capcha.png" alt="">
                                        <i class="ml-4 fa fa-refresh"></i>
                                    </div>
                                    <div class="btn-login">
                                        <a class="btn  btn-cancel" href="/">Hủy</a>
                                        <button type="submit" class="btn  btn-submit">Gửi</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.462181800355!2d105.8185442154272!3d21.01418519365045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7c5b98159d%3A0x3d64918eb33c3a4b!2zNDIgTmfDtSAxNzggVGjDoWkgSMOgLCBUcnVuZyBMaeG7h3QsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1575019632832!5m2!1svi!2s" width="100%" height="460" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    @include('layout.nav-right')
                </div>
            </div>
            <div class="contact-info text-center">
                <h5>
                Website Sản phẩm bán hàng
                </h5>
                <div>
                    <p>Địa chỉ : Tầng 2, Số 42, Ngõ 178, Thái Hà, Trung Liệt, Đống Đa, Hà Nội</p>
                </div>
                <div>
                    <p>Hãy liên hệ với chúng tôi để có một sản phẩm tốt nhất cho bạn</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
