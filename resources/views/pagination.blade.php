@if ($paginator->hasPages())
    <ul class="pager numeral">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{-- <li class="disabled"><i class="fas fa-caret-left"></i></li> --}}
        @else
            {{-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="prev"> <i class="fas fa-caret-left"></i></a></li> --}}
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
              @php
                $tot = count($element);
              @endphp

                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</@></span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif

                    {{-- @if($page != $tot)

                        <li><div class="cuadrado"></div></li>
                    @endif --}}

                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next"> <i class="fas fa-caret-right"></i> </a></li> --}}
        @else
            {{-- <li class="disabled"><i class="fas fa-caret-right"></i></li> --}}
        @endif
    </ul>
@endif
