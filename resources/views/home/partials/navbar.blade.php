<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="navbar container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/logo.png')}}" alt="Logo" height="56" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.us')}}">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('our.services')}}" role="button"
                        data-bs-toggle="dropdown">
                        Services
                        <i class="fas fa-chevron-down chevron-icon"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('subservice')}}">Dissertation Writing</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Essay Writing</a></li>
                        <li><a class="dropdown-item" href="#">Research Paper</a></li>
                        <li><a class="dropdown-item" href="#">Thesis Writing</a></li>
                        <li><a class="dropdown-item" href="#">Assignment Help</a></li>
                        <li><a class="dropdown-item" href="#">Coursework Help</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Term Paper Writing</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Case Study Writing</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Literature Review</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('our.writers')}}">Our Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('samples')}}">Samples</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('free.topics')}}">Free Topics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.us')}}">Contact</a>
                </li>
                {{-- <li class="nav-item ms-4">
                    <button class="btn btn-submit">Submit</button>
                </li> --}}
                @if(auth()->user() == null)
                    <li class="nav-item ms-4">
                        <a class="" href="{{route('login')}}" title="Login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-fill ml-4" viewBox="0 0 16 16">
                                <path fill="#3d3d3d" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </a>
                    </li>
                @else
                <li class="nav-item ms-4">
                    <a class="btn btn-submit" href="{{route('user.account')}}">My Account</a>
                </li>
                    <li class="nav-item ms-4">
                        <form id="logout" method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="btn" onclick="logOut(event)">Logout</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@push('scripts')
    <script>
        function logOut(event) {
            event.preventDefault();
            document.getElementById('logout').submit(); // Submit the form
        }
    </script>
@endpush
