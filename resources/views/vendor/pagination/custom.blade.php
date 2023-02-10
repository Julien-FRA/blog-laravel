@if ($paginator->hasPages())
    <ul class="pagination">

      @if ($paginator->onFirstPage())
        <li class="page-item disabled"><span class="page-link" rel="prev">Précédent</span></li>
      @else
          <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">Précédent</a></li>
      @endif

      @foreach ($elements as $element)
          @if (is_string($element))
            <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
          @endif
          @if (is_array($element))
            @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                <li class="page-item active my-active"><span class="page-link">{{ $page }}</span></li>
              @else
                <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
              @endif
            @endforeach
        @endif
      @endforeach

      @if ($paginator->hasMorePages())
        <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next">Suivant</a></li>  
      @else
        <li class="page-item disabled"><span class="page-link" rel="next">Suivant</span></li>
      @endif

    </ul>
@endif