@extends('layout.master')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
        <ul class="custom-breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item">Giỏ hàng</li>
        </ul>
    </div>
</nav>
<section class="about">
    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    @include('layout.nav-left')
                </div>
                <div class="col-12 col-md-6">
                    <div class="cart">
                        <h3>Giỏ hàng</h3>
                        <div class="table-cart table-responsive my-24">
                            <table class="table table-bordered m-0 bg-l">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">TÊN SẢN PHẨM</th>
                                        <th scope="col" style="    width: 18%;">SỐ LƯỢNG</th>
                                        <th scope="col" style="    width: 21%;">ĐƠN GIÁ</th>
                                        <th scope="col" style="    width: 22%;">THÀNH TIỀN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <th>1</th>
                                        <td>
                                            <div class="item d-flex">
                                                <img src="https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/bf21cb26-66b8-4e83-b5e2-c6b559737962.png" alt="" style="width:45px; height:50px">
                                                <p class=" ml-2 m-0">Váy cưới khóa dây ren buộc trước</p>
                                            </div>

                                        </td>
                                        <td class="d-flex justify-content-center" style="border:none">
                                            <input type="number" name="1" id="" value="1" style=" width: 50%; border: 1px solid #d8d8d8; border-radius: 6px; text-align: center;"></td>
                                        <td>1,260,000 đ</td>
                                        <td>1,260,000 đ</td>

                                    </tr>
                                    <tr>
                                        <td colspan="4" style=" text-align: right;  font-weight: 600;">TỔNG HÓA ĐƠN :</td>
                                        <td style="font-weight: 600;  color: #ff670a; text-align: center;">1,260,000 đ</td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="d-flex mt-50 justify-content-end">
                                <a href="" class="continue">Tiếp tục mua hàng</a>
                                <a href="" class="pay">Đặt hàng</a>

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