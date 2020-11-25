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
                    <section class="cart" id="cart">
                        <div>
                            <div class="d-flex justify-content-between main-header">
                                <div class="text-uppercase cart-title">giỏ hàng</div>
                            </div>
                            <div class="line"></div>
                            @if(session('alert'))
                            <div>{!! session('alert') !!}</div>
                            @endif
                            @if ($cartItemsCount)

                            <div id="alert"></div>
                            <div class="check-table table-responsive">
                                <table class="table  table-bordered text-center table-md">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col" class="text-uppercase" width="38%">Tên sản phẩm </th>
                                            <th scope="col" class="text-uppercase">Số lượng</th>
                                            <th scope="col" class="text-uppercase" width="18%">Đơn giá </th>
                                            <th scope="col" class="text-uppercase" width="20%">Thành tiền</th>
                                            <th class="text-uppercase">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts->cartItems as $key => $cartItem)
                                        <tr>
                                            <th scope="row">{!! $key + 1 !!}</th>
                                            <td>
                                                <div class="d-flex ml-0 mr-0">
                                                    <span class="d-flex align-items-center mr-1"><img
                                                            src="{!! $cartItem->product->thumbnail !!}"
                                                            alt="{!! $cartItem->product->name !!}"></span>
                                                    <div class="text-left">{!! $cartItem->product->name !!}</div>
                                                </div>
                                            </td>
                                            <td class="table-form-input">
                                                <input id="cart-item-quantity" class="cart-quantity"
                                                    data-id="{!! $cartItem->id !!}" name="quantity"
                                                    value="{!! $cartItem->quantity !!}" type="number" min="1">
                                            </td>
                                            <td>{!! number_format($cartItem->price) !!} đ</td>
                                            <td><span id="amount-{!! $cartItem->id !!}" class="amount" data-id={!!
                                                    $cartItem->id !!}>{!! number_format($cartItem->amount) !!}</span> đ
                                            </td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal"
                                                    data-target="#confirmModal-{!! $cartItem->id !!}"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <div id="confirmModal-{!! $cartItem->id !!}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content mt-5">
                                                    <div class="modal-body">
                                                        <h4 class="text-center mt-3">Xóa khỏi giỏ hàng ?</h4>
                                                        <div class="d-flex justify-content-center mt-4  ">
                                                            <a href="{{ route('cart-items.delete', ['id' => $cartItem->id]) }}"
                                                                class="btn btn-danger text-white">Xóa</a>
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Hủy bỏ</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <tr>
                                            <td class="text-right" colspan="4"><b class="text-uppercase"> Tổng hóa
                                                    đơn:</b></td>
                                            <td colspan="3" class="total-price"><span id="total">{!!
                                                    number_format($carts->total) !!}</span> đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-next-comeback d-flex justify-content-end mb-2 mb-lg-0">
                                <a href="/" class="btn-next mr-2 mr-md-4">TIẾP TỤC MUA HÀNG</a>
                                <a href="/order-info" class="btn-order">Đặt hàng</a>
                            </div>
                            @else
                            <div class="alert alert-danger">
                                <p>Không có sản phẩm nào trong giỏ hàng</p>
                            </div>
                            @endif
                        </div>
                    </section>
                </div>
                <div class="col-12 col-md-3">
                    @include('layout.nav-right')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
