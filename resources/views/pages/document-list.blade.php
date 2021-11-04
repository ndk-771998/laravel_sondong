@extends('layout.master')
@section('content')
<div class="col-12 col-sm-12 col-md-12 document-content">
   <div class="row">
   <div class="document-list-content col-12 col-sm-12 col-md-12">
        <!-- Document List -->
        <div class="title">
            <a href=""><h3>Văn bản chính sách</h3></a>
         </div>
         <div class="content col-12 col-sm-12 col-md-12 p-0">
         @include('include.post.table-document')
         </div>
    </div>
   </div>
</div>
<div>
   @include('include.post.pagination')
</div>
@endsection
