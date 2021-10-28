@extends('layout.master')
@section('content')
<div class="container media-container">
    <div class="media-wrap">
        <div class="title">Hình ảnh khách hàng</div>
        <div class="media row-padding-20px">
            @foreach ($posts as $post)
            <div class="image col-padding-20px">
                <img class="customer-picture-toggle lazyload" data-src="{{ $post->thumbnail }}" alt="{{ $post->title }}">
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center w-100">
            {{ $posts->links('include.pagination') }}
        </div>
    </div>
</div>

@include('include.customer-media-popup', ['customermedias' => $posts]);

@include('include.product.product-slide', ['list_title' => 'Sản phẩm được mua nhiều nhất', 'product_type' => 'product', 'products' => $products_best_buy, 'price_filter' => true])
@endsection
