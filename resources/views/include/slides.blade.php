<div class="header-slide">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @if ($slides->count())
            @foreach ($slides as $index => $slide)
            @if ($index === 0)
            <li data-target="#slider" class="active" data-slide-to="{!! $index !!}" class=""></li>
            @else
            <li data-target="#slider" data-slide-to="{!! $index !!}" class=""></li>
            @endif
            @endforeach
            @endif
        </ol>
        <div class="carousel-inner">
            @if ($slides->count())
            @foreach ($slides as $index => $slide)
            @if ($index === 0)
            <div class="carousel-item active">
                <img class="img-fluid" src="{!! $slide->getMetaField('thumbnail') !!}">
            </div>
            @else
            <div class="carousel-item">
                <img class="img-fluid" src="{!! $slide->getMetaField('thumbnail') !!}">
            </div>
            @endif
            @endforeach
            @endif
        </div>
    </div>
</div>
