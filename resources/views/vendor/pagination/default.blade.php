
@if ($paginator->hasPages())

<div class="box-body d-flex justify-content-center align-items-center">
                        <ul class="pagination justify-content-center">
                        @if ($paginator->onFirstPage())
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                            </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-chevron-left"></i></a>
                                        </li>
                        @endif
                        {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
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
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                
                 <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-chevron-right"></i></a>
                            </li>
            @else
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>
                            </li>
                
            @endif
                            
                            
                           
                        </ul>
                    </div>
@endif