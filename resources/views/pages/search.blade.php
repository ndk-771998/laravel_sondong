@extends('layout.master')
@section('title')
<title>{!! getOption('san-pham-title') !!}</title>
@endsection
@section('content')

<section>
    <div class="container product-container" id="anchor-name">
        <div class="product-wrap row-padding-12px">
            <div class="col-padding-12px w-100">
                @include('include.breadcrumb', ['breadcrumb' => ['Tìm kiếm từ khóa "'.Request::input('search').'"' => '']])
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
                        {{ $products->links('include.pagination') }}
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
