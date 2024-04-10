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

<body class="overflow-x-hidden">




    {{ $slot }}
    <!--FOOTER-->
    @include('shared.footer')




</body>

</html>
