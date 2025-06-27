<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('page-title') - {{ config('app.name', 'Elite Academic Expert') }}
    </title>
    @yield('descriptions')
    <!-- boostrape 5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- boostrape 5   -->
    <link rel="stylesheet" href="{{asset('auth-assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('auth-assets/css/reset.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />        
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    @stack('styles') <!-- For additional styles -->
</head>
<body>
    <div class="container text-center py-5">
        <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" alt="Logo" height="80" />
        </a>
    </div>
    @yield('content')
</body>
</html>