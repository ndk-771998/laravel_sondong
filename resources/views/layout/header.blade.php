<header>
    <div class="header">
        <div class="container _header" style="background-color: #F8E6E6;">
            <div class="row">
            <div class="header-left col-3 col-md-4 col-sm-3">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12 image">
                        <a href=""><img src="{{ url('/image/logo.png') }}" alt=""></a>
                    </div>
                    <div class="col-md-9 name">
                        <a class=" d-none d-md-block" href="">Trung tâm văn hoá - Thông tin và Thể thao Sơn Động, Bắc Giang</a>
                    </div>
                </div>
            </div>
            <div class="header-middle d-none d-md-flex col-12 col-md-5 col-sm-12">
                <a href=""><i class= "fa fa-volume-up"></i> Chương trình truyền thanh</a>
                <a href=""><i class= "fa fa-play-circle"></i> Video truyền hình</a>
            </div>
            <div class="header-right col-9 col-sm-9 col-md-3">
                <div class="time">
                    <h3> <span>13:51 </span> Thứ năm, 18 tháng 3 năm 2021</h3>
                </div>
                <div class="form">
                    <form action="">
                        <input type="text">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="menu col-md-12">
            <div class="_menu container">
                <div id="toggle">
                   <i class="fa fa-bars"></i>
                </div>
                <nav id="nav" class="nav navbar">
                    <ul class="nav p-0">
                        <div>
                            <li class="nav-item"><a class="home" href="#"><i class="fa fa-fw fa-home"></i></a></li>
                        </div>
                        <div class="dropdown">
                            <li class="active dropbtn"><a href="#">Giới thiệu</a></li>
                            <div class="dropdown-content">
                                <li>
                                    <a href="">Link 1</a>
                                </li>
                                <li>
                                    <a href="">Link 1</a>
                                </li>
                                <li>
                                    <a href="">Link 1</a>
                                </li>
                            </div>
                        </div>
                        <div>
                            <li class="nav-item"><a class="" href="/chinh-tri">Tin chính trị</a></li>
                        </div>
                        <div>
                            <li class="nav-item"><a class="" href="#">Văn hoá - xã hội</a></li>
                        </div>
                        <div>
                            <li class="nav-item"><a class="" href="#">Kinh kế</a></li>
                        </div>
                        <div>
                            <li class="nav-item"><a class="" href="#">Quốc phòng an ninh</a></li>
                        </div>
                        <div>
                            <li class="nav-item"><a class="" href="#">Pháp luật</a></li>
                        </div>
                        <div>
                            <li class="nav-item"><a class="" href="#">Sức khoẻ</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
</header>

<script>
    $(document).ready(function(){
        $('#toggle').click(function(){
            $('#nav').slideToggle();
        });
    })
</script>
