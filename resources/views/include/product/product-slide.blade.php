<div class="product-slide-container container">
    <div class="product-slide-wrap">
        <div class="product-slide-title d-flex flex-row align-items-center">
            <div class="title mr-auto">
                {{$list_title}}
            </div>
            <div class="filter">
                <a href="#">9 triệu - 12 triệu</a>
                <a href="#">12 triệu - 15 triệu</a>
                <a href="#">15 triệu - 18 triệu</a>
                <a href="#">Trên 18 triệu</a>
            </div>
            <div class="view-all">
                <a href="#">Xem tất cả <img src="/assets/images/logo/chevron-up.svg" alt="up"></a>
            </div>
        </div>
        <div class="product-slide">

            @include('include.product.product-item')
            @include('include.product.product-item')
            @include('include.product.product-item')
            @include('include.product.product-item')
            @include('include.product.product-item')
            @include('include.product.product-item')
            @include('include.product.product-item')
            @include('include.product.product-item')

        </div>
    </div>
</div>