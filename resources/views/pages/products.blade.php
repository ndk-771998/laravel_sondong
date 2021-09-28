@extends('layout.master')
@section('title')
<title>{!! getOption('san-pham-title') !!}</title>
@endsection
@section('content')

<section>
    <div class="container product-container">
        <div class="product-wrap row-padding-12px">
            <div class="col-padding-12px w-100">
                @include('include.breadcrumb', ['breadcrumb' => ['Sản phẩm' => '/products', 'HP Book ...']])
            </div>

            <div class="sidebar col-padding-12px">
                @include('include.sidebar-filter')
            </div>
            <div class="main col-padding-12px">
                <div class="breadcrumb d-flex flex-row align-items-center">
                    <div class="label">
                        Laptop mới
                    </div>
                    <div class="ml-auto order-by">
                        Sắp xếp theo: 
                        <select name="order_by" id="">
                            <option value="price_asc">Giá từ cao đến thấp</option>
                            <option value="price_desc">Giá từ thấp đến cao</option>
                        </select>
                    </div>
                </div>
            
                <div class="products">
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                    @include('include.product.product-item')
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->fragment('products')->links('include.pagination') }}
                </div>
            </div>
        </div>
</section>
@endsection
