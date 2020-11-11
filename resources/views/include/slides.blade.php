<div class="header-slide">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            {{-- @if ($slides->count())
            @foreach ($slides as $index => $slide)
            @if ($index === 0)
            <li data-target="#slider" class="active" data-slide-to="{!! $index !!}" class=""></li>
            @else
            <li data-target="#slider" data-slide-to="{!! $index !!}" class=""></li>
            @endif
            @endforeach
            @endif --}}
            <li data-target="#slider" class="active" data-slide-to="1" class=""></li>
            <li data-target="#slider" class="" data-slide-to="2" class=""></li>
            <li data-target="#slider" class="" data-slide-to="3" class=""></li>
            <li data-target="#slider" class="" data-slide-to="4" class=""></li>
            <li data-target="#slider" class="" data-slide-to="5" class=""></li>
        </ol>
        <div class="carousel-inner">
            {{-- @if ($slides->count())
            @foreach ($slides as $index => $slide)
            @if ($index === 0)
            <div class="carousel-item active" data-interval="6000">
                <img class="img-fluid" src="{!! $slide->getMetaField('thumbnail') !!}">
            </div>
            @else
            <div class="carousel-item" data-interval="6000">
                <img class="img-fluid" src="{!! $slide->getMetaField('thumbnail') !!}">
            </div>
            @endif
            @endforeach
            @endif --}}
            <div class="carousel-item active" data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-1') !!}">
            </div>
            <div class="carousel-item " data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-2') !!}">
            </div>
            <div class="carousel-item " data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-3') !!}">
            </div>
            <div class="carousel-item " data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-4') !!}">
            </div>
            <div class="carousel-item " data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-5') !!}">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
