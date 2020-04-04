@if ($paginator->hasPages())
<nav>
    <ul class="pagination">
        @if (!$paginator->onFirstPage())
        <li class="page-item ">
            <a class="carousel-control-prev" href="{{ $paginator->previousPageUrl() }}" role="button" data-slide="prev">
                <span class="" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @endif
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="carousel-control-next" href="{{ $paginator->nextPageUrl() }}" role="button" data-slide="next">
                <span class="" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
