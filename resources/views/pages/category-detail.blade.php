@extends('layout.master')
@section('title')
<title>{!! getOption('san-pham-title') !!}</title>
@endsection
@section('content')

<section>
    <div class="container product-container" id="anchor-name">
        <div class="product-wrap row-padding-12px">
            <div class="col-padding-12px w-100">
                @include('include.breadcrumb', ['breadcrumb' => ['Sản phẩm ' => '/product', $category->name => "/categories/".$category->slug ]])
            </div>

            <div class="sidebar col-padding-12px">
                @include('include.sidebar-filter')

                @if (count($children_categories))
                <div class="title">
                    Hãng sản xuất
                </div>
                <div class="filter">
                    <form action="/search" method="GET" id="filter-manufacturer-form">
                        @foreach ($children_categories as $children_categorie)
                        <div class="form-check">
                            <input type="checkbox" name="manufacturer"
                                class="form-check-input filter-manufacturer-submit" value="{{ $children_categorie->slug }}" id="{{ $children_categorie->slug }}">
                            <label class="form-check-label" for="{{ $children_categorie->slug }}">{{ $children_categorie->name }}</label>
                        </div>
                        @endforeach
                    </form>
                </div>
                @endif

            </div>
            <div class="main col-padding-12px">
                <div class="breadcrumb d-flex flex-row align-items-center">
                    <div class="label">
                        {{ $category->name }}
                    </div>
                    <div class="ml-auto order-by">
                        Sắp xếp theo: 
                        <select name="order_by" id="filter_order_by">
                            <option value="price_desc">Giá từ cao đến thấp</option>
                            <option value="price_asc">Giá từ thấp đến cao</option>
                        </select>
                    </div>
                </div>
            
                <div class="products" id="viewProductDefault">
                    
                    @foreach ($products as $product)
                        @include('include.product.product-item', ['product' => $product])                        
                    @endforeach

                    <div class="d-flex justify-content-center w-100">
                        {{ $products->links('include.ajax-pagination') }}
                    </div>
                </div>
            </div>
        </div>

        <input type="text" style="display: none" name="category" value="{{ $category->slug }}" id="product_category">
</section>
@endsection
