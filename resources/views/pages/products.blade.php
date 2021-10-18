@extends('layout.master')
@section('title')
<title>{!! getOption('title-seo-product') !!}</title>
@endsection
@section('content')

<section>
    <div class="container product-container" id="anchor-name">
        <div class="product-wrap row-padding-12px">
            <div class="col-padding-12px w-100">
                @include('include.breadcrumb', ['breadcrumb' => ['Sản phẩm' => '/products']])
            </div>

            <div class="sidebar col-padding-12px">
                @include('include.sidebar-filter')

                @if (count($manufacturers))
                <div class="title">
                    Hãng sản xuất
                </div>
                <div class="filter">
                    <form action="/search" method="GET" id="filter-manufacturer-form">
                        <div class="form-check">
                            <input type="checkbox" value=""
                                class="form-check-input filter-manufacturer-submit" id="all-manufacturers">
                            <label class="form-check-label" for="all-manufacturers">Tất cả</label>
                        </div>
                        @foreach ($manufacturers as $manufacturer)
                        <div class="form-check">
                            <input type="checkbox" name="manufacturer"
                                class="form-check-input filter-manufacturer-submit" value="{{ $manufacturer->slug }}" id="{{ $manufacturer->slug }}">
                            <label class="form-check-label" for="{{ $manufacturer->slug }}">{{ $manufacturer->name }}</label>
                        </div>
                        @endforeach
                    </form>
                </div>
                @endif
                
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
                        {{ $products->links('include.ajax-pagination') }}
                    </div>

                </div>
            </div>
        </div>
        <input type="text" style="display: none" name="product_type" value="{{ $product_type }}" id="product_type">
</section>
@endsection