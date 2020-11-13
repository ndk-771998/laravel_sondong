<footer class="footer">
    <div class="container">
        <div class="row">
           <a href="/"><img src="{!! getOption('footer-logo') !!}" class="logo" alt="logo"></a>

        </div>
        <div class="row">
            <div class="col-3 d-flex flex-column">
                @foreach($footer_1 as $footer)
                <a href="{!! $footer->link !!}">
                    <p>{!! $footer->label !!}</p>
                </a>
                @endforeach
            </div>
            <div class="col-3 d-flex flex-column">
                @foreach($footer_2 as $footer)
                <a href="{!! $footer->link !!}">
                    <p>{!! $footer->label !!}</p>
                </a>
                @endforeach
            </div>
            <div class="col-6">
                <div class="row justify-content-start align-items-center contact">
                    {!! getOption('social_links') !!}
                <a href="{{getOption('footer-logo-facebook-link')}}"><img
                            src="{{getOption('footer-logo-facebook')}}"
                            alt=""></a>
                    <a href="{{getOption('footer-logo-twitter-link')}}"> <img
                            src="{{getOption('footer-logo-twitter')}}"
                            alt=""></a>
                    <a href="{{getOption('footer-logo-instagram-link')}}"><img
                            src="{{getOption('footer-logo-instagram')}}"
                            alt=""></a>
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
