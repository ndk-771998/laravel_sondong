@extends('layout.master')
@section('content')
<div class="col-12 col-sm-12 col-md-12 audio-content">
   <div class="row">
      <div class="audio-list-content col-12 col-sm-12 col-md-12">
         <div class="title">
            <h3>Danh sách bản tin truyền thanh</h3>
         </div>
         @foreach($postlist as $row)
         <div class="content col-12 col-sm-12 col-md-12 p-0">
            <div class="sub-audio-content col-12 col-sm-12 col-md-12">
               <div class="row">
               <div class="sub-title col-md-5">
                  <a href="{{URL::to('/chuong-trinh-truyen-thanh-chi-tiet')}}/{{$row->slug}}">{{$row->title}}</a>
               </div>
               <div class="sub-audio col-md-7">
                  <audio controls >
                     <source src="{{$row->thumbnail}}" type="audio/mpeg">
                  </audio>
               </div>
               </div>
            </div>
         </div>
         @endforeach
         @include('include.post.pagination')
      </div>
   </div>
</div>
@endsection
