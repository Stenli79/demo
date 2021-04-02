<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('images/favicon.png') }}" rel="icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Stylesheet
============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
    <div id="preloader">
        <div data-loader="dual-ring"></div>
    </div>
    <div id="app">

        @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>

</body>
</html>
