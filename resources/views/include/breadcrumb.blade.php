<div class="breadcrumb" id="breadcrumb">
    <a href="/"><i class="fa fa-home home-icon"></i></a>
    <i class="fa fa-chevron-right" aria-hidden="true"></i>
    @foreach($breadcrumb as $key=>$value)
    @if($loop->last)
    <a href="#"> {!!$key!!}</a></i>
    @else
    <a href="{{$value}}"> {!!$key!!}</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
    @endif
    @endforeach
</div>