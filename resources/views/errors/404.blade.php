@extends('layout.master')
@section('title')
    <title>Lỗi 404 - Wedding Store</title>
@endsection
@section('content')
<div class="error__page--alert">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 error__form--alert" >
                <h3>Lỗi 404 </h3><h4>Không tìm thấy trang !</h4>
                <p>Trang bạn đang tìm không thể truy cập</p>
                <form action="{{ route('search') }}" method="get">
                    <div class="input-group d-flex ">
                        <input type="search" placeholder="Tìm kiếm sản phẩm " name="search" class="form-control col-md-7">
                        <div class="input-group-append">
                            <button type="submit" class="btn d-flex"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <a href="/">Nhấn vào đây để tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
</div>
@endsection
