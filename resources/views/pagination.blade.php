

@if ($paginator->hasPages())
<ul class="pagination pagination-style-01 fs-13 alt-font fw-600 mb-0">
    @if ($paginator->onFirstPage())
    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
    @else
    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
    @endif
    @foreach ($elements as $element)
    @if (is_string($element))
    <li class="page-item"><a class="page-link" href="#">{{ $element }}</a></li>
    @endif
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
    <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
            @else
    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach
    @endif
    @endforeach
    @if ($paginator->hasMorePages())
    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
    @else
    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
    @endif
</ul>
@endif