@if (count($products))
@foreach ($products as $product)
@include('include.product.product-item', ['product' => $product])
@endforeach
@endif
