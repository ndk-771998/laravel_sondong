@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">Thông tin cá nhân</li>
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
                    <div class="login-head text-uppercase">Thông tin cá nhân</div>
                    <div class="line"></div>
                    @include('include.errors')
                    <div class="col-12 col-md-12  pr-0 pl-0 pr-sm-block">
                        <div class="account-table col-12 col-sm-12 col-md-12">
                            <div class="d-flex">
                                <div class="account-type">Họ và tên</div>
                                <div class="account-info ">{!! $authUser->fullName !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Ngày sinh</div>
                                <div class="account-info ">{!! $authUser->birth !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Giới tính</div>
                                <div class="account-info ">{!! $authUser->gender !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-sm-flex">
                                <div class="account-type">Địa chỉ email:</div>
                                <div class="account-info ">{!! $authUser->email !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Số điện thoại</div>
                                <div class="account-info ">{!! $authUser->phone_number !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Địa chỉ</div>
                                <div class="account-info ">{!! $authUser->address !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="btn-next-comeback d-flex justify-content-center mb-2 mb-lg-0">
                                {{-- <a class="btn-order mr-3">Chỉnh  sửa </a> --}}
                                {{-- <a href="/" class="btn-next mr-md-4">Đóng</a> --}}
                                <a href="{{ url('logout') }}" class="btn-next mr-md-4">Đăng xuất</a>
                            </div>
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
