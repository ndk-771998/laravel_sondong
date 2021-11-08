@extends('layout.master')
@section('content')
<div class="col-12 col-sm-12 col-md-12 audio-content">
   <div class="row">
    <div class="audio-list-content col-12 col-sm-12 col-md-12">
        <!-- Audio Detail -->
        <div class="title">
            <h3>Danh sách bản tin truyền thanh</h3>
        </div>
        @foreach($audio_detail as $row)
        <div class="audio-detail col-12 col-sm-12 col-md-12 p-0">
            <div class="audio-detail-content col-12 col-sm-12 col-md-12 p-0">
                <div class="row">
                <div class="title-detail col-md-5">
                    <p>{{$row->title}}</p>
                </div>
                <div class="sub-detail col-md-7">
                    <audio controls >
                        <source src="{{$row->thumbnail}}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            <div class="views-author">
                <p class="views">Lượt xem: 3254</p>
                <p class="author">Đăng bởi, Admin, ngày 05/10/2021 10:30</p>
            </div>
        </div>
        @endforeach
        <!-- List Audio  -->
        <div class="_title">
            <h3>Danh sách bản tin truyền thanh khác</h3>
        </div>
        <div class="content col-12 col-sm-12 col-md-12 p-0">
            @foreach($dpostlist as $rowd)
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
                <div class="row">
                <div class="sub-title col-md-5">
                    <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}/{{$rowd->slug}}">{{$rowd->title}}</a>
                </div>
                <div class="sub-audio col-md-7">
                    <audio controls >
                        <source src="{{$rowd->thumbnail}}" type="audio/mpeg">
                    </audio>
                </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination -->
        @include('include.post.pagination')
    </div>
   </div>
</div>
@endsection
