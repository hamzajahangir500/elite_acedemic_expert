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
                    <h1 class="elite-about__heading">Services</h1>
                    <div class="elite-about__text">
                        At The Dissertation Service, we offer a wide range of academic
                        writing services designed to help you succeed in your academic
                        journey. Our expert team is here to provide you with high-quality,
                        personalized support at every stage of your academic career.
                        <br /><br />
                        interested in working with us?
                    </div>
                    <div>
                        <a href="{{route('order.index')}}" class="btn btn-order btn-primary-custom">Order now</a>
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
                        src="{{ asset('images/p1.png') }}" />
                    <img style="
              width: 143px;
              height: 220px;
              left: 0px;
              top: 413px;
              position: absolute;
              background: #20d0f6;
              border-radius: 100px;
            "
                        src="{{ asset('images/p3.png') }}" />
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
                        src="{{ asset('images/p2.png') }}" />
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
                                        <img src="{{ asset('images/pen-tool-03.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/1st-bracket.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/course.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c4.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c5.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c6.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c7.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c8.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c9.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c10.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c11.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/c12.svg') }}" alt="" />
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
            <section class="steps py-5">
                <div class="container">
                    <div class="section-header text-center mb-5">
                        <h2 class="title">How It Works</h2>
                    </div>
                    <p class="mb-5 text-para">
                        Experience the difference with The Dissertation Service. Contact
                        us today to learn more about our services and how we can help you
                        achieve academic excellence.
                    </p>
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-card">
                                <div class="icon-wrapper d-flex w-100 align-items-center">
                                    <img src="{{ asset('images/01.svg') }}" alt="" />
                                    <h3 class="card-heading">Expert Writers</h3>
                                </div>
                                <div class="card-content">
                                    <p class="card-text">
                                        Professional academic writers with extensive experience in
                                        research and writing across various disciplines.
                                    </p>
                                </div>
                                <div class="card-number">1</div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-card">
                                <div class="icon-wrapper d-flex w-100 align-items-center">
                                    <img src="{{ asset('images/01.svg') }}" alt="" />
                                    <h3 class="card-heading">24/7 Support</h3>
                                </div>
                                <div class="card-content">
                                    <p class="card-text">
                                        Round-the-clock customer service to assist you with any
                                        questions or concerns about your project.
                                    </p>
                                </div>
                                <div class="card-number">2</div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-card">
                                <div class="icon-wrapper d-flex w-100 align-items-center">
                                    <img src="{{ asset('images/01.svg') }}" alt="" />
                                    <h3 class="card-heading">Quality Assurance</h3>
                                </div>
                                <div class="card-content">
                                    <p class="card-text">
                                        Rigorous quality control process to ensure your work meets
                                        the highest academic standards.
                                    </p>
                                </div>
                                <div class="card-number">3</div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-card">
                                <div class="icon-wrapper d-flex w-100 align-items-center">
                                    <img src="{{ asset('images/01.svg') }}" alt="" />
                                    <h3 class="card-heading">Timely Delivery</h3>
                                </div>
                                <div class="card-content">
                                    <p class="card-text">
                                        Guaranteed on-time delivery for all projects, no matter
                                        how tight the deadline may be.
                                    </p>
                                </div>
                                <div class="card-number">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="academic-section py5">
                <div class="row align-items-center">
                    <div class="col-lg-6 ps-0">
                        <img src="{{ asset('images/left_isde_image.png') }}" alt="Academic Samples"
                            class="section-image" />
                    </div>
                    <div class="col-lg-6">
                        <div class="content-wrappers">
                            <h2 class="section-titles">Have a look at our samples</h2>
                            <p class="section-description">
                                Curious about the caliber of our work? Browse our extensive
                                collection of sample dissertations, theses, research papers,
                                and essays. Each sample showcases our commitment to
                                excellence, meticulous research, and superior writing skills.
                                See firsthand the high standards and attention to detail that
                                set The Dissertation Service apart. Let our samples inspire
                                confidence in our ability to deliver exceptional academic
                                content tailored to your needs.
                            </p>
                            <div class="buttons-wrapper">
                                <a href="{{route('order.index')}}" class="btn btn-order btn-primary-custom">Order now</a>
                                <a href="{{route('samples')}}" class="btn btn-orders btn-outline-custom">View all Sample</a>
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
                                        <img src="{{ asset('images/tm.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/tm.svg') }}" alt="" />
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
                                        <img src="{{ asset('images/tm.svg') }}" alt="" />
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
                                <img src="{{ asset('images/blog.png') }}" alt="Blog Post 1" class="blog-image" />
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
                                <img src="{{ asset('images/blog.png') }}" alt="Blog Post 2" class="blog-image" />
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
                                <img src="{{ asset('images/blog.png') }}" alt="Blog Post 3" class="blog-image" />
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
                                <img src="{{ asset('images/blog.png') }}" alt="Blog Post 4" class="blog-image" />
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
