<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-12 col-md-2">
                    <a href="/"><img src="{{getOption('header-logo')}}" title="Quay lại trang chủ" class="logo"
                            alt="logo"></a></div>
                <div class="col-12 col-md-5">
                    <form action="{{ route('search') }}" method="get">
                        <div class="input-group d-flex justify-content-start header-search-wrap">
                            <button type="submit" class="btn d-flex input-group-append" title='Tìm kiếm'><img
                                    src="/assets/images/logo/search.svg" alt=""></button>
                            <input type="search" placeholder="Tìm kiếm..." name="search" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-5 d-flex justify-content-end">
                    <div class="giao-hang-toan-quoc-wrap">
                        <img src="/assets/images/logo/giao-hang-toan-quoc.svg" alt="">
                        Giao hàng toàn quốc
                    </div>
                    <div class="header-hotline-wrap">
                        <div class="d-flex flex-row">
                            <div class="header-hotline-logo">
                                <img src="/assets/images/logo/header-hotline.svg" alt="">
                            </div>
                            <div class="">
                                <div class="header-hotline-label">Đường dây nóng</div>
                                <div class="header-hotline-number">1900.265.1254</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="nav">
                        @foreach($menus_header->menuItems as $menu)
                        <a href="{!! $menu->link !!}" id="menu-{!! $menu->id  !!}" data-id="{!! $menu->id !!}"
                            data-name="{!! $menu->link !!}" title="{!! $menu->label !!}"
                            class="menu-item">{!! $menu->label !!}</a>
                        @endforeach
                    </div>
                    <div class="nav-mini"><a class="nav-mini-icon" data-toggle="dropdown" href="#"><img class="lazyload"
                                data-src="/assets/images/logo/menuhd.png" alt=""></a>
                        <div class="dropdown-menu bg-white">
                            @foreach($menus_header->menuItems as $menu)
                            <a href="{!! $menu->link !!}" class="menu-item dropdown-item">{!! $menu->label !!}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>