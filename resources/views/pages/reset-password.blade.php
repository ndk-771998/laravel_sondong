@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">Đăng nhập</li>
        </ul>
    </div>
</nav>
<section class="login">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-12 col-md-6 col-lg-8 col-xl-9">
                    @include('include.messages')
                    @include('include.errors')
                    <div class="text-uppercase forgotpassword-title">Tạo mật khẩu mới</div>
                    <div class="line"></div>
                    <form class=" col-12 col-lg-7" action="{{ route('password.reset.post') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="token" value="{!! $token !!}" hidden>
                        <input type="email" name="email" value="{!! $email !!}" hidden>
                        <div class="col-12 col-lg-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label></label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nhập lại mật khẩu</label></label>
                                <input name="password_confirmation" type="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-login">Gửi</button>
                            <a href="{{ url('/') }}" class="btn btn-res">Hủy</a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-3">
                    @include('layout.nav-right')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
