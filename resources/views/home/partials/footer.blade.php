<footer class="footer-wrapper">
    <div class="container-fluid">
        <div class="d-flex flex-column align-items-center">
            <!-- Navigation -->
            <nav class="footer-nav-list">
                <a href="{{route('home')}}" class="footer-nav-link nav-link">Home</a>
                <a href="{{route('about.us')}}" class="footer-nav-link nav-link">About Us</a>
                <a href="{{route('our.services')}}" class="footer-nav-link nav-link">Services</a>
                <a href="{{route('our.writers')}}" class="footer-nav-link nav-link">Our Writers</a>
                <a href="{{route('samples')}}" class="footer-nav-link nav-link">Samples</a>
                <a href="{{route('free.topics')}}" class="footer-nav-link nav-link">Free Topics</a>
                <a href="{{route('blogs')}}" class="footer-nav-link nav-link">Blog</a>
                <a href="{{route('contact.us')}}" class="footer-nav-link nav-link">Contact</a>
            </nav>

            <!-- Banner Section -->
            <div class="footer-banner d-flex align-items-center justify-content-between w-100">
                <img src="{{asset('images/left image.png')}}" alt="Left Decoration" class="d-none d-md-block" />

                <div class="d-flex align-items-center gap-5 flex-wrap justify-content-center">
                    <img src="{{asset('images/logo.png')}}" alt="Company Logo" class="footer-logo" />

                    <div class="d-flex flex-column align-items-end gap-4">
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="{{route('order.index')}}" class="footer-cta-btn btn-order">Place Order</a>
                            <a href="{{route('home')}}" class="footer-cta-btn btn-consultation">Get Free Consultation</a>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="#" class="footer-social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="footer-social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="footer-social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <img src="{{('images/rigth image.png')}}" alt="Right Decoration" class="d-none d-md-block" />
            </div>

            <!-- Copyright -->
            <div class="footer-copyright">
                Copyright 2024 Elite Academic Expert - All right reserved.
            </div>
        </div>
    </div>
</footer>
