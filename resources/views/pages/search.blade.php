@extends('layout.master')
@section('content')
    <section>
        <div class="container search-container">
            <div class="search-wrap">
                <div class="search-title">Kết quả tìm kiếm</div>
                <hr>
                <form action="{{ route('search') }}" method="get">
                    <div class="row">
                        <div class="col-12 col-xl-7 search-form">
                            <input class="search-input" type="text" name="search" value="">
                            <button class="search-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-12 col-xl-5 search-filter">
                            <div class="form-check filter">
                                <input class="form-check-input" type="radio" name="postType" value="all" id="all">
                                <label class="form-check-label" for="all">
                                    Tất cả
                                </label>
                            </div>
                            <div class="form-check filter">
                                <input class="form-check-input" type="radio" name="postType" value="television" id="television">
                                <label class="form-check-label" for="television">
                                    Video
                                </label>
                            </div>
                            <div class="form-check filter">
                                <input class="form-check-input" type="radio" name="postType" value="audio" id="audio">
                                <label class="form-check-label" for="audio">
                                    Truyền thanh
                                </label>
                            </div>
                            <div class="form-check filter">
                                <input class="form-check-input" type="radio" name="postType" value="posts" id="posts">
                                <label class="form-check-label" for="posts">
                                    Tin tức
                                </label>
                            </div>
                        </div>
                    </div>
                </form>

                @include('include.television.television-list', ['posts' => $television_results])
                @include('include.post.post-list', ['posts' => $post_results])

                {{-- @dd(last(explode('/','http://sondong.local.com/uploads/documents/1635930954_getting_started_with_one_drive.pdf'))) --}}
            </div>
        </div>
    </section>
@endsection