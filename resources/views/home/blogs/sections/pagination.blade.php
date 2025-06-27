<nav aria-label="Pagination" class="pagination-container">
    <!-- Previous Button -->
    <a rel="prev" 
       href="{{ $blogs->previousPageUrl() ? $blogs->previousPageUrl() . (!empty(request()->except('page')) ? '&' . http_build_query(request()->except('page')) : '') : '#' }}"
       class="pagination-link {{ $blogs->onFirstPage() ? 'pagination-link-disabled' : 'pagination-link-default' }}"
       aria-label="Previous page">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
        </svg>
    </a>

    <!-- Page Links -->
    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
        @php
            // Remove 'page' parameter from query parameters
            $query = request()->except('page');
            $urlWithQuery = $url . (!empty($query) ? '&' . http_build_query($query) : '');
        @endphp

        @if ($page == $blogs->currentPage())
            <!-- Active Page -->
            <a rel="active" href="{{ $urlWithQuery }}" class="pagination-link pagination-link-active"
                data-page="{{ $page }}" aria-current="page">
                <span class="pagination-number pagination-number-active">{{ $page }}</span>
            </a>
        @else
            <!-- Default Page -->
            <a rel="next" href="{{ $urlWithQuery }}" class="pagination-link pagination-link-default"
                data-page="{{ $page }}">
                <span class="pagination-number pagination-number-default">{{ $page }}</span>
            </a>
        @endif
    @endforeach

    <!-- Next Button -->
    <a rel="next" 
       href="{{ $blogs->nextPageUrl() ? $blogs->nextPageUrl() . (!empty(request()->except('page')) ? '&' . http_build_query(request()->except('page')) : '') : '#' }}"
       class="pagination-link {{ $blogs->hasMorePages() ? 'pagination-link-default' : 'pagination-link-disabled' }}"
       aria-label="Next page">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
    </a>
</nav>
