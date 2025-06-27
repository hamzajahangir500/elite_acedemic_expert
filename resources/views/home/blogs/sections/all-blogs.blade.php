@if(@$author != null)
    <section class="author-profile py-5">
        <div class="container">
            <div class="row section-content">
                <!-- Left Column - All Sections Content -->
                <div class="col-12 col-lg-8">
                    <div class="author-header">
                        <div class="author-info">
                            <div class="author-avatar">
                                <img src="{{ asset('storage/articles/' . $author->image) }}" alt="Featured Image" class="featured-image lazy" />
                            </div>
                            <div class="author-name-container">
                                <h2 class="author-name">{{@$author->name}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="author-bio mt-3">
                        <h3 class="bio-heading">About the author:</h3>
                        <p class="bio-text">
                            {{@$author->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!-- Articles and Popular Section -->
<section class="py-5">
    <div class="container">
        <div class="row section-content">
            <!-- Left Column - All Sections Content -->
            <div class="col-12 col-lg-8">               
                @foreach (@$blogs as $blog)
                    <article class="article-card">
                        <div class="article-contents">
                            <div>
                                <a href="{{ route('blogs.show', ['blog' => @$blog->slug]) }}" class="article-title">
                                    {{ $blog->title }}
                                </a>
                                <p class="article-description">
                                    {{ $blog->meta_description }}
                                </p>
                            </div>
                            <div class="article-meta">
                                <span class="article-date">{{ $blog->created_at->format('Y-m-d') }}</span>
                                <div class="featured-author">
                                    <span class="circle-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#ff6303" class="bi bi-pentagon-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M7.685.256a.5.5 0 0 1 .63 0l7.421 6.03a.5.5 0 0 1 .162.538l-2.788 8.827a.5.5 0 0 1-.476.349H3.366a.5.5 0 0 1-.476-.35L.102 6.825a.5.5 0 0 1 .162-.538l7.42-6.03Z" />
                                        </svg>
                                    </span>
                                    <a href="{{ $blog->author != null ? route('auhor.show', ['id'=> $blog->author->id]) : '#'}}">
                                        <span class="featured-author-label name">Author: </span>
                                        <span class="name">{{ $blog->author != null ? $blog->author->name : 'N/A' }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ $blog->image }}" alt="Article Image" class="article-image lazy"/>
                        </div>
                    </article>
                @endforeach
                @include('home.blogs.sections.pagination')
            </div>

            <!-- Right Column - Popular Section -->
            @if(@$searchString == null)
                <div class="col-12 col-lg-4">
                    <div class="popular-section">
                        <a href="#" class="popular-heading">POPULAR</a>
                        @foreach (@$popular_blogs as $popular_blog)
                            <!-- Popular Item 1 -->
                            <div class="popular-item">
                                <a href="{{ route('blogs.show', ['blog' => @$popular_blog->slug]) }}" class="popular-title">
                                    {{$popular_blog->title}}
                                </a>
                                <div class="article-meta">
                                    <span class="article-date">{{$popular_blog->created_at->format('Y-m-d')}}</span>
                                    <div class="featured-author">
                                        <span class="circle-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#ff6303" class="bi bi-pentagon-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.685.256a.5.5 0 0 1 .63 0l7.421 6.03a.5.5 0 0 1 .162.538l-2.788 8.827a.5.5 0 0 1-.476.349H3.366a.5.5 0 0 1-.476-.35L.102 6.825a.5.5 0 0 1 .162-.538l7.42-6.03Z" />
                                            </svg>
                                        </span>       
                                        <a href="{{ $popular_blog->author != null ? route('auhor.show', ['id'=> $popular_blog->author->id]) : '#'}}">                                 
                                            <span style="color: #050505; font-size: 10px; font-weight: 700">Author: </span>
                                            <span style="color: #6d6d6d; font-size: 10px">{{$popular_blog->author != null ? $popular_blog->author->name : 'N/A'}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
