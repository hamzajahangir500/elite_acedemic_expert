<section class="featured-section">
    <div class="container">
        <a href="#" class="featured-heading">Featured</a>
        <div class="row g-4">
            <!-- Featured Card  -->
            @foreach (@$featured_blogs as $featured_blog)
                <div class="col-12 col-lg-6">
                    <article class="featured-card h-100">
                        <img src="{{ asset('storage/articles/' . $featured_blog->image) }}" alt="Featured Image" class="featured-image lazy" />
                        <div class="featured-content">
                            <div class="featured-meta">
                                <span class="featured-date">{{ $featured_blog->created_at->format('Y-m-d') }}</span>
                                <div class="featured-author">
                                    <span class="circle-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#ff6303" class="bi bi-pentagon-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M7.685.256a.5.5 0 0 1 .63 0l7.421 6.03a.5.5 0 0 1 .162.538l-2.788 8.827a.5.5 0 0 1-.476.349H3.366a.5.5 0 0 1-.476-.35L.102 6.825a.5.5 0 0 1 .162-.538l7.42-6.03Z" />
                                        </svg>
                                    </span>
                                    <a href="{{ $featured_blog->author != null ? route('auhor.show', ['id'=> $featured_blog->author->id]) : '#'}}">
                                        <span class="featured-author-label">Author: </span>
                                        <span>{{ $featured_blog->author != null ? $featured_blog->author->name : 'N/A' }}</span>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blogs.show', ['blog' => @$featured_blog->slug]) }}" class="featured-title">
                                {{ $featured_blog->title }}
                            </a>
                            <p class="featured-description">
                                {{ $featured_blog->meta_description }}.
                            </p>
                            <a href="{{ route('blogs.show', ['blog' => @$featured_blog->slug]) }}" class="read-more">
                                <div class="read-more2">Read Full Blog</div>
                                <div class="circle-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#0dbdb8"
                                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
