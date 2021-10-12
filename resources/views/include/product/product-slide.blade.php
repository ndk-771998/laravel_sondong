<div class="product-slide-container container">
    <div class="product-slide-wrap">
        <div class="product-slide-title d-flex flex-row align-items-center">
            <div class="title mr-auto">
                {{$list_title}}
            </div>
            @if ($price_filter)
            <div class="filter">
                <a href="/{{ $product_type."?price=10000000-15000000" }}">10 triệu - 15 triệu</a>
                <a href="/{{ $product_type."?price=15000000-20000000" }}">15 triệu - 20 triệu</a>
                <a href="/{{ $product_type."?price=20000000-25000000" }}">20 triệu - 25 triệu</a>
                <a href="/{{ $product_type."?price=25000000" }}">Trên 25 triệu</a>
            </div>
            @endif
            <div class="view-all d-flex align-items-center">
                <a href="/{{ $product_type }}">Xem tất cả <img src="/assets/images/logo/chevron-up.svg" alt="up"></a>
            </div>
        </div>
        <div class="product-slide">

            @foreach ($products as $product)
            @include('include.product.product-item', ['product' => $product])
            @endforeach

        </div>
    </div>
</div>