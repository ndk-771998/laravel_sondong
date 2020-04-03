    <div class="nav-right">
        <div class="nav-bg">
            <div class="d-flex justify-content-center title-navrg">
                <div><img src="/assets/images/logo/support.png" alt=""></div>
                <p>HỖ TRỢ TRỰC TUYẾN</p>
            </div>
            <div class="d-flex flex-column content-navrg ">
                <p>Bộ phận kỹ thuật</p>
                <h5>+ 84 868 21 08 62</h5>
                <p>Bộ phận CSKH</p>
                <h5>+ 84 868 21 08 62</h5>
            </div>
        </div>
        <div class="nav-bg nav-news">
            <div class="d-flex justify-content-center title-navrg">
                <div><img src="/assets/images/logo/menu.png" alt=""></div>
                <p> DANH MỤC TIN TỨC</p>
            </div>
            <div class="d-flex flex-column content-navrg-2 ">
                @foreach($news_side as $newsItem)
                <a href="new-detail">
                    <div class="d-flex description">
                        <div><img src="{!! $newsItem->getMetaField('thumbnail') !!}" alt=""></div>
                        <div>
                            <p>{!! $newsItem->title !!}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
