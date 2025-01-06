@if ($paginator->hasPages())

<div class="col-12 mt-5 md-mt-7 d-flex justify-content-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>

        <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><i class="feather icon-feather-arrow-leftt fs-18 d-xs-none"></i></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>


            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item"><a class="page-link" href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>

                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>

            @else
                <li class="page-item disabled"><span class="page-link" ><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></span></li>

            @endif
        </ul>
    </div>
@endif
