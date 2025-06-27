@extends('home.layouts.app')
@section('title')
    <title>Academic Writing Services</title>
@endsection
@section('section')
    <div class="main-content">
        <div class="main-container">
            <!-- Hero Section -->
            <section class="elite-about mb-5">
                <!-- Content -->
                <div class="elite-about__container">
                    <h1 class="elite-about__heading">Blog List</h1>
                    <div class="elite-about__text">
                        Welcome to Elite Academic Expert, your trusted partner in academic
                        success. We are a dedicated team of experienced writers, editors,
                        and academic professionals committed to helping students and
                        researchers achieve their academic goals. With a passion for
                        excellence and a focus on delivering high-quality, personalized
                        academic writing services, we have established ourselves as a
                        leading provider in the industry.<br /><br />
                        Interested in working with us?
                    </div>
                    <div>
                        <!-- <button class="btn btn-order-now">Order now</button> -->
                    </div>
                </div>

                <!-- Right Decoration -->
                <div class="elite-about__decor-right">
                    <img style="
              padding-top: 10px;
              width: 143px;
              height: 270px;
              left: 157px;
              top: 190px;
              position: absolute;
              background: #fe514f;
              border-radius: 100px;
            "
                        src="{{asset('images/p1.png')}}" />
                    <img style="
              width: 143px;
              height: 220px;
              left: 0px;
              top: 413px;
              position: absolute;
              background: #20d0f6;
              border-radius: 100px;
            "
                        src="{{asset('images/p3.png')}}" />
                    <img style="
              padding-top: 50px;
              width: 143px;
              height: 300px;
              left: 0px;
              top: 0px;
              position: absolute;
              background: #2eb77b;
              border-radius: 100px;
            "
                        src="{{asset('images/p2.png')}}" />
                </div>

                <!-- Left Decoration -->
                <div class="elite-about__decor-left">
                    <img style="
              width: 143px;
              height: 270px;
              left: -157px;
              top: 241px;
              position: absolute;
              transform: rotate(180deg);
              transform-origin: 0 0;
              background: #fe514f;
              border-radius: 100px;
            "
                        src="https://via.placeholder.com/143x344" />
                    <img style="
              width: 143px;
              height: 270px;
              left: 0px;
              top: 413px;
              position: absolute;
              transform: rotate(180deg);
              transform-origin: 0 0;
              background: #20d0f6;
              border-radius: 100px;
            "
                        src="https://via.placeholder.com/143x344" />
                    <img style="
              width: 143px;
              height: 270px;
              left: 0px;
              top: 0px;
              position: absolute;
              transform: rotate(180deg);
              transform-origin: 0 0;
              background: #2eb77b;
              border-radius: 100px;
            "
                        src="https://via.placeholder.com/143x344" />
                </div>
            </section>

            <!-- Planning Section -->
            <section class="planning-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8 mb-md-3 mb-md-0">
                            <div class="d-flex align-items-center flex-wrap justify-content-center justify-content-md-end">
                                <a href="{{route('blogs.planning')}}" class="menu-item planning">
                                    <span class="circle-icon">
                                        <img src="{{asset('images/Ellipse 1.svg')}}" alt="" srcset="" />
                                    </span>
                                    Planning
                                </a>
                                <a href="{{route('blogs.motivation')}}" class="menu-item motivation">
                                    <span class="circle-icon">
                                        <img src="{{asset('images/Polygon 1.svg')}}" alt="" srcset="" />
                                    </span>
                                    Motivation
                                </a>
                                <a href="{{route('blogs.inspiration')}}" class="menu-item inspiration">
                                    <span class="circle-icon">
                                        <img src="{{asset('images/Star 1.svg')}}" alt="" srcset="" />
                                    </span>
                                    Inspiration
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="search-container d-flex align-items-center w-100">
                                <i class="fas fa-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Articles and Popular Section -->
            <section class="py-5">
                <div class="container">
                    <div class="row section-content">
                        <!-- Left Column - All Sections Content -->
                        <div class="col-12 col-lg-8">
                            <!-- Featured Section -->
                            <a href="#" class="featured-heading">Featured</a>

                            <article class="featured-cards">
                                <img src="{{asset('images/blogs_card.png')}}" alt="Featured Article 1" class="featured-image" />
                                <div class="featured-content">
                                    <div class="featured-meta">
                                        <span class="featured-date">09-12-2024</span>
                                        <div class="featured-author">
                                            <span class="circle-icon">
                                                <img src="{{asset('images/Polygon 1.svg')}}" alt="" srcset="" /></span>
                                            <span class="featured-author-label">Author: </span>
                                            <span>Jessie Anderson</span>
                                        </div>
                                    </div>
                                    <a href="#" class="featured-title">
                                        Writing a Strong Academic Statement: A Comprehensive Guide
                                        for Graduate Applications
                                    </a>
                                    <p class="featured-description">
                                        If one is thinking about getting into a graduate school,
                                        then one of the vital parts of the application is an
                                        academic statement. This document enables you to present
                                        yourself academically, philosophies, and prospective
                                        integrating your graduate education.
                                    </p>
                                    <a href="#" class="read-more">
                                        <div class="read-more2">Read More</div>
                                        <div class="circle-arrow">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </article>

                            <!-- Planning Section -->
                            <a href="#" class="featured-heading mt-5">Latest</a>

                            <article class="article-card">
                                <div class="article-contents">
                                    <div>
                                        <a href="#" class="article-title">
                                            Morning Routines of Successful Entrepreneurs
                                        </a>

                                        <p class="article-description">
                                            Discover the morning habits and routines that successful
                                            entrepreneurs use to stay inspired and productive
                                            throughout their day Lorem ipsum dolor sit amet.lorem
                                            ipsum. Discover the morning habits and routines that
                                            successful entrepreneurs use to stay inspired and
                                            productive throughout their day Lorem ipsum dolor sit
                                            amet.lorem ipsum. inspired and productive throughout
                                            their day Lorem ipsum dolor sit amet.lorem ipsum. Lorem
                                            ipsum dolor sit amet.lorem ipsum. inspired and
                                            productive throughout their day Lorem ipsum dolor sit
                                            amet.lorem ipsum.
                                        </p>
                                    </div>
                                    <div class="article-meta">
                                        <span class="article-date">07-12-2024</span>
                                        <div class="featured-author">
                                            <span class="circle-icon">
                                                <img src="{{asset('images/Polygon 1.svg')}}" alt="" srcset="" /></span>
                                            <span class="featured-author-label name">Author: </span>
                                            <span class="name">Michael Chen</span>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{asset('images/blogs_card.png')}}" alt="Inspiration Article" class="article-image" />
                            </article>
                            <nav aria-label="Pagination" class="pagination-container">
                                <!-- Previous Button -->
                                <a href="#" class="pagination-link pagination-link-default pagination-link-disabled"
                                    aria-label="Previous page">
                                    <i class="fas fa-chevron-left"></i>
                                </a>

                                <!-- Page 1 -->
                                <a href="#" class="pagination-link pagination-link-active" data-page="1"
                                    aria-current="page">
                                    <span class="pagination-number pagination-number-active">1</span>
                                </a>

                                <!-- Page 2 -->
                                <a href="#" class="pagination-link pagination-link-default" data-page="2">
                                    <span class="pagination-number pagination-number-default">2</span>
                                </a>

                                <!-- Page 3 -->
                                <a href="#" class="pagination-link pagination-link-default" data-page="3">
                                    <span class="pagination-number pagination-number-default">3</span>
                                </a>

                                <!-- Dots -->
                                <span class="pagination-link pagination-link-dots">
                                    <span class="pagination-number pagination-number-default">...</span>
                                </span>

                                <!-- Page 99 -->
                                <a href="#" class="pagination-link pagination-link-default" data-page="99">
                                    <span class="pagination-number pagination-number-default">99</span>
                                </a>

                                <!-- Next Button -->
                                <a href="#" class="pagination-link pagination-link-default" aria-label="Next page">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>

                        <!-- Right Column - Popular Section -->
                        <div class="col-12 col-lg-4 mt-md-3">
                            <div class="popular-section">
                                <a href="Theme.html" class="popular-heading">Theme</a>
                                <!-- Popular Item 1 -->
                                <div class="popular-item">
                                    <a href="#" class="popular-title"> College Admission </a>
                                </div>
                                <!-- Popular Item 2 -->
                                <div class="popular-item">
                                    <a href="#" class="popular-title">
                                        International students
                                    </a>
                                </div>
                                <!-- Popular Item 3 -->
                                <div class="popular-item">
                                    <a href="#" class="popular-title"> Nursing students </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
