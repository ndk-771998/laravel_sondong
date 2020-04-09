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
                    <div class="col-12 col-md-12  pr-0 pl-0 pr-sm-block mt-4">
                        <div class="account-table col-12 col-sm-12 col-md-12">
                            <div class="d-flex">
                                <div class="account-type">Họ và tên</div>
                                <div class="account-info ">{!! Auth::user()->username !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Ngày sinh</div>
                                <div class="account-info ">{!! Auth::user()->birth !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Giới tính</div>
                                <div class="account-info ">{!! Auth::user()->gender !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-sm-flex">
                                <div class="account-type">Địa chỉ email:</div>
                                <div class="account-info ">{!! Auth::user()->email !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Số điện thoại</div>
                                <div class="account-info ">{!! Auth::user()->phone_number !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Địa chỉ</div>
                                <div class="account-info ">{!! Auth::user()->address !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="btn-next-comeback d-flex justify-content-center mb-2 mb-lg-0">
                                <input type="button" class="btn-order mr-3" value="Chỉnh  sửa ">
                                <a href="{{ url('logout') }}" class="btn-next mr-md-4">Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                    <div class="login-head text-uppercase">Thông tin cá nhân</div>
                    <div class="line"></div>
                    @include('include.errors')
                    <div class="col-12 col-md-12  pr-0 pl-0 pr-sm-block mt-4">
                        <div class="account-table col-12 col-sm-12 col-md-12">
                            <div class="d-flex justify-content-between">
                                <div class="form_name">
                                    <div class="label">Họ: </div>
                                    <div class=""><input type="text" class="form_acc" name=""></div>
                                </div>
                                <div class="form_name">
                                    <div class="label">Tên: </div>
                                    <div class=""><input type="text" class="form_acc" name=""></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="label">Giới tính:</div>
                                <div class="d-flex">
                                    <div>
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="male">Nam</label>
                                    </div>
                                    <div>
                                         <input type="radio" id="female" name="gender" value="female">
                                        <label for="female">Nữ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="label">Ngày sinh:</div>
                                <div class="d-flex">
                                    <div><input type="date" pattern="Month dd, yyyy" name=""></div>
                                    <div><input type="date" name=""></div>
                                    <div><input type="date" name=""></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="label">Email:</div>
                                <div><input type="email" class="form_acc" value="{!! Auth::user()->email !!}" name=""></div>
                            </div>
                            <div class="">
                                <div class="label">Điện thoại</div>
                                <div class=""><input type="number" class="form_acc" value="{!! Auth::user()->phone_number !!}" name=""></div>
                            </div>
                            <div class="">
                                <div class="label">Địa chỉ</div>
                                <div class=""><input type="text" class="form_acc" value="{!! Auth::user()->address !!}" name=""></div>
                            </div>
                            <div class="btn-next-comeback d-flex justify-content-center mb-2 mb-lg-0">
                                <input type="button" class="btn-order mr-3" value="Chỉnh  sửa ">
                                <a href="{{ url('logout') }}" class="btn-next mr-md-4">Đóng</a>
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
