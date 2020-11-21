@extends('layout.master')
@section('title')
<title>{!! getOption('lien-he-title') !!}</title>
@endsection
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
                    <div class="contact-head text-uppercase">Liên hệ</div>
                    <div class="line"></div>
                    <div class="contact-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <form action="{!! url('contact') !!}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Họ tên :</label>
                                        <input type="text" name="last_name" id="" class="form-control form-control-sm"
                                            placeholder="" aria-describedby="helpId" value="{{old('last_name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ :</label>
                                        <input type="text" name="address" id="" class="form-control form-control-sm"
                                            placeholder="" aria-describedby="helpId" value="{{old('address')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số điện thoại :</label>
                                        <input type="number" name="phone_number" id=""
                                            class="form-control form-control-sm" placeholder=""
                                            aria-describedby="helpId" value="{{old('phone_number')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email :</label>
                                        <input type="email" name="email" class="form-control form-control-sm"
                                            placeholder="" aria-describedby="helpId" value="{{old('email')}}"
                                            oninvalid="this.setCustomValidity('Email không hợp lệ')" onchange="this.setCustomValidity('')">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-textarea">Nội dung :</label>
                                        <textarea id="my-textarea" class="form-control form-control-sm" name="note"
                                            rows="3" value="{{old('note')}}"></textarea>
                                    </div>
                                    <input type="text" name="status" value="2" hidden>
                                    <input type="text" name="type" value="contacts" hidden>
                                    {{--  <div class="form-group">
                                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <img class="img-fluid capcha-img" src="assets/images/capcha.png" alt="">
                                        <i class="ml-4 fa fa-refresh"></i>
                                    </div> --}}
                                    <div class="btn-login">
                                        <a class="btn  btn-cancel" href="/">Hủy</a>
                                        <button type="submit" class="btn  btn-submit">Gửi</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                {!!getOption('lien-he-google-map')!!}
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
                    {{getOption('lien-he-website-title')}}
                </h5>
                <div>
                    <p>{{getOption('lien-he-address')}}</p>
                </div>
                <div>
                    <p>Hãy liên hệ với chúng tôi để có một sản phẩm tốt nhất cho bạn</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
