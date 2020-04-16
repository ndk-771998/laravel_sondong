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
                    @include('include.errors')
                    @include('include.messages')
                    <div class="login-head text-uppercase">Thông tin cá nhân</div>
                    <div class="line"></div>
                    @include('include.errors')
                    <div class="col-12 col-md-12 pr-0 pl-0 pr-sm-block mt-4" id="form_show_info">
                        <div class="account-table col-12 col-sm-12 col-md-12">
                            <div class="d-flex">
                                <div class="account-type">Họ và tên</div>
                                <div class="account-info ">{!! Auth::user()->first_name." ". Auth::user()->last_name !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Ngày sinh</div>
                                <div class="account-info ">{!! Auth::user()->birth !!}</div>
                            </div>
                            <div class="line"></div>
                            <div class="d-flex">
                                <div class="account-type">Giới tính</div>
                                <div class="account-info ">{!! $gender !!}</div>
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
                                <input type="button" id="show_edit_form" class="btn-order mr-3" value="Chỉnh sửa">
                                <a href="{{ url('logout') }}" class="btn-next mr-md-4">Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                    <div id="form_edit_info">
                        <form action="{!! route('info.edit') !!}" method="POST">
                            @csrf
                            <div class="col-12 col-md-12  pr-0 pl-0 pr-sm-block mt-4">
                                <div class="account-table col-12 col-sm-12 col-md-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="form_name">
                                            <div class="label">Họ: </div>
                                            <div class=""><input type="text" class="form_acc" name="first_name"></div>
                                        </div>
                                        <div class="form_name">
                                            <div class="label">Tên: </div>
                                            <div class=""><input type="text" class="form_acc" name="last_name"></div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="label">Giới tính:</div>
                                        <div class="d-flex">
                                            <div>
                                                <div class="checkbx col-12">
                                                    <label class="cbx">
                                                        <div>
                                                            <div class="cbx-width d-flex justify-content-between">
                                                                <div>Nam</div>
                                                            </div>
                                                        </div>
                                                        <input type="radio" value="1" name="gender" {!! Auth::user()->gender == '1' ? "checked" : "" !!} >
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="checkbx col-12">
                                                    <label class="cbx">
                                                        <div>
                                                            <div class="cbx-width d-flex justify-content-between">
                                                                <div>Nữ</div>
                                                            </div>
                                                        </div>
                                                        <input type="radio" value="2" name="gender" {!! Auth::user()->gender == '2' ? "checked" : "" !!} >
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="checkbx col-12">
                                                    <label class="cbx">
                                                        <div>
                                                            <div class="cbx-width d-flex justify-content-between">
                                                                <div>Khác</div>
                                                            </div>
                                                        </div>
                                                        <input type="radio" value="3"  name="gender" {!! Auth::user()->gender == '3' ? "checked" : ""!!} >
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="label">Ngày sinh:</div>
                                        <div class="d-flex">
                                            <div class="date"><input class="form-control form_acc" type="number" value="{!! $date[2] !!}" min="1" max="31" name="days"></div>
                                            <div class="date">
                                                <select id="moth" name="moths" class="form-control option">
                                                    <option {!! $date[1] == '01' ? "selected" : "" !!} value="01">Tháng một</option>
                                                    <option {!! $date[1] == '02' ? "selected" : "" !!}  value="02">Tháng hai</option>
                                                    <option {!! $date[1] == '03' ? "selected" : "" !!}  value="03">Tháng ba</option>
                                                    <option {!! $date[1] == '04' ? "selected" : "" !!}  value="04">Tháng bốn</option>
                                                    <option {!! $date[1] == '05' ? "selected" : "" !!}  value="05">Tháng năm</option>
                                                    <option {!! $date[1] == '06' ? "selected" : "" !!}  value="06">Tháng sáu</option>
                                                    <option {!! $date[1] == '07' ? "selected" : "" !!}  value="07">Tháng bảy</option>
                                                    <option {!! $date[1] == '08' ? "selected" : "" !!}  value="08">Tháng tám</option>
                                                    <option {!! $date[1] == '09' ? "selected" : "" !!}  value="09">Tháng chín</option>
                                                    <option {!! $date[1] == '10' ? "selected" : "" !!}  value="10">Tháng mười</option>
                                                    <option {!! $date[1] == '11' ? "selected" : "" !!}  value="11">Tháng mười một</option>
                                                    <option {!! $date[1] == '12' ? "selected" : "" !!}  value="12">Tháng mười hai</option>
                                                </select>
                                            </div>
                                            <div class="date"><input class="form-control form_acc" type="number" min="1990" max="2020" value="{!! $date[0] !!}" name="years"></div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="label">Email:</div>
                                        <div><input type="email" class="form-control form_acc" value="{!! Auth::user()->email !!}" name="email"></div>
                                    </div>
                                    <div class="">
                                        <div class="label">Điện thoại</div>
                                        <div class=""><input type="number" class="form-control form_acc" value="{!! Auth::user()->phone_number !!}" name="phone_number"></div>
                                    </div>
                                    <div class="">
                                        <div class="label">Địa chỉ</div>
                                        <div class=""><input type="text" class="form-control form_acc" value="{!! Auth::user()->address !!}" name="address"></div>
                                    </div>
                                    <div class="btn-next-comeback d-flex justify-content-center mb-2 mb-lg-0">
                                        <input type="submit" class="btn-order mr-3" value="Chỉnh  sửa ">
                                        <a href="/account" class="btn-next mr-md-4">Đóng</a>
                                    </div>
                                </div>
                            </div>
                            <input type="" name="auth_id" value="{{ Auth::user()->id }}" hidden>
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
