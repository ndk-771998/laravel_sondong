<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-3 col-lg-2">
                    <a href="/"><img src="{{getOption('header-logo')}}" title="Quay lại trang chủ" class="logo"
                            alt="logo"></a></div>
                <div class="col-9 col-lg-5">
                    <form action="{{ route('search') }}" method="get">
                        <div class="input-group d-flex justify-content-start header-search-wrap">
                            <button type="submit" class="btn d-flex input-group-append" title='Tìm kiếm'><img
                                    src="/assets/images/logo/search.svg" alt=""></button>
                            <input type="search" placeholder="Tìm kiếm..." name="search" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 d-flex justify-content-end">
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
                                <div class="header-hotline-number">{{ getOption('hotline') }}</div>
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

                        @if (count($menu->subMenus))
                        <a href="{!! $menu->link ? $menu->link : '#' !!}" id="menu-{!! $menu->id  !!}"
                            data-id="{!! $menu->id !!}" data-name="{!! $menu->link !!}" title="{!! $menu->label !!}"
                            class="menu-item dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            {{$menu->label}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menu-{!! $menu->id  !!}">

                            @foreach ($menu->subMenus as $sub_menu_lvl_2)
                            <div class="dropright">
                                <a class="dropdown-item custom-dropdown-toggle" href="{{$sub_menu_lvl_2->link ? $sub_menu_lvl_2->link : '#'}}" id="menu-{!! $menu->id  !!}-{!! $sub_menu_lvl_2->id!!}">
                                    {{$sub_menu_lvl_2->label}}
                                    @if (count($sub_menu_lvl_2->subMenus))
                                        <img class="dropright-chevron" src="/assets/images/logo/chevron-up.svg" alt="chevron">
                                    @endif
                                </a>

                                @if (count($sub_menu_lvl_2->subMenus))
                                <div class="dropdown-menu-broad d-flex justify-content-row" custom-data-toggle="menu-{!! $menu->id  !!}-{!! $sub_menu_lvl_2->id!!}">
                                    @foreach ($sub_menu_lvl_2->subMenus as $sub_menu_lvl_3)
                                    <div class="dropdown-menu-broad-item">
                                        <a class="menu-broad-header" href="{{ $sub_menu_lvl_3->link }}"> {{$sub_menu_lvl_3->label}}</a>
                                        @if (count($sub_menu_lvl_3->subMenus))
                                        @foreach ($sub_menu_lvl_3->subMenus as $item)
                                        <a href="{{ $item->link }}">{{$item->label}}</a>
                                        @endforeach
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            @endforeach

                        </div>
                        @else
                        <a href="{!! $menu->link ? $menu->link : '#' !!}" id="menu-{!! $menu->id  !!}"
                            class="menu-item">{{$menu->label}}</a>
                        @endif

                        @endforeach
                    </div>
                    <div class="nav-mini">
                        <a class="nav-mini-icon" href="#">
                            <img class="lazyload" data-src="/assets/images/logo/menuhd.png" alt="menu-mobile-toggle">
                        </a>
                        <div class="menu-mini">
                            <a href="/"><img src="{{getOption('header-logo')}}" title="Quay lại trang chủ" class="logo"
                                alt="logo"></a>
                            @foreach($menus_header->menuItems as $menu)

                                @if (count($menu->subMenus))
                                <a href="{!! $menu->link ? $menu->link : '#'!!}" class="menu-mini-item-toggle menu-item" id="menu-mini-{{$menu->id}}">
                                    {!! $menu->label !!}
                                    <img class="dropdown-chevron" src="/assets/images/logo/chevron-up.svg" alt="chevron">
                                </a>

                                <div class="dropdown-menu-mini" data-mini-toggle="menu-mini-{{$menu->id}}">
                                    @foreach ($menu->subMenus as $sub_menu)
                                    <a class="dropdown-item" href="{{$sub_menu->link ? $sub_menu->link : '#'}}">{{$sub_menu->label}}</a>    
                                    @endforeach
                                </div>
                                @else
                                <a href="{!! $menu->link ? $menu->link : '#'!!}" class="menu-item dropdown-item">{!! $menu->label !!}</a>
                                @endif

                            @endforeach
                        </div>

                        <div class="faded-menu-mini"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>