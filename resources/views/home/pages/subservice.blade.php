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
                    <h1 class="elite-about__heading">Dissertation Writing Service​</h1>
                    <div class="elite-about__text"></div>
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
            <section class="uk-dissertation-section my-4">
                <div class="uk-dissertation-banner">
                    <img src="{{asset('images/blogs_card.png')}}" alt="Dissertation Writing Service Banner" />
                </div>

                <div class="uk-dissertation-content">
                    <h1 class="uk-dissertation-heading">
                        A High-Quality Dissertation Writing Service in London, UK, to Help You Achieve Academic
                        Excellence
                    </h1>

                    <p class="uk-dissertation-text">
                        Dissertation writing is challenging for any student, whether you are pursuing an Undergraduate,
                        Master or PhD degree. It requires a lot of research work, analysis, and brainstorming even
                        before you actually start writing which of course needs a lot of time and effort. It becomes
                        even harder when you have a job or other commitments to balance. But you don't have to struggle
                        alone WHEN The Academic Papers UK is here to offer the best dissertation writing services.
                        Unlike other websites that overcharge students for poor-quality work, The Academic Papers UK
                        offers more bang for your buck. We have a proven record of delivering high-quality dissertations
                        that meet academic standards. That's why 99% of our customers are happy and recommend us to
                        others. So, make the wise decision and let a professional dissertation writer from our team help
                        you earn your degree with distinction!
                    </p>
                </div>
            </section>
            <section class="features-showcase my-4 mt-5">
                <div class="container">
                    <!-- First Row - Image Left -->
                    <div class="showcase-row">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="showcase-image">
                                    <img src="{{asset('images/blogs_card.png')}}" alt="Showcase 1" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="showcase-content">
                                    <div class="content-header text-center text-lg-start">
                                        <h2 class="showcase-title">Since 2003</h2>
                                        <p class="showcase-subtitle">
                                            Flawless Dissertation Writing Service Help
                                        </p>
                                    </div>
                                    <div class="feature-list">
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">50 Millions Customers Worldwide</span>
                                        </div>
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">2000+ Subjects Experts</span>
                                        </div>
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">153K+ Completed Orders</span>
                                        </div>
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">99.99% Satisfaction</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Row - Image Right -->
                    <div class="showcase-row">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="showcase-image">
                                    <img src="images/blogs_card.png" alt="Showcase 2" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="showcase-content">
                                    <div class="content-header text-center text-lg-start">
                                        <h2 class="showcase-title">Since 2003</h2>
                                        <p class="showcase-subtitle">
                                            Flawless Dissertation Writing Service Help
                                        </p>
                                    </div>

                                    <div class="feature-list">
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">50 Millions Customers Worldwide</span>
                                        </div>
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">2000+ Subjects Experts</span>
                                        </div>
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">153K+ Completed Orders</span>
                                        </div>
                                        <div class="feature-item">
                                            <div class="feature-icon">
                                                <img src="{{asset('images/checkmark.svg')}}" alt="" srcset="">
                                            </div>
                                            <span class="feature-text">99.99% Satisfaction</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="dissertation-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="dissertation-title">
                                Why Choose Us for Dissertation Writing Help Online?
                            </h2>

                            <div class="stats-container">
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                    <div class="stat-text">50 Millions Customers Worldwide</div>
                                </div>

                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                    <div class="stat-text">2000+ Subjects Experts</div>
                                </div>

                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                    <div class="stat-text">153K+ Completed Orders</div>
                                </div>

                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                    <div class="stat-text">99.99% Satisfaction</div>
                                </div>
                            </div>

                            <p class="dissertation-description">
                                Choosing the right person whom you "can pay to write a dissertation" is vital. There are
                                a lot of dissertation writing agencies claiming to be the best, but The Academic Papers
                                is the name of the trust that students have for sound reasons. We have discussed this in
                                detail in the sections below. However, it is mainly our utmost honesty and passion to
                                achieve 100% client satisfaction. Let's dig into the key reasons behind students' craze
                                for our tailored "dissertation writing services".
                            </p>
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
                                    <img src="images/01.svg" alt="" />
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
                                    <img src="images/01.svg" alt="" />
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
                                    <img src="images/01.svg" alt="" />
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
                                    <img src="images/01.svg" alt="" />
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
            <section class="academic-section">
                <div class="row align-items-center">
                    <div class="col-lg-6 ps-0 ">
                        <img src="images/left_isde_image.png" alt="Academic Samples" class="section-image" />
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
                            <img src="images/rocket.svg" alt="Feature 1" class="academic-icon" />
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
                            <img src="images/file-validation.svg" alt="Feature 2" class="academic-icon" />
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
                            <img src="images/user-switch.svg" alt="Feature 3" class="academic-icon" />
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
                            <img src="images/dollar-circle.svg" alt="Feature 4" class="academic-icon" />
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
                                        <img src="images/tm.svg" alt="" />
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
                                        <img src="images/tm.svg" alt="" />
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
                                        <img src="images/tm.svg" alt="" />
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
