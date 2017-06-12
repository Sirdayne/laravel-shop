@if ($paginator->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}"  class="prev-page" ></a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li>
                <a href="{{ $paginator->url($i) }}"  class="pagination-box {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}"  class="next-page"></a>
        </li>
    </ul>
@endif