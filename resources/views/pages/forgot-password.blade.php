@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/login">Đăng nhập</a></li>
            <li class="breadcrumb-item">Quên mật khẩu</li>
        </ul>
    </div>
</nav>

<section class="forgot-password">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="forgot-password-head">Quên mật khẩu</div>
                    <div class="line"></div>
                    @include('include.messages')
                    @include('include.errors')
                    <div class="forgot-password-form">
                        <form action="{{ route('password.forgot') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-2">

                                </div>
                                <div class="col-12 col-md-8">
                                    <div  class="form-group">
                                        <label for="">Email đăng ký tài khoản</label>
                                        <input type="email" name="email" id="" class="form-control  form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>

                                </div>

                            </div>
                            <div class="text-center btn-forgot">
                                <button type="submit" class="btn btn-res">Gửi</button>
                                <a href="{{ url('login') }}" class="btn btn-cancel">Hủy</a>
                            </div>


                        </form>
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
