<div class="nav-left">
    <div class="nav-left-max nav-bg">
        <div class="d-flex justify-content-center title-navlf">
            <div><img src="/assets/images/logo/menu.png" alt=""></div>
            <p> DANH MỤC VÁY CƯỚI</p>
        </div>
        <div class="d-flex flex-column content-navlf">
            <div class="content-navlf-mg">
                @foreach($sides_bar->menuItems as $side_bar)
                <a href="{!! URL::to($side_bar->link)  !!}" id="menu-{!! $side_bar->id  !!}"
                    data-id="{!! $side_bar->id !!}" data-name="{!! $side_bar->link !!}" class="menu-item">
                    <p>{!! $side_bar->label !!}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="nav-left-min nav-bg-mini">
        <nav class="navbar">
            <button class="col-md-12 navbar-toggler d-flex align-items-center justify-content-center title-navlf"
                type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                <div><img src="/assets/images/logo/menu.png" alt=""></div>
                <p>DANH MỤC VÁY CƯỚI</p>
            </button>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="d-flex flex-column content-navlf">
                <div class="content-navlf-mg">
                    @foreach($sides_bar->menuItems as $side_bar)
                    <a href="{!! URL::to($side_bar->link)  !!}" id="menu-{!! $side_bar->id  !!}"
                        data-id="{!! $side_bar->id !!}" data-name="{!! $side_bar->link !!}" class="menu-item">
                        <p>{!! $side_bar->label !!}</p>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
