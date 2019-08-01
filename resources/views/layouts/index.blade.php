<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google site verification -->
    <meta name="google-site-verification" content="4MZL6YqXGNQEscwt0tpwg8yoVf0DCD6trOPZrG3U5mI" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} :: @yield('title')</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/9cb8c1e776.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    @yield('head')
</head>
<body>
<?php
    use \App\Helpers\Helper;
    $nav = Helper::getNavigation();
    $social = Helper::getSocial();
?>
<div id="app">
    <nav-bar
        active='@yield("title")'
        topic="{{ config('app.name') }}"
        favicon="{{ asset('images/favicon.png') }}"
        :navigation='@json($nav)'
    >
    </nav-bar>
    @yield('content')
    <foot :nav='@json($nav)'
          :social='@json($social)'>
    </foot>
</div>
</body>
</html>
