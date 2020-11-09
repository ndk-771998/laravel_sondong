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
                <div class="row justify-content-center align-items-end contact">
                    {!! getOption('social_links') !!}
                </div>
                <div class="title">
                     {!! getOption('copyright') !!}
                </div>
            </div>
            <div class="col note">
                <p>{!! getOption('giấy phép hoạt động') !!}</p>
            </div>
        </div>
    </div>
</footer>
