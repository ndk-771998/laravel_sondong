@extends('layout.master')
@section('content')
    <section>
        <div class="container post-list-container">
            <div class="post-list-wrap">
                <div class="post-list-title">Tin chính trị</div>
                <div class="post-list-categories">
                    <ul>
                        <li class="item-category default-item-category">Học tập và làm theo tấm gương đạo đức HCM</li>
                        <li class="item-category default-item-category">Tin đảng bộ, chính quyền MTTQ và các đoàn thể nhân dân</li>
                        <li class="item-category default-item-category">Xây dựng nông thôn mới</li>
                        <div class="show-more-categories">
                            <span class="label">
                                Thêm chuyên mục <img width="10" height="10" src="/assets/logos/next-light.svg" alt="arrow">
                            </span>
                            <ul>
                                <li class="item-category">Học tập và làm theo tấm gương đạo đức HCM</li>
                                <li class="item-category">Tin đảng bộ, chính quyền MTTQ và các đoàn thể nhân dân</li>
                                <li class="item-category">Xây dựng nông thôn mới</li>
                            </ul>
                        </div>
                    </ul>
                </div>
                @include('include.post.post-list')
                <div class="btn-show-more-post">Xem thêm <img width="14" height="14" src="/assets/logos/down.svg" alt="down"></div>
            </div>
        </div>
    </section>
@endsection