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
                <div class="col-12 col-12 col-md-6 forgot-password">
                    <div class="text-uppercase forgotpassword-title">Tạo mật khẩu mới</div>
                    <div class="line mb-3"></div>
                    @include('include.messages')
                    @include('include.errors')
                    <form class=" col-12" action="{{ route('password.reset.post') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="token" value="{!! $token !!}" hidden>
                        <input type="email" name="email" value="{!! $email !!}" hidden>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label></label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="exampleInputEmail1">Nhập lại mật khẩu</label></label>
                                <input name="password_confirmation" type="password" class="form-control">
                            </div>
                            <div class="button-reset">
                            <button type="submit" class="btn btn-login">Gửi</button>
                            <a href="{{ url('/') }}" class="btn btn-res">Hủy</a>
                            </div>
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
