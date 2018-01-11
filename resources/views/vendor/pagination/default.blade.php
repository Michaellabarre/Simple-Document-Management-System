
<tfoot>
    <tr>
        <th colspan="10">
            <div class="ui right floated pagination menu">
                @if ($paginator->hasPages())
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a class=" item disabled"><span>&laquo;</span></a>
                @else
                    <a class="item" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <a class="item disabled"><span>{{ $element }}</span></a>
                    @endif
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class="item active"><span>{{ $page }}</span></a>
                            @else
                                <a class="item" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="item" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                @else
                    <a class="item disabled"><span>&raquo;</span></a>
                @endif
           
                @endif
            </div>
        </th>
    </tr>
</tfoot>
