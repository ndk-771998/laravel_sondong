<footer class="footer">
    <div class="container">
        <div class="row main-footer">
            <div class="col-12 col-sm-6 col-md-3 d-flex flex-column">
                <div class="col-title">Về chúng tôi</div>
                @foreach($footer_1->menuItems as $footer)
                <a href="{!! $footer->link !!}" title="{!! $footer->label !!}">
                    <p>{!! $footer->label !!}</p>
                </a>
                @endforeach
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flex flex-column">
                <div class="col-title">Chính sách</div>
                @foreach($footer_2->menuItems as $footer)
                <a href="{!! $footer->link !!}" title="{!! $footer->label !!}">
                    <p>{!! $footer->label !!}</p>
                </a>
                @endforeach
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flex flex-column">
                <div class="col-title">Kết nối chúng tôi</div>
                {!! getOption('connective-video') !!}
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flec flex-colum">
                <div class="col-title"></div>
                <div class="d-flex flex-column contact">
                    <a class="d-flex flex-row align-items-center" href="{{ getOption('link-facebook') }}" title="facebook">
                        <span>
                            <img class="lazyload" data-src="/assets/images/logo/facebook.svg" alt="logo-facebook">
                        </span>
                        Facebook</a>
                    <a class="d-flex flex-row align-items-center" href="{{ getOption('link-youtube') }}" title="youtube">
                        <span>
                            <img class="lazyload" data-src="/assets/images/logo/youtube.svg" alt="logo-youtube">
                        </span>
                        Youtube</a>
                    <a class="d-flex flex-row align-items-center" href="{{ getOption('link-linkedin') }}" title="linkedIn">
                        <span>
                            <img class="lazyload" data-src="/assets/images/logo/linked.svg" alt="logo-linked-in">
                        </span>
                        LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="row bottom-footer">
            
            <div class="col-12 col-lg-9">
                {!! getOption('website-info') !!}
            </div>
            <div class="col-12 col-lg-3">
                <img src="/assets/images/logo/dathongbao.png" alt="đã thông báo">
            </div>
        </div>
    </div>
</footer>
