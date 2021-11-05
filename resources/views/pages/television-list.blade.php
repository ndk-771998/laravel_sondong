@extends('layout.master')
@section('content')
    <section>
        <div class="container post-list-container">
            <div class="post-list-wrap">
                <div class="post-list-title">Danh sách clip truyền hình</div>
                <hr>
                @include('include.television.television-list')

                {{-- @dd(last(explode('/','http://sondong.local.com/uploads/documents/1635930954_getting_started_with_one_drive.pdf'))) --}}
            </div>
        </div>
    </section>
@endsection