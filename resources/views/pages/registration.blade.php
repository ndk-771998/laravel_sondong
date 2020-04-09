@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Đăng Nhập</a></li>
            <li class="breadcrumb-item active">Đăng ký</li>
        </ul>
    </div>
</nav>
<section>
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="registration">
                        <h3 class=" text-uppercase">Đăng ký</h3>
                        @include('include.errors')
                        @include('include.messages')
                        <div class=" row justify-content-center my-24">
                            <form action="{!! route('register') !!}" method="POST" class="col-12 col-md-9">
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div class="form-group">
                                        <label for="">Họ </label>
                                        <input type="text" name="first_name" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tên </label>
                                        <input type="text" name="last_name" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" name="username" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu (<b class="text-danger">*</b>)</label>
                                    <input type="password" name="password" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Xác nhận mật khẩu (<b class="text-danger">*</b>)</label>
                                    <input type="password" name="password_confirmation" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Email (<b class="text-danger">*</b>)</label>
                                    <input type="email" name="email" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Xác nhận email (<b class="text-danger">*</b>)</label>
                                    <input type="email" name="email_confirmation" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" name="address" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại (<b class="text-danger">*</b>)</label>
                                    <input type="number" name="phone_number" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="btn-login d-flex justify-content-center">
                                    <button class="btn btn-dk">Đăng ký</button>
                                    <a href="login" class="btn btn-submit">Đăng nhập</a>
                                </div>
                            </form>
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
