<footer class="footer">
    <div class="container">
        <div class="row">
            <a href="/"><img src="{!! getOption('footer-logo') !!}" title="Quay lại trang chủ" class="logo" alt="logo"></a>

        </div>
        <div class="row">
            <div class="col-3 d-flex flex-column">
                @foreach($footer_1 as $footer)
                <a href="{!! $footer->link !!}" title="{!! $footer->label !!}">
                    <p>{!! $footer->label !!}</p>
                </a>
                @endforeach
            </div>
            <div class="col-3 d-flex flex-column">
                @foreach($footer_2 as $footer)
                <a href="{!! $footer->link !!}" title="{!! $footer->label !!}">
                    <p>{!! $footer->label !!}</p>
                </a>
                @endforeach
            </div>
            <div class="col-6">
                <div class="row justify-content-start align-items-center contact">
                    {!! getOption('social_links') !!}
                    <a href="{{getOption('footer-logo-facebook-link')}}" title="facebook"><img
                            src="{{getOption('footer-logo-facebook')}}" alt="logo-facebook"></a>
                    <a href="{{getOption('footer-logo-twitter-link')}}" title="twitter"> <img
                            src="{{getOption('footer-logo-twitter')}}" alt="footer-logo-twitter"></a>
                    <a href="{{getOption('footer-logo-instagram-link')}}" title="instagram"><img
                            src="{{getOption('footer-logo-instagram')}}" alt="logo-instagram"></a>
                </div>
                <div class="title">
                    {!! getOption('footer-copyright-by') !!}
                </div>
            </div>
            <div class="col note">
                <p>{!! getOption('footer-operating-license') !!}</p>
            </div>
        </div>
    </div>
</footer>
