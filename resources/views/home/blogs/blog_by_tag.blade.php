@extends('home.layouts.app')

@section('title')
    <title>Elite Academnic Expert | Tagged Blog</title>
@endsection

@section('descriptions')
    @if (@$tag == 'Planning')
        <meta name="title" content="Planning Your Personal Statement - Essay Pacer" />
        <meta name="description"  content="Discover how to plan a winning personal statement. Get expert tips from Essay Pacer on structuring your statement for maximum impact." />
    @elseif (@$tag == 'Motivation')
        <meta name="title" content="Motivation for Writing Your Personal Statement - Essay Pacer" />
        <meta name="description" content="Find inspiration and motivation to craft an exceptional personal statement with Essay Pacer's expert advice and strategies." />
    @elseif (@$tag == 'Inspiration')
        <meta name="title" content="Inspiration for Your Personal Statement - Essay Pacer" />
        <meta name="description" content="Get inspired with creative tips for writing a compelling personal statement. Essay Pacer offers insights to help you stand out in your application." />
    @endif
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ route('blogs') }}" />
@endsection
@push('styles')    
    <link rel="stylesheet" href="{{ asset('assets/blogs-assets/css/styles.css') }}">
    <style>
        .circle-arrow {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            /* Make it a circle */
        }

        .circle-arrow svg {
            display: block;
            /* Ensures no extra space around the SVG */
        }

        .article-description {
            color: #000000
        }

        a {
            text-decoration: none !important
        }
    </style>
@endpush
@section('section')
  <section class="contactSectionhero d-flex justify-content-center align-items-center ">
    <div class="container pt-5">
        <div class="navigationsdiv d-lg-flex justify-content-lg-between align-items-lg-center">

            <h2 class="sub-heading-26px text-white fw-bold">Search Blog</h2>
            <p class="heroPara text-white">Home>>Blogs</p>
        </div>

    </div>
  </section>
    <!-- Planning Section -->
    @include('home.blogs.sections.tag-menu')
    <section class="py-5">
        <div class="container">
            <div class="row section-content">
                <!-- Left Column - All Sections Content -->
                <div class="col-12 col-lg-8">
                    <!-- Featured Section -->
                    <a href="#" class="featured-heading">Featured</a>
                    @foreach (@$featured_blogs as $blog)
                        <article class="featured-cards mt-2">
                            <img src="{{ asset('storage/articles/' . @$blog->image) }}" alt="Featured Article 1" class="featured-image lazy" />
                            <div class="featured-content">
                                <div class="featured-meta">
                                    <span class="featured-date">{{ $blog->created_at->format('Y-m-d') }}</span>
                                    <div class="featured-author">
                                        <span class="circle-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#ff6303" class="bi bi-pentagon-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.685.256a.5.5 0 0 1 .63 0l7.421 6.03a.5.5 0 0 1 .162.538l-2.788 8.827a.5.5 0 0 1-.476.349H3.366a.5.5 0 0 1-.476-.35L.102 6.825a.5.5 0 0 1 .162-.538l7.42-6.03Z" />
                                            </svg>
                                        </span>
                                        <a
                                            href="{{ $blog->author != null ? route('auhor.show', ['id' => $blog->author->id]) : '#' }}">
                                            <span class="featured-author-label">Author: </span>
                                            <span>{{ $blog->author != null ? $blog->author->name : 'N/A' }}</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="{{ route('blogs.show', ['blog' => @$blog->slug]) }}" class="featured-title">
                                    {{ $blog->title }}
                                </a>
                                <p class="featured-description">
                                    {{ $blog->meta_description }}
                                </p>
                                <a href="{{ route('blogs.show', ['blog' => @$blog->slug]) }}" class="read-more">
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
                    @endforeach

                    <!-- Planning Section -->
                    <a href="#" class="featured-heading mt-5">Latest</a>
                    @foreach ($blogs as $blog)
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
                                        <a
                                            href="{{ $blog->author != null ? route('auhor.show', ['id' => $blog->author->id]) : '#' }}">
                                            <span class="featured-author-label name">Author: </span>
                                            <span
                                                class="name">{{ $blog->author != null ? $blog->author->name : 'N/A' }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ $blog->image }}" alt="Inspiration Article" class="article-image" />
                        </article>
                    @endforeach
                    @include('home.blogs.sections.pagination')
                </div>

                <!-- Right Column - Popular Section -->
                <div class="col-12 col-lg-4 mt-md-3">
                    <div class="popular-section">
                        <a href="#" class="popular-heading">Theme</a>
                        @foreach (App\Models\Theme::get() as $theme)
                            <div class="popular-item">
                                <a href="{{ route('get.blogsByTag', [
                                    'tag' => @$tag,
                                    'theme_id' => @$theme->id,
                                ]) }}"
                                    class="popular-title">
                                    {{ $theme->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
