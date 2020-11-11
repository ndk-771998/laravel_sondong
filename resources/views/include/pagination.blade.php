@if ($paginator->hasPages())
<nav>
    <ul class="pagination">
        @if ($paginator->onFirstPage())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url(1) }}">Đầu <img src="/assets/images/logo/Rewird.png"
                    alt=""></a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url(1) }}">Đầu <img src="/assets/images/logo/Rewird.png"
                    alt=""></a>
        </li>
        <li class="page-item ">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><img src="/assets/images/logo/left.png"
                    class="soft" alt=""></a>
        </li>
        @endif

        @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))

        @foreach ($element as $page => $url)

        @if ($page == $paginator->currentPage())
        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
        @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page ==
        $paginator->lastPage())
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @elseif ($page == $paginator->lastPage() - 1)
        <li class="page-item disabled"><span class="page-link">...</span></li>
        @endif
        @endforeach
        @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}"><img src="/assets/images/logo/right.png"
                    class="soft" alt=""></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}"><img
                    src="/assets/images/logo/next.png" alt=""> Cuối </a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}"><img
                    src="/assets/images/logo/next.png" alt=""> Cuối </a>
        </li>
        @endif
    </ul>
</nav>
@endif
