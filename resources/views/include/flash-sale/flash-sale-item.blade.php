<div class="flash-sale-item list-product">
    <a href="/{{ $flash_sale->product_type }}/{{ $flash_sale->slug }}">
        <div class="item-wrap">
            <div class="thumbnail">
                <img width="206" height="206" class="lazyload" data-src="{{ $flash_sale->thumbnail }}" alt="item">
                @if ($flash_sale->price && $flash_sale->original_price)
                <div class="sale-tag">{{floor(($flash_sale->price -
                    $flash_sale->original_price)/$flash_sale->original_price*100)}}%</div>
                @endif
            </div>
            <div class="name">{{ $flash_sale->name }}</div>
            <div class="price d-flex flex-row justify-content-between">
                <div class="discount">{{ preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $flash_sale->price )}} ₫</div>
                @if ($flash_sale->original_price)
                <div class="origin-price">{{preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $flash_sale->original_price)}} ₫</div>
                @endif
            </div>
            <div class="sell-progress">
                <progress max="{{ rand(5, 10) }}" value="{{ rand(0, 10) }}"></progress>
            </div>
        </div>
    </a>
</div>