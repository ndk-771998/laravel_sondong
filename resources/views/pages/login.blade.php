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
                <div class="col-12 col-md-6">
                    <div class="login-head">Đăng nhập</div>
                    <div class="line"></div>
                    <div class="login-form">
                        <form action="" method="">
                            <div class="row">
                                <div class="col-12 col-md-2">

                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="form-group">
                                        <label for="">Tên đăng nhập</label>
                                        <input type="email" name="" id="email" class="form-control  form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mật khẩu</label>
                                        <input type="password" name="password" id="" class="form-control  form-control-sm" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <small id="helpId" class="text-muted"><a href="forgot-password">Quên mật khẩu?</a></small>


                                </div>

                            </div>
                            <div class="text-center btn-forgot">
                                <a href="registration" class="btn btn-res" >Đăng kí</a>
                                <button class="btn btn-cancel">Hủy</button>
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