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
                        <h3>Đăng ký</h3>
                        <div class=" row justify-content-center my-24">
                            <form action="" class="col-12 col-md-9">
                                <div class="form-group">
                                    <label for="">Họ tên </label>
                                    <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu </label>
                                    <input type="password" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Xác nhận mật khẩu </label>
                                    <input type="password" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Xác nhận email</label>
                                    <input type="email" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input type="email" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="email" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="btn-login d-flex justify-content-center">
                                    <button class="btn btn-dk">Đăng ký</button>
                                    <button class="btn btn-submit">Đăng nhập</button>
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