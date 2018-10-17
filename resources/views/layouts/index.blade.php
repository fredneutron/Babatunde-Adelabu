<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} :: @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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