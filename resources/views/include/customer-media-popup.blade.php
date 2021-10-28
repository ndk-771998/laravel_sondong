
<div class="fixed-slide-container container-fluid">
    <div class="fixed-slide-wrap">
        <div class="fixed-slide">
            @foreach ($customermedias as $item)
            <div class="fixed-slide-item" style="cursor: pointer">
                <img class="customer-picture-toggle lazyload" data-src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
            </div>
            @endforeach
        </div>
    </div>
</div>