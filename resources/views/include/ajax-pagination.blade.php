@if ($paginator->hasPages())
<nav>
    <ul class="ajax-pagination pagination">
        @if ($paginator->onFirstPage())
        <li class="page-item">
            <span class="page-link no-border" ><i class="fa fa-chevron-left"></i></span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link no-border" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-chevron-left"></i></a>
        </li>
        @endif

        @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
            @elseif ($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2 || $page == $paginator->currentPage() - 2 || $page == $paginator->currentPage() - 1)
            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @elseif ($page == $paginator->currentPage() + 3 || $page == $paginator->currentPage() - 3)
                @if ($page == 1 || $page == $paginator->lastPage())
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @else    
                <li class="page-item disabled"><span class="page-link">...</span></li>
                @endif
            @endif
            @endforeach
        @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link no-border" href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-chevron-right"></i></a>
        </li>
        @else
        <li class="page-item">
            <span class="page-link no-border"><i class="fa fa-chevron-right"></i></span>
        </li>
        @endif
    </ul>
</nav>
@endif
