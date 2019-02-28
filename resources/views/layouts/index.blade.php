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
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="{{ secure_asset('js/script.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon.png') }}">

    <!-- Styles -->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<?php
    use \App\Helpers\Helper;
    $nav = [
        [
            'name' => 'Home',
            'url' =>  '/.'
        ],
        [
            'name' => 'Projects',
            'url' => '/Projects'
        ],
        [
            'name' => 'CV',
            'url' => '/Resume'
        ],
        [
            'name' => 'Contact',
            'url' => '/Contact'
        ]
    ];
?>
<div id="app">
    <Navbar topic="{{ config('app.name') }}"
            favicon="images/favicon.png"
            :navigation='@json($nav)'>
    </Navbar>

    @yield('content')

    <foot :nav='@json($nav)'
          :social='@json(Helper::getSocial())'>
    </foot>
</div>
</body>
</html>
