<style>
  .circle-icon {
    display: flex; /* Enable flexbox for alignment */
    align-items: center; /* Vertically align items */
    gap: 8px; /* Optional: Space between image and text */
  }

  .circle-icon img {
    width: 24px; /* Set a fixed size for the image */
    height: 24px; /* Match width for consistency */
    object-fit: contain; /* Ensure proper scaling */
  }

  .icon-text {
    font-size: 16px; /* Set a font size for the text */
    line-height: 1.5; /* Adjust line height for text */
  }
</style>
<section class="planning-section m-3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-8 mb-md-3 mb-md-0">
          <div class="d-flex align-items-center flex-wrap justify-content-center justify-content-md-end gap-3">
            <a href="{{ route('get.blogsByTag', ['tag' => 'Planning']) }}" class="menu-item planning {{ @$tag == 'Planning' ? 'active' : '' }}">
              <span class="circle-icon"> 
                <img src="{{asset('assets/blogs-assets/images/Ellipse_1.svg')}}" alt="planning" srcset="" />
                <span class="">Planning</span>
            </span>
            </a>
            <a href="{{ route('get.blogsByTag', ['tag' => 'Motivation']) }}" class="menu-item motivation  {{ @$tag == 'Motivation' ? 'active' : '' }}">
              <span class="circle-icon">
                <img src="{{asset('assets/blogs-assets/images/Polygon_1.svg')}}" alt="motivation" srcset="" />
                <span class="">Motivation</span>
            </span>
            </a>
            <a href="{{ route('get.blogsByTag', ['tag' => 'Inspiration']) }}" class="menu-item inspiration  {{@$tag == 'Inspiration' ? 'active' : '' }}">
              <span class="circle-icon">
                <img src="{{asset('assets/blogs-assets/images/Star_1.svg')}}" alt="inspiration" srcset="" />
                <span class="">Inspiration</span>
            </span>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <form action="{{route('search.blogs')}}" method="GET" class="search-container d-flex align-items-center w-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            <input  type="text" name="value"  class="search-input" placeholder="Search" value="{{@$searchString}}" required />
          </form>
        </div>        
      </div>
    </div>
</section>