@extends('layout.master')
@section('content')
    <section>
        <div class="container television-container">
            <div class="television-wrap">
                <div class="television-list-title">Danh sách clip truyền hình</div>
                <hr>
                <div class="television-title">Đồng chí Chu Quang Khanh được bầu giữ chức Phó bí thư Huyện đoàn Sơn Động</div>
                
                <video controls class="television-video"> 
                    <source src="{{ url('/image/bunny.mp4') }}">
                </video>
                <div class="d-flex justify-content-between television-info">
                    <div class="view">Lượt xem: 3545</div>
                    <div class="author">Đăng bởi:  Admin, ngày 05/10/2021 10:30</div>
                </div>
                {{-- @dd(last(explode('/','http://sondong.local.com/uploads/documents/1635930954_getting_started_with_one_drive.pdf'))) --}}
            </div>
        </div>

        <div class="container related-posts-container">
            <div class="related-posts-wrap">
                <div class="related-posts-title">Danh sách clip truyền hình khác</div>
                <hr class="m-0">
                <div class="related-television-list">
                    @include('include.television.television-list')
                </div>
            </div>
        </div>
    </section>
@endsection