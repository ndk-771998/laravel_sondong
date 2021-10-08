@foreach ($products as $product)
@include('include.product.product-item', ['product' => $product])
@endforeach

<div class="d-flex justify-content-center w-100">
    {{ $products->links('include.ajax-pagination') }}
</div>