@extends('home.layouts.app')
@section('title')
    <title>Academic Writing Services</title>
@endsection
@section('section')
    <div class="main-content">
        <div class="main-container">
            <section class="elite-about">
                <!-- Content -->
                <div class="elite-about__container">
                    <h1 class="elite-about__heading">Free Topics</h1>
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
                        <a class="btn btn-orderss" href="{{ route('order.index') }}">Order now</a>
                    </div>
                </div>

                <!-- Right Decoration -->
                <div class="elite-about__decor-right">
                    <img style="
              padding-top: 10px;
              width: 143px;
              height: 270px;
              left: 157px;
              top: 241px;
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
            <section class="hero-sections mt-4">
                <div class="container px-0">
                    <div class="row g-4">
                        <!-- Topics List Column -->
                        <div class="col-lg-6">
                            <div class="contents-card topics-section">
                                <h2 class="topics-title">
                                    Best Topic Ideas and Examples for 2024
                                </h2>
                                <div class="topics-list">
                                    <div class="topic-item">
                                        <span class="topic-number">1.</span>
                                        <span class="topic-text">Impact of poverty on economic growth: A case of BRICS
                                            economies</span>
                                    </div>
                                    <div class="topic-item">
                                        <span class="topic-number">2.</span>
                                        <span class="topic-text">Understanding educational progression at the local
                                            level: A comparison of the North and South cities in the
                                            UK</span>
                                    </div>
                                    <div class="topic-item">
                                        <span class="topic-number">3.</span>
                                        <span class="topic-text">Analysing the effect of unemployment on GDP: A case of
                                            Asian companies</span>
                                    </div>
                                    <div class="topic-item">
                                        <span class="topic-number">4.</span>
                                        <span class="topic-text">How did Covid-19 has affected on the different economic
                                            activities of developed countries?</span>
                                    </div>
                                    <div class="topic-item">
                                        <span class="topic-number">5.</span>
                                        <span class="topic-text">Analyzing salary inequalities in the United Kingdom and
                                            the forces behind such inequalities? – A Critical
                                            analysis</span>
                                    </div>
                                    <div class="topic-item">
                                        <span class="topic-number">6.</span>
                                        <span class="topic-text">Impact of inflation and interest rates on economic
                                            growth and development: A case of UK</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Consultation Form Column -->
                        <div class="col-lg-6">
                            <div class="consultation-form">
                                <h2 class="form-heading">
                                    Get free consultancy from Dissertation Expert!
                                </h2>
                                <div class="form-wrapper">
                                    @include('home.partials.message')
                                    <form action="{{ route('request.consultancy') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">
                                                Full Name <span class="required-dot"></span>
                                            </label>
                                            <input name="name" type="text" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" />
                                            @error('name')
                                                <p class="mt-2 text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">
                                                    Email <span class="required-dot"></span>
                                                </label>
                                                <input name="email" type="email" class="form-control" placeholder="youremail@gmail.com" value="{{ old('email') }}" />
                                                @error('email')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">
                                                    Phone Number <span class="required-dot"></span>
                                                </label>
                                                <input name="phone" type="tel" class="form-control" placeholder="+44 XXXXXXXXXX" value="{{ old('phone') }}" />
                                                @error('phone')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
    
                                        <div class="mb-4">
                                            <label class="form-label">
                                                Message <span class="required-dot"></span>
                                            </label>
                                            <textarea name="message" class="form-control" rows="5" placeholder="Please let us know how we can help you.">{{ old('message') }}</textarea>
                                            @error('message')
                                                <p class="mt-2 text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
    
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-request">
                                                Request Information
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonial-section py-5">
                <div class="container">
                    <h2 class="section-title">Client Testimonials</h2>
                    <div class="testimonial-wrapper">
                        <div class="testimonial-cards">
                            <!-- Card 1 -->
                            <div class="testimonial-card">
                                <div class="profile-wrapper">
                                    <div class="profile-img"></div>
                                    <div class="status-badge" style="background: #1fd2f7">
                                        <img src="{{asset('images/tm.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id
                                    orci porta dapibus.
                                </div>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="author-info">
                                    <div class="author-name">Hannah Busing</div>
                                    <div class="author-position">Marketing manager & CEO</div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="testimonial-card">
                                <div class="profile-wrapper">
                                    <div class="profile-img"></div>
                                    <div class="status-badge" style="background: #25d366">
                                        <img src="{{asset('images/tm.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id
                                    orci porta dapibus.
                                </div>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="author-info">
                                    <div class="author-name">John Smith</div>
                                    <div class="author-position">Product Designer</div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="testimonial-card">
                                <div class="profile-wrapper">
                                    <div class="profile-img"></div>
                                    <div class="status-badge" style="background: #fe514f">
                                        <img src="{{asset('images/tm.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id
                                    orci porta dapibus.
                                </div>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="author-info">
                                    <div class="author-name">Sarah Johnson</div>
                                    <div class="author-position">Tech Lead</div>
                                </div>
                            </div>
                        </div>

                        <!-- Indicators -->
                        <div class="indicators">
                            <div class="indicator"></div>
                            <div class="indicator active"></div>
                            <div class="indicator"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blog-section">
                <div class="container">
                    <h2 class="blog-heading">Recent Blog Posts</h2>
                    <div class="row">
                        <!-- Blog Card 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card">
                                <img src="{{asset('images/blog.png')}}" alt="Blog Post 1" class="blog-image" />
                                <div class="blog-header">
                                    <h3 class="blog-title">Writing a Strong Academic</h3>
                                    <span class="blog-date">01-10-2024</span>
                                </div>
                                <p class="blog-description">
                                    An academic statement is an official document that comprises
                                    an individual's academic performance, area of study and or
                                    research, and academic plans for the future.
                                </p>
                                <a href="#" class="blog-read-more">Read More</a>
                            </div>
                        </div>

                        <!-- Blog Card 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card">
                                <img src="{{asset('images/blog.png')}}" alt="Blog Post 2" class="blog-image" />
                                <div class="blog-header">
                                    <h3 class="blog-title">Writing a Strong Academic</h3>
                                    <span class="blog-date">01-10-2024</span>
                                </div>
                                <p class="blog-description">
                                    An academic statement is an official document that comprises
                                    an individual's academic performance, area of study and or
                                    research, and academic plans for the future.
                                </p>
                                <a href="#" class="blog-read-more">Read More</a>
                            </div>
                        </div>

                        <!-- Blog Card 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card">
                                <img src="{{asset('images/blog.png')}}" alt="Blog Post 3" class="blog-image" />
                                <div class="blog-header">
                                    <h3 class="blog-title">Writing a Strong Academic</h3>
                                    <span class="blog-date">01-10-2024</span>
                                </div>
                                <p class="blog-description">
                                    An academic statement is an official document that comprises
                                    an individual's academic performance, area of study and or
                                    research, and academic plans for the future.
                                </p>
                                <a href="#" class="blog-read-more">Read More</a>
                            </div>
                        </div>

                        <!-- Blog Card 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card">
                                <img src="{{asset('images/blog.png')}}" alt="Blog Post 4" class="blog-image" />
                                <div class="blog-header">
                                    <h3 class="blog-title">Writing a Strong Academic</h3>
                                    <span class="blog-date">01-10-2024</span>
                                </div>
                                <p class="blog-description">
                                    An academic statement is an official document that comprises
                                    an individual's academic performance, area of study and or
                                    research, and academic plans for the future.
                                </p>
                                <a href="#" class="blog-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
