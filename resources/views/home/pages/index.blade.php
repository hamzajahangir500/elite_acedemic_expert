@extends('home.layouts.app')
@section('title')
  <title>Academic Writing Services</title>
@endsection
@section('section')
    <div class="main-content">
        <div class="main-container">
            <section class="hero-section">
                <div class="container-fluid px-0">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="content-card">
                                <div class="center_alingment">
                                    <h1 class="hero-title">
                                        <span style="animation-delay: 0s">Academic</span>
                                        <span style="animation-delay: 0.5s">Excellence</span>
                                        <span style="animation-delay: 1s">with</span>
                                        <br />
                                        <span style="animation-delay: 1.5s">Expert</span>
                                        <span style="animation-delay: 2s">Writing</span>
                                    </h1>
                                    <p class="hero-description">
                                        Unlock your academic potential with our top-tier
                                        dissertation and academic writing services. Expert
                                        writers, personalized solutions, and guaranteed
                                        originality—everything you need to succeed
                                    </p>
                                    <a class="btn btn-orderss" href="{{ route('order.index') }}">Order now</a>
                                </div>
                                <img src="{{asset('images/hero_images.png')}}" class="hero-image" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-card">
                                <div class="shape-bg">
                                    <div class="shape-1"></div>
                                    <div class="shape-2"></div>
                                    <div class="shape-3"></div>
                                </div>
                                <h2 class="form-title">
                                    Get free consultancy from Dissertation Expert!
                                </h2>
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
            </section>
            <section class="academic-journey py-5">
                <div class="container">
                    <div class="journey-card">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="image-wrapper">
                                    <img src="{{asset('images/left.svg')}}" alt="Academic Service"
                                        class="img-fluid rounded-4 main-image" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-wrapper">
                                    <div class="text-content mb-4">
                                        <h2 class="section-titles mb-3">
                                            Ace Your Academic Journey with Expert Writing Services
                                        </h2>
                                        <p class="section-description">
                                            Struggling with your academic papers? Whether it's an
                                            urgent coursework assignment or a complex dissertation,
                                            "The Dissertation Service" is here to help you shine!
                                            Our team of highly qualified, UK-based writers is
                                            dedicated to crafting top-notch academic papers tailored
                                            to your needs.
                                        </p>
                                    </div>
                                    <a class="btn btn-orderss" href="{{route('order.index')}}">Order now</a>
                                </div>
                            </div>
                        </div>
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
                                        <img src="{{asset(('images/1st-bracket.svg'))}}" alt="" />
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
                                        <img src="{{asset(('images/c4.svg'))}}" alt="" />
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
            <section class="why-choose-section py-5">
                <div class="container">
                    <div class="section-header text-center mb-5">
                        <h2 class="title">Why Choose Us</h2>
                    </div>

                    <div class="content-wrapper">
                        <div class="highlight-box mb-4">
                            <div class="row g-4">
                                <!-- First Column -->
                                <div class="col-lg-6">
                                    <div class="info-card">
                                        <h4 class="info-title">Late-Night Crunch?</h4>
                                        <p class="info-text">
                                            It's 2:30 AM, and your coursework is due tomorrow. With
                                            a part-time job and a mountain of responsibilities,
                                            you're in a tight spot. Don't worry – our expert writers
                                            can step in to deliver high-quality work, ensuring you
                                            meet that deadline with ease.
                                        </p>
                                    </div>
                                </div>

                                <!-- Second Column -->
                                <div class="col-lg-6">
                                    <div class="info-card">
                                        <h4 class="info-title">Dissertation Dilemma?</h4>
                                        <p class="info-text">
                                            Graduate students, we understand the pressure of
                                            managing your dissertation. With research, data
                                            gathering, and formatting requirements, it's easy to
                                            feel overwhelmed. Our specialists can handle the heavy
                                            lifting, delivering a polished dissertation that meets
                                            all your academic requirements.
                                        </p>
                                    </div>
                                </div>

                                <!-- Full Width Bottom -->
                                <div class="col-12">
                                    <div class="info-card-large">
                                        <h3 class="large-title">PhD Thesis Blues?</h3>
                                        <p class="large-text">
                                            Facing a tight deadline for your PhD thesis? You've been
                                            working tirelessly but still have miles to go. Our
                                            dedicated PhD writing service will upport you in meeting
                                            your professor's high standards, ensuring your thesis is
                                            well-crafted and ready on time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-message text-center">
                            At "The Dissertation Service," we're committed to delivering
                            exceptional content without compromising quality. Say goodbye to
                            academic stress and let us help you achieve your academic goals
                            with confidence!
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
                                    <img src="{{asset('images/01.svg')}}" alt="" />
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
                                    <img src="{{asset('images/01.svg')}}" alt="" />
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
                                    <img src="{{('images/01.svg')}}" alt="" />
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
                                    <img src="{{asset('images/01.svg')}}" alt="" />
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

            <section class="discount-wrapper py-5">
                <div class="container">
                    <!-- Header Section -->
                    <div class="discount-header">
                        <h2 class="main-heading">
                            Exclusive Discounts to Kickstart Your Academic Success
                        </h2>
                        <p class="sub-heading">
                            At "The Dissertation Service," we're excited to offer you
                            fantastic savings to help you get started on your academic
                            journey. Take advantage of our special discounts and get
                            high-quality writing services at unbeatable prices!
                        </p>
                    </div>

                    <!-- Cards Container -->
                    <div class="discount-container row g-4">
                        <!-- Card 1 -->
                        <div class="col-lg-4">
                            <div class="discount-box">
                                <div class="discount-icon-wrapper">
                                    <img src="{{asset('images/Star .svg')}}" alt="discount icon" />
                                    <div class="discount-percentage">30%</div>
                                </div>
                                <h3 class="box-title">First Order Special</h3>
                                <p class="box-description">
                                    It's our way of welcoming you and helping you experience
                                    top-notch academic writing support from the start.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-4">
                            <div class="discount-box">
                                <div class="discount-icon-wrapper">
                                    <img src="{{asset('images/Star .svg')}}" alt="discount icon" />
                                    <div class="discount-percentage">10%</div>
                                </div>
                                <h3 class="box-title">Short Savings</h3>
                                <p class="box-description">
                                    Have a smaller assignment? Get off on orders with fewer than
                                    5,000 words. Perfect for essays, short reports, or
                                    coursework assignments that need a professional touch.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-4">
                            <div class="discount-box">
                                <div class="discount-icon-wrapper">
                                    <img src="{{asset('images/Star .svg')}}" alt="discount icon" />
                                    <div class="discount-percentage">15%</div>
                                </div>
                                <h3 class="box-title">Extensive Discount</h3>
                                <p class="box-description">
                                    Receive off on orders exceeding 10,000 words. Ideal for
                                    comprehensive dissertations, in-depth research papers, and
                                    extensive theses.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="academic-section">
                <div class="row align-items-center">
                    <div class="col-lg-6 ps-0">
                        <img src="{{asset('images/left_isde_image.png')}}" alt="Academic Samples" class="section-image" />
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
                                <a href="{{ route('order.index') }}" class="btn btn-order btn-primary-custom">Order now</a>
                                <a href="{{ route('samples') }}" class="btn btn-orders btn-outline-custom">View all Sample</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="academic-features-wrapper">
                <div class="container">
                    <h2 class="academic-main-title mb-4">
                        Commitment to Excellence in Every Academic Project
                    </h2>
                    <p class="academic-subtitle">
                        At "The Dissertation Service," we are dedicated to delivering
                        exceptional quality across all types of academic writing projects.
                        Here's how we ensure your satisfaction:
                    </p>

                    <div class="academic-cards-container">
                        <div class="academic-service-card">
                            <img src="{{asset('images/rocket.svg')}}" alt="Feature 1" class="academic-icon" />
                            <div>
                                <h3 class="academic-card-title">Heading</h3>
                                <p class="academic-card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                            </div>
                        </div>

                        <div class="academic-service-card">
                            <img src="{{asset('images/file-validation.svg')}}" alt="Feature 2" class="academic-icon" />
                            <div>
                                <h3 class="academic-card-title">Heading</h3>
                                <p class="academic-card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                            </div>
                        </div>

                        <div class="academic-service-card">
                            <img src="{{(asset('images/user-switch.svg'))}}" alt="Feature 3" class="academic-icon" />
                            <div>
                                <h3 class="academic-card-title">Heading</h3>
                                <p class="academic-card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                            </div>
                        </div>

                        <div class="academic-service-card">
                            <img src="{{asset('images/dollar-circle.svg')}}" alt="Feature 4" class="academic-icon" />
                            <div>
                                <h3 class="academic-card-title">Heading</h3>
                                <p class="academic-card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonial-section">
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

            <section class="faq-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="faq-title">Frequently Asked Questions</h2>
                            <div class="faq-description">
                                Our FAQ section is designed to address the most common
                                inquiries and provide you with clear, concise information
                                about our services. Here, you'll find answers to questions
                                about the types of academic writing services we offer, how to
                                place an order, the qualifications of our writers, and more.
                                We've compiled this information to help you understand how
                                "The Dissertation Service" works and ensure a smooth and
                                satisfactory experience.
                                <br /><br />
                                If you have any additional questions or need further
                                clarification, please don't hesitate to contact us. Our team
                                is always here to assist you and provide the support you need
                                to achieve your academic goals.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="faq-question">
                                        What types of academic writing services do you offer?
                                    </p>
                                    <button class="faq-toggle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="faq-answer">
                                    We offer a comprehensive range of academic writing services
                                    including:
                                    <ul>
                                        <li>Dissertations and thesis writing</li>
                                        <li>Research papers and essays</li>
                                        <li>Literature reviews</li>
                                        <li>Case studies and analysis</li>
                                        <li>Research proposals</li>
                                        <li>Statistical analysis and data interpretation</li>
                                    </ul>
                                    All our services are customized to meet your specific
                                    requirements and academic level.
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="faq-question">
                                        How can I place an order with "The Dissertation Service"?
                                    </p>
                                    <button class="faq-toggle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="faq-answer">
                                    Placing an order is simple and straightforward:
                                    <ol>
                                        <li>Fill out our online order form</li>
                                        <li>Provide detailed requirements and attachments</li>
                                        <li>Review the quote and make payment</li>
                                        <li>Get matched with a qualified writer</li>
                                        <li>Receive regular updates and drafts</li>
                                    </ol>
                                    Our support team is available 24/7 to assist you throughout
                                    the process.
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="faq-question">
                                        What qualifications do your writers have?
                                    </p>
                                    <button class="faq-toggle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="faq-answer">
                                    Our writers are highly qualified professionals with advanced
                                    degrees (Master's and Ph.D.) from prestigious universities.
                                    They undergo rigorous screening and testing before joining
                                    our team. Each writer specializes in specific academic
                                    fields, ensuring expert knowledge in your subject area. We
                                    regularly evaluate their performance and maintain high
                                    standards for quality and professionalism.
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="faq-question">
                                        How do you ensure the originality of the work?
                                    </p>
                                    <button class="faq-toggle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="faq-answer">
                                    We have a strict originality policy and multiple quality
                                    control measures:
                                    <ul>
                                        <li>Every paper is written from scratch</li>
                                        <li>Multiple plagiarism detection tools are used</li>
                                        <li>Quality assurance team reviews each document</li>
                                        <li>Originality reports are available upon request</li>
                                        <li>Strict confidentiality and privacy policies</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="faq-question">
                                        What if I need revisions on my paper?
                                    </p>
                                    <button class="faq-toggle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="faq-answer">
                                    We offer a comprehensive revision policy to ensure your
                                    complete satisfaction:
                                    <ul>
                                        <li>Free revisions within the first 30 days</li>
                                        <li>Quick turnaround on revision requests</li>
                                        <li>Direct communication with your writer</li>
                                        <li>Detailed feedback consideration</li>
                                        <li>Quality guarantee on all revisions</li>
                                    </ul>
                                    Simply submit your revision request with specific comments,
                                    and we'll make the necessary changes promptly.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
