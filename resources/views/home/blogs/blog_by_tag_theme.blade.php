@extends('home.layouts.app')

@section('title')
    <title>Elite Academnic Expert | Tag/Theme Blog</title>
@endsection

@section('descriptions')
    @if (@$theme_id == 1)
        <meta name="title" content="College Application Guide 2025: Tips, Deadlines & Strategies" />
        <meta name="description"
            content="Get expert tips and strategies for the college application process. Learn about deadlines, documents, and how to craft a standout application to top universities." />
    @elseif (@$theme_id == 2)
        <meta name="title" content="UCAS Personal Statement Writing: Tips, Examples & Structure" />
        <meta name="description"
            content="Master the UCAS personal statement with step-by-step guidance. Learn how to structure your statement, showcase your strengths, and increase your chances of acceptance." />
    @elseif (@$theme_id == 3)
        <meta name="title" content="Top Writing Tips for Students: Improve Essays & Academic Writing" />
        <meta name="description"
            content="Discover essential writing tips for students to improve academic essays, research papers, and reports. Learn how to write effectively and get higher grades." />
    @elseif (@$theme_id == 4)
        <meta name="title" content="International Students: Admissions, Scholarships & Study Abroad Tips" />
        <meta name="description"
            content="Find everything international students need to know, from university applications and scholarships to adapting to life and academics abroad." />
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
    <!-- Articles and Popular Section -->
    <section class="py-5">
        <div class="container">
            <div class="row section-content">
                <!-- Left Column - All Sections Content -->
                <div class="col-12 col-lg-8">
                    <!-- Planning Section -->
                    <a href="#"
                        class="featured-heading">{{ @App\Models\Theme::where('id', @$theme_id)->value('name') ?? 'All' }}</a>
                    @foreach (@$blogs as $blog)
                        <article class="article-card">
                            <div class="article-contents">
                                <div>
                                    <a href="{{ route('blogs.show', ['blog' => @$blog->slug]) }}" class="article-title">
                                        {{ @$blog->title }}
                                    </a>

                                    <p class="article-description">
                                        {{ @$blog->meta_description }}
                                    </p>
                                </div>
                                <div class="article-meta">
                                    <span class="article-date">{{ @$blog->created_at->format('Y-m-d') }}</span>
                                    <div class="featured-author">
                                        <span class="circle-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#ff6303" class="bi bi-pentagon-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.685.256a.5.5 0 0 1 .63 0l7.421 6.03a.5.5 0 0 1 .162.538l-2.788 8.827a.5.5 0 0 1-.476.349H3.366a.5.5 0 0 1-.476-.35L.102 6.825a.5.5 0 0 1 .162-.538l7.42-6.03Z" />
                                            </svg>
                                            <a
                                                href="{{ $blog->author != null ? route('auhor.show', ['id' => $blog->author->id]) : '#' }}">
                                                <span class="featured-author-label name">Author: </span>
                                                <span
                                                    class="name">{{ @$blog->author != null ? @$blog->author->name : 'N/A' }}</span>
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/articles/' . @$blog->image) }}" alt="Inspiration Article" class="article-image lazy" />
                        </article>
                    @endforeach
                    @include('home.blogs.sections.pagination')
                </div>
            </div>
        </div>
    </section>
@endsection
