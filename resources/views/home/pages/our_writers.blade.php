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
                    <h1 class="elite-about__heading">Our Writers</h1>
                    <div class="elite-about__text">
                        Welcome to The Dissertation Service, your trusted partner in
                        academic success. We are a dedicated team of experienced writers,
                        editors, and academic professionals committed to helping students
                        and researchers achieve their academic goals. With a passion for
                        excellence and a focus on delivering high-quality, personalized
                        academic writing services, we have established ourselves as a
                        leading provider in the industry.
                        <br /><br />
                        interested in working with us as?.
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
            <section class="writers-section py-5">
                <div class="container">
                    <div class="section-header text-center mb-5">
                        <h3 class="subtitle">Hire Writers</h3>
                        <h2 class="title">Meet Our Expert Writers</h2>
                    </div>

                    <div class="carousel-container">
                        <div class="row g-4 carousel-slides">
                            <!-- Writer Card 1 -->
                            <div class="col-lg-4 carousel-slide">
                                <div class="writer-card">
                                    <div class="writer-image">
                                        <img src="{{asset('images/blogs_card.png')}}" alt="Writer profile" />
                                    </div>
                                    <div class="writer-info">
                                        <h4 class="writer-name">Mr. Damiel kim</h4>
                                        <p class="writer-specialization">
                                            Specialization: History & Culture
                                        </p>
                                        <p class="writer-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna. Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed do eiusmod tempor incididunt
                                        </p>
                                    </div>
                                    <button class="hire-button">Hire Writer</button>
                                </div>
                            </div>

                            <!-- Writer Card 2 -->
                            <div class="col-lg-4 carousel-slide">
                                <div class="writer-card">
                                    <div class="writer-image">
                                        <img src="{{asset('images/blogs_card.png')}}" alt="Writer profile" />
                                    </div>
                                    <div class="writer-info">
                                        <h4 class="writer-name">Mr. Damiel kim</h4>
                                        <p class="writer-specialization">
                                            Specialization: History & Culture
                                        </p>
                                        <p class="writer-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna. Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed do eiusmod tempor incididunt
                                        </p>
                                    </div>
                                    <button class="hire-button">Hire Writer</button>
                                </div>
                            </div>

                            <!-- Writer Card 3 -->
                            <div class="col-lg-4 carousel-slide">
                                <div class="writer-card">
                                    <div class="writer-image">
                                        <img src="/images/blogs_card.png" alt="Writer profile" />
                                    </div>
                                    <div class="writer-info">
                                        <h4 class="writer-name">Mr. Damiel kim</h4>
                                        <p class="writer-specialization">
                                            Specialization: History & Culture
                                        </p>
                                        <p class="writer-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna. Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed do eiusmod tempor incididunt
                                        </p>
                                    </div>
                                    <button class="hire-button">Hire Writer</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagination-dots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                        <span class="dot" data-index="3"></span>
                        <span class="dot" data-index="4"></span>
                        <span class="dot" data-index="5"></span>
                    </div>
                </div>
            </section>
            <section class="academic-services py-5">
                <div class="container">
                    <h1 class="academic_service_heading">
                        What service we are providing?
                    </h1>
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-lg-4">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/pen-tool-03.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Dissertation Writing</h3>
                                    <p class="service-description">
                                        From topic selection to final submission, our expert
                                        writers guide you through every step of the dissertation
                                        writing process, ensuring a well-researched and
                                        well-structured dissertation that meets your academic
                                        requirements.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/1st-bracket.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Thesis Writing</h3>
                                    <p class="service-description">
                                        Our experienced writers provide comprehensive thesis
                                        writing support, from conceptualization to final defense
                                        preparation, helping you create a compelling and
                                        academically sound thesis.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/course.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Research Paper</h3>
                                    <p class="service-description">
                                        Get expert assistance with your research papers from our
                                        qualified writers who excel in conducting thorough
                                        research, analysis, and presenting findings in a clear,
                                        academic format.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <!-- Card 1 -->
                        <div class="col-lg-4">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c4.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Dissertation Writing</h3>
                                    <p class="service-description">
                                        From topic selection to final submission, our expert
                                        writers guide you through every step of the dissertation
                                        writing process, ensuring a well-researched and
                                        well-structured dissertation that meets your academic
                                        requirements.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c5.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Thesis Writing</h3>
                                    <p class="service-description">
                                        Our experienced writers provide comprehensive thesis
                                        writing support, from conceptualization to final defense
                                        preparation, helping you create a compelling and
                                        academically sound thesis.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c6.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Research Paper</h3>
                                    <p class="service-description">
                                        Get expert assistance with your research papers from our
                                        qualified writers who excel in conducting thorough
                                        research, analysis, and presenting findings in a clear,
                                        academic format.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <!-- Card 1 -->
                        <div class="col-lg-4">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c7.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Dissertation Writing</h3>
                                    <p class="service-description">
                                        From topic selection to final submission, our expert
                                        writers guide you through every step of the dissertation
                                        writing process, ensuring a well-researched and
                                        well-structured dissertation that meets your academic
                                        requirements.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c8.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Thesis Writing</h3>
                                    <p class="service-description">
                                        Our experienced writers provide comprehensive thesis
                                        writing support, from conceptualization to final defense
                                        preparation, helping you create a compelling and
                                        academically sound thesis.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c9.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Research Paper</h3>
                                    <p class="service-description">
                                        Get expert assistance with your research papers from our
                                        qualified writers who excel in conducting thorough
                                        research, analysis, and presenting findings in a clear,
                                        academic format.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <!-- Card 1 -->
                        <div class="col-lg-4">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c10.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Dissertation Writing</h3>
                                    <p class="service-description">
                                        From topic selection to final submission, our expert
                                        writers guide you through every step of the dissertation
                                        writing process, ensuring a well-researched and
                                        well-structured dissertation that meets your academic
                                        requirements.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c11.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Thesis Writing</h3>
                                    <p class="service-description">
                                        Our experienced writers provide comprehensive thesis
                                        writing support, from conceptualization to final defense
                                        preparation, helping you create a compelling and
                                        academically sound thesis.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-4 mt-4 mt-md-0">
                            <div class="service-card">
                                <div class="icon-container">
                                    <div class="icon-wrapper">
                                        <img src="{{asset('images/c12.svg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Research Paper</h3>
                                    <p class="service-description">
                                        Get expert assistance with your research papers from our
                                        qualified writers who excel in conducting thorough
                                        research, analysis, and presenting findings in a clear,
                                        academic format.
                                    </p>
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
