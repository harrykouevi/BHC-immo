@if ($paginator->hasPages())


        <ul class="pagination product-pagination ml-auto float-right">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item page-prev disabled">
                    <span class="page-link" >Prev</span>
                </li>
            @else
                <li class="page-item page-prev ">
                    <a class="page-link"  href="{{ $paginator->previousPageUrl() }}" rel="prev" >Prev</a>
                </li>

            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item page-next">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" >Next</a>
                </li>
            @else
                <li class="page-item page-next disabled">
                    <span class="page-link" href="#">Next</span>
                </li>
            @endif
        </ul>

@endif
