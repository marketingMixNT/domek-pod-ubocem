<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Domek Pod Ubocom')</title>
    <meta name="description" content='@yield('description')'>
    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!--Favicons-->
    @include('partials.favicon')
    <!--Facebook Meta-->
    <!--Fonts-->
    @include('partials.fonts')
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

{{-- <body class="overflow-x-hidden"> --}}

<body>

    {{-- <!--NAVIGATION-->
    @include('shared.nav.top-bar')
    @include('shared.nav.nav-bar')
    @include('shared.nav.mobile-menu')
    <!--PRELOADER-->
    @include('shared.preloader')

    <div> --}}

    {{ $slot }}
    <!--FOOTER-->

    @include('shared.footer')
    {{-- </div>

    
    @include('shared.mobile-buttons') --}}

    <!--SCRIPTS-->
    {{-- <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script> --}}



</body>

</html>
