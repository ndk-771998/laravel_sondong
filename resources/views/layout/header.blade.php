<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-12 col-md-8">
                <img src="/assets/images/logo/logo.png" class="logo" alt="logo"></div>
                <div class="col-12 col-md-4">
                    <div class="row justify-content-end">
                        <div class="col-4 col-md-2"><a href=""><img src="https://img.icons8.com/ios/50/707070/search--v1.png" class="icon-header"></a></div>
                        <div class="col-4 col-md-2">@include('order::cartIcon')</div>
                        <div class="col-4 col-md-2 d-flex justify-content-center align-items-center">
                            @if (Auth::check())
                            <a href="login"><img src="/assets/images/logo/logic.png" class="icon-header"></a>
                            @else
                            <div class="login">
                                <a href="login"><img src="/assets/images/logo/loginn.png" class="icon-header"></a>
                                {{-- <a href="/login">Đăng nhập</a> <span> --}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-7">
                    <div class="row nav">
                        @foreach($menus_header as $menu)
                        <a href="{!! $menu->link !!}" id="menu-{!! $menu->id  !!}" data-id="{!! $menu->id !!}" data-name="{!! $menu->link !!}" class="menu-item col-4 col-md-2">{!! $menu->label !!}</a>
                        @endforeach
                    </div>
                    <div class="nav-mini"><a class="" data-toggle="dropdown" href="#"><img src="/assets/images/logo/menuhd.png" alt=""></a>
                    <div class="dropdown-menu bg-white">
                        @foreach($menus_header as $menu)
                        <a href="{!! $menu->link !!}" class="menu-item dropdown-item">{!! $menu->label !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-5">
                <form action="{{ route('search') }}" method="GET" >
                    <div class="input-group d-flex justify-content-end ">
                        <input type="search" placeholder="Tìm kiếm..." name="search" aria-describedby="button-addon5" class="form-control col-md-7">
                        <div class="input-group-append">
                            <button id="button-addon5" type="submit" class="btn d-flex"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</header>
