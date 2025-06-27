@extends('home.layouts.app')

@section('title')
    <title>Elite Academnic Expert | Blog</title>
@endsection

@push('styles')    
    <link rel="stylesheet" href="{{ asset('assets/blogs-assets/css/styles.css') }}">
    <style>
        table {
            border-collapse: collapse;
            /* Ensures borders don't double up */
            width: 100%;
            /* Optional: adjusts table width */
        }

        table,
        td {
            border: 1px solid black;
            /* Adds border to the table and cells */
        }

        td {
            padding: 8px;
            /* Optional: adds spacing inside cells */
            text-align: center;
            /* Optional: aligns text in cells */
        }

        ul,
        ol {
            margin-left: 10vh !important;
        }

        li {
            font-size: 20px !important;
        }

        .related-articles__description {
            display: -webkit-box;
            /* Enables a flexible layout for text */
            -webkit-line-clamp: 2;
            /* Limits text to 2 lines */
            -webkit-box-orient: vertical;
            /* Sets the orientation of the box */
            overflow: hidden;
            /* Hides overflowing text */
            text-overflow: ellipsis;
            /* Adds ellipsis only when text overflows */
            line-height: 2;
            /* Sets consistent line spacing */
            max-height: calc(1.5em * 2);
            /* Restricts height to 2 lines */
        }

        a {
            text-decoration: none !important
        }
    </style>
@endpush

@section('descriptions')
    @if ($blog->meta_title)
        <meta name="title" content="{{ $blog->meta_title }}" />
    @endif

    @if ($blog->meta_description)
        <meta name="description" content="{{ $blog->meta_description }}" />
    @endif

    @if ($blog->focus_keyphrase)
        <meta name="keywords" content="{{ $blog->focus_keyphrase }}" />
    @endif

    <meta name="robots" content="index, follow" />

    <script type="application/ld+json">
        {!! $blog->schema !!}
    </script>
@endsection

@section('section')
    <section class="contactSectionhero d-flex justify-content-center align-items-center ">
        <div class="container pt-5">
            <div class="navigationsdiv d-lg-flex justify-content-lg-between align-items-lg-center">

                <h2 class="sub-heading-26px text-white fw-bold">{{@$blog->author->name}} Blog</h2>
                <p class="heroPara text-white">Home>>Blogs</p>
            </div>

        </div>
    </section>

    <section class="article-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="article-hero__content">
                        <h2 class="article-hero__title">
                            {{ @$blog->title }}
                        </h2>
                        <p class="article-hero__description">
                            {{ @$blog->meta_description }}

                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="article-hero__image-container">
                        <img src="{{ asset('storage/articles/' . @$blog->image) }}" alt="Academic Statement Guide" class="article-hero__image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="article-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="article-content__section">
                        {!! preg_replace(
                            '/<oembed url="https:\/\/www\.youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)"><\/oembed>/i',
                            '<iframe style="width: 100%; height: 620px; margin: 20px 0px;" src="https://www.youtube.com/embed/$1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            $blog->content,
                        ) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="container">
    <section class="container py-5">
        <div class="blog-stats-wrapper">
            <!-- Writer Section -->
            <div class="blog-writer-box">
                <div class="blog-writer-header">
                    <div class="blog-writer-info">
                        <div class="blog-writer-image"
                            style="background-image: url('{{ $blog->author && $blog->author->image 
                                ? asset('storage/authors/' . $blog->author->image) 
                                : 'https://s3-alpha-sig.figma.com/img/c7fe/f583/db7132868d734de68a665bf4a8675dd9?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=cR9PLSx2pm9POiF-2Bh6HfuO-JQedL8yIh4RaxOn91gFqSFcbSBEELTw9i-jULabSAmXZvWMQXL2RwUERnt2zx9HdScVr30IqZUdUcuCiY2GW4wVn7pXPvZ9MsGgmBASuu3jnIDycUNn1hQLs20ZP3xhFNgKnNmfdHc~fZylYSqTg9BbwZxOsH~qaEYoEi82SkbjufO8Y3a6zDORxkfB1kmvqcb6VbFHBaYOLnYrC5s~1OqJVRu6rrZfX5TA7AD2ofqd24Hg1Ee7YopqaScwM49lUiYh9OztCiAYstR8JDu0WBJsNS-~zXqmlxly09-OV0HNDBMLShvuSDs2jH~P8w__' }}');">
                        </div>

                        <a href="{{ $blog->author != null ? route('auhor.show', ['id' => @$blog->author->id]) : '#' }}">
                            <div class="blog-writer-details">
                                <div class="blog-writer-label">Author:</div>
                                <div class="blog-writer-name">{{ @$blog->author != null ? @$blog->author->name : 'N/A' }}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-articles pb-5">
        <div class="container">
            <h2 class="related-articles__title mb-4">Popular Articles</h2>

            <div class="row">
                <div class="col-12">
                    <div class="swiper related-articles__slider">
                        <div class="swiper-wrapper">
                            <!-- First Article Card -->
                            @foreach (@$popular_blogs as $popular_blog)
                                <div class="swiper-slide related-articles__card">
                                    <div class="card-wrapper">
                                        <img src="{{ asset('storage/articles/' . @$popular_blog->image) }}" alt="Article Image"
                                            class="related-articles__image" />
                                        <div class="related-articles__content">
                                            <h3 class="related-articles__card-title">
                                                <a href="#"
                                                    class="related-articles__link">{{ $popular_blog->title }}</a>
                                            </h3>
                                            <p class="related-articles__description">
                                                {{ $popular_blog->meta_description }}
                                            </p>
                                            <div class="related-articles__meta">
                                                <span
                                                    class="related-articles__date">{{ $popular_blog->created_at->format('Y-m-d') }}</span>
                                                <div class="related-articles__author">
                                                    <span class="related-articles__author-label">Author:</span>
                                                    <span
                                                        class="related-articles__author-name">{{ $popular_blog->author != null ? $popular_blog->author->name : 'N/A' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('assets/blogs-assets/js/script.js') }}"></script>

    <script>
        document.querySelectorAll('h2, h3, h4, h5, h6').forEach((heading) => {
            const previousLevel = parseInt(heading.tagName[1]) - 1;
            if (previousLevel >= 1) {
                const newHeading = document.createElement(`h${previousLevel}`);
                newHeading.innerHTML = heading.innerHTML;
                heading.replaceWith(newHeading);
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.related-articles__slider', {
                slidesPerView: 3, // Number of slides visible
                spaceBetween: 20, // Space between slides
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: true, // Optional: Enable looping
            });
        });
    </script>
@endpush
