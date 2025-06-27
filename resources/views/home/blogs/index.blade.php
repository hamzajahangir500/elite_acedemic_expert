@extends('home.layouts.app')
@section('title')
    <title>Elite Academnic Expert | Blogs</title>
@endsection
@section('descriptions')
    {{-- <meta name="description" content="Explore the StatementPacer blog for expert insights, tips, and advice on crafting compelling statements. Gain genuine guidance from seasoned professionals in the field and enhance your writing skills. Start reading now!" /> --}}
    <meta name="title" content="Blog - Essay Pacer"/>
    <meta name="description" content="Stay informed with our latest articles on personal statement writing, application advice, and academic insights."/>
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
            border-radius: 50%; /* Make it a circle */
        }
        
        .circle-arrow svg {
            display: block; /* Ensures no extra space around the SVG */
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
    <!-- Featured Section -->
    @include('home.blogs.sections.featured')
    <hr class="container" />
    <!-- Articles and Popular Section -->
    @include('home.blogs.sections.all-blogs')
@endsection
@push('scripts')
    <script src="{{ asset('assets/blogs-assets/js/script.js/') }}"></script>
@endpush