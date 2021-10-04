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
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EHkozMIXZ8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flec flex-colum">
                <div class="col-title"></div>
                <div class="d-flex flex-column contact">
                    <a class="d-flex flex-row align-items-center" href="{{getOption('footer-logo-facebook-link')}}" title="facebook">
                        <span>
                            <img class="lazyload" data-src="/assets/images/logo/facebook.svg" alt="logo-facebook">
                        </span>
                        Facebook</a>
                    <a class="d-flex flex-row align-items-center" href="{{getOption('footer-logo-twitter-link')}}" title="youtube">
                        <span>
                            <img class="lazyload" data-src="/assets/images/logo/youtube.svg" alt="logo-youtube">
                        </span>
                        Youtube</a>
                    <a class="d-flex flex-row align-items-center" href="{{getOption('footer-logo-instagram-link')}}" title="linkedIn">
                        <span>
                            <img class="lazyload" data-src="/assets/images/logo/linked.svg" alt="logo-linked-in">
                        </span>
                        LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="row bottom-footer">
            
            <div class="col-12 col-lg-9">
                <a href="/">Thienthanh</a> - Chuyên cung thiết bị, dịch vụ, giải pháp máy văn phòng uy tín chất lượng<br>
                <br>
                Địa chỉ: 507 Liễu giai, Quận Ba Đình, Hà Nội.<br>
                Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.thienthanh.vn<br>
                Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức A - Điện thoại liên hệ: 024 73081221 (ext 4678)<br>
                Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015<br>
                <br>
                © 2021 VMMS. Tất cả các quyền được bảo lưu.<br>
                {!! getOption('footer-copyright-by') !!}
            </div>
            <div class="col-12 col-lg-3">
                <img src="/assets/images/logo/dathongbao.png" alt="đã thông báo">
            </div>
        </div>
    </div>
</footer>
