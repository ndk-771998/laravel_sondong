@extends('layout.master')
@section('content')
<div class="container media-container">
    <div class="media-wrap">
        <div class="title">Hình ảnh khách hàng</div>
        <div class="media row-padding-20px">
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
            <div class="image col-padding-20px">
                <img src="/assets/images/word.png" alt="media">
            </div>
        </div>
    </div>
</div>

@include('include.product.product-slide', ['list_title' => 'Sản phẩm được mua nhiều nhất'])
@endsection
