<section class="hotline-fixed">
    <div class="hotline-phone">
        <div class="hotline-circle"></div>
        <div class="hotline-border"></div>
        <div class="hotline-img">
            <a href="tel:{!! $hotline !!}">
                <img  src="/images/utility/icon-2.png" alt="Số điện thoại" >
            </a>
        </div>
        <div class="hotline-bar">
            <a href="tel:{!! $hotline !!}">
                @if($hotline !== "")
                <span class="text-hotline">{!! $hotline !!}</span>
                @endif
            </a>
        </div>
    </div>
</section>
