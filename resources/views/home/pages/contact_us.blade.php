@extends('home.layouts.app')
@section('title')
    <title>Academic Writing Services</title>
@endsection
@push('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
@endpush
@section('section')
    <div class="main-content">
        <div class="main-container">
            <section class="elite-about">
                <!-- Content -->
                <div class="elite-about__container">
                    <h1 class="elite-about__heading">Contact Us</h1>
                    <div class="elite-about__text">
                        At Elite Academic Expert, we are dedicated to providing you with
                        the support and guidance you need to achieve academic excellence.
                        Whether you have questions about our services, need assistance
                        with an ongoing project, or simply want to learn more about how we
                        can help you, our team is here to help.
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
            <!-- Contact Info Section -->
            <section class="contact-locations-block mt-5">
                <div class="container-fluid p-0">
                    <!-- Map Container -->
                    <div class="location-map-container">
                        <div id="contactLocationMap" class="interactive-map-canvas"></div>
                        <img src="{{asset('your-logo.png')}}" alt="Logo" class="map-overlay-logo" />
                    </div>

                    <!-- Contact Info Container -->
                    <div class="container">
                        <div class="contact-details-grid">
                            <!-- Office Address -->
                            <div class="contact-info-block">
                                <div class="info-icon-wrapper">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content-wrapper">
                                    <h3 class="info-block-heading">Office Address</h3>
                                    <p class="info-block-text">London, United Kingdom</p>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="contact-info-block">
                                <div class="info-icon-wrapper">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content-wrapper">
                                    <h3 class="info-block-heading">Email Address</h3>
                                    <p class="info-block-text">info@eliteacademicexpert.com</p>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="contact-info-block">
                                <div class="info-icon-wrapper">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info-content-wrapper">
                                    <h3 class="info-block-heading">Phone Number</h3>
                                    <p class="info-block-text">+44 7707 310958</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush
