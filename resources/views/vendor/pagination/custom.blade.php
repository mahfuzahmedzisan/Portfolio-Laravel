<!-- resources/views/vendor/pagination/custom.blade.php -->
<nav aria-label="Page navigation">
   <ul class="pagination justify-content-center">
      @if ($paginator->onFirstPage())
      <li class="page-item disabled">
         <span class="page-link">&laquo; Previous</span>
      </li>
      @else
      <li class="page-item">
         <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
      </li>
      @endif

      @foreach ($elements as $element)
      @if (is_string($element))
      <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
      @elseif (is_array($element))
      @foreach ($element as $page => $url)
      @if ($page == $paginator->currentPage())
      <li class="page-item active" aria-current="page">
         <span class="page-link">{{ $page }}</span>
      </li>
      @else
      <li class="page-item">
         <a class="page-link" href="{{ $url }}">{{ $page }}</a>
      </li>
      @endif
      @endforeach
      @endif
      @endforeach

      @if ($paginator->hasMorePages())
      <li class="page-item">
         <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next &raquo;</a>
      </li>
      @else
      <li class="page-item disabled">
         <span class="page-link">Next &raquo;</span>
      </li>
      @endif
   </ul>
</nav>