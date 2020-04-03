<footer class="footer">
    <div class="container">
        <div class="row">
            <img src="/assets/images/logo/logo.png" class="logo" alt="logo">
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
                <p>Giấy phép hoạt động trang thông tin điện tử tổng hợp số 36/GP-ICP-STTTT, HCM ngày 29/08/2016</p>
            </div>
        </div>
    </div>
</footer>
