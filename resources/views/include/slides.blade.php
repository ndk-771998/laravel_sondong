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
            <div class="carousel-item active" data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-1') !!}" alt="slide-banner-1">
            </div>
            <div class="carousel-item " data-interval="3000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-2') !!}" alt="slide-banner-2">
            </div>
            <div class="carousel-item " data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-3') !!}" alt="slide-banner-3">
            </div>
            <div class="carousel-item " data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-4') !!}" alt="slide-banner-4">
            </div>
            <div class="carousel-item " data-interval="2000">
                <img class="img-fluid" src="{!! getOption('trang-chu-slide-5') !!}" alt="slide-banner-5">
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
