<div class="product-slide-item list-product">
    <a href="/{{ $product->product_type }}/{{ $product->slug }}">
        <div class="item-wrap">
            <div class="thumbnail">
                <img width="208" height="208" class="lazyload" data-src="{{$product->thumbnail}}" alt="{{$product->name}}">
                @if ($product->price && $product->original_price)
                    <div class="sale-tag">
                        {{floor(($product->price - $product->original_price)/$product->original_price*100)}}%
                    </div>
                @endif
            </div>
            <div class="vote d-flex flex-row">
                <img src="/assets/images/logo/star.svg" alt="star">
                <img src="/assets/images/logo/star.svg" alt="star">
                <img src="/assets/images/logo/star.svg" alt="star">
                <img src="/assets/images/logo/star.svg" alt="star">
                <img src="/assets/images/logo/star.svg" alt="star">
            </div>
            <div class="name">{{$product->name}}</div>
            <div class="price d-flex flex-row justify-content-between">
                <div class="discount">{{ preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->price )}} ₫</div>
                @if ($product->original_price)
                <div class="origin-price">{{preg_replace('/\B(?=(\d{3})+(?!\d))/', '.', $product->original_price)}} ₫</div>
                @endif
            </div>
        </div>
    </a>
</div>