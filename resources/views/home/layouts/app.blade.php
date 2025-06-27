<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @yield('title')
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
        @stack('styles') <!-- For additional styles -->
    </head>
    <body>
        @include('home.partials.navbar')
        @yield('section')
        @include('home.partials.footer')
        <!-- WhatsApp Button -->
        <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
            <span class="whatsapp-text">Chat with us</span>
        </a>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
        @stack('scripts') <!-- For additional scripts -->
    </body>

</html>
