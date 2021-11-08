<div class="_pagination col-xs-12 col-sm-12 col-md-12">       
        @if(isset($postlist))
            {{$postlist->links()}}
        @else
            {{$dpostlist->links()}}
        @endif
</div>