@extends('layout.master')
@section('content')
<div class="container media-container">
    <div class="media-wrap">
        <div class="title">Hình ảnh khách hàng</div>
        <div class="media row-padding-20px">
            @foreach ($posts as $post)
            <div class="image col-padding-20px">
                <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}">
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center w-100">
            {{ $posts->links('include.pagination') }}
        </div>
    </div>
</div>

@include('include.product.product-slide', ['list_title' => 'Sản phẩm được mua nhiều nhất', 'products' => $products_best_buy])
@endsection
