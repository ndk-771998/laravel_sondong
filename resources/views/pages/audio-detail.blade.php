@extends('layout.master')
@section('content')
<div class="col-12 col-sm-12 col-md-12 audio-content">
   <div class="row">
    <div class="audio-list-content col-12 col-sm-12 col-md-12">
        <!-- Audio Detail -->
        <div class="title">
            <h3>Danh sách bản tin truyền thanh</h3>
        </div>
        <div class="audio-detail col-12 col-sm-12 col-md-12 p-0">
            <div class="audio-detail-content col-12 col-sm-12 col-md-12 p-0">
                <div class="row">
                <div class="title-detail col-md-5">
                    <p>Chương trình phát thanh 06/10/2021</p>
                </div>
                <div class="sub-detail col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="views-author">
                <p class="views">Lượt xem: 3254</p>
                <p class="author">Đăng bởi, Admin, ngày 05/10/2021 10:30</p>
            </div>
        </div>
        <!-- List Audio  -->
        <div class="_title">
            <h3>Danh sách bản tin truyền thanh khác</h3>
        </div>
        <div class="content col-12 col-sm-12 col-md-12 p-0">
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}">Chương trình phát thanh 06/10/2021</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{ url('/audio/sondong.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="_pagination col-xs-12 col-sm-12 col-md-12">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item first"><a class="" href="#"><< Đầu</a></li>
                <li class="page-item previous"><a class="" href="#">< Trước</a></li>
                <li class="normal">...</li>
                <li class="page-item"><a class="" href="#">7</a></li>
                <li class="page-item active"><a class="" href="#">8</a></li>
                <li class="page-item"><a class="" href="#">9</a></li>
                <li class="page-item"><a class="" href="#">10</a></li>
                <li class="page-item"><a class="" href="#">11</a></li>
                <li class="normal">...</li>
                <li class="page-item next"><a class="" href="#">Sau ></a></li>
                <li class="page-item last"><a class="" href="#">Cuối >></a></li>
            </ul>
        </nav>
        </div>
    </div>
   </div>
</div>
@endsection
