<div class="nav-right">
    <div class="nav-bg">
        <div class="d-flex justify-content-center title-navrg">
            <div><img src="/assets/images/logo/support.png" alt=""></div>
            <p>HỖ TRỢ TRỰC TUYẾN</p>
        </div>
        <div class="d-flex flex-column content-navrg ">
            {!! getOption('ho-tro-truc-tuyen') !!}
            {{-- <p>Bộ phận kỹ thuật</p>
            <h5>{!!getOption('bo-phan-ky-thuat')!!}</h5>
            <p>Bộ phận CSKH</p>
            <h5>{!!getOption('bo-phan-cham-soc-khach-hang')!!}</h5> --}}
        </div>
    </div>
    <div class="nav-bg nav-news">
        <div class="d-flex justify-content-center title-navrg">
            <div><img src="/assets/images/logo/menu.png" alt=""></div>
            <p> DANH MỤC TIN TỨC</p>
        </div>
        <div class="d-flex flex-column content-navrg-2 ">
            @foreach($news_side as $newsItem)
            <a href="{{ url("posts/" .$newsItem->slug) }}">
                <div class="d-flex description">
                    <div><img class="lazyload" data-src="{!! $newsItem->thumbnail !!}" alt="{!! $newsItem->title !!}"></div>
                    <div>
                        <p>{!! $newsItem->title !!}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
