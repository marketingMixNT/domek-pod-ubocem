<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/4770a11d5fee13c368201a62/script.js"></script> --}}
    <!-- Start cookieyes banner --> <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/f1899388d2993f82f15a0e13/script.js"></script> <!-- End cookieyes banner -->

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSKPCRGB');</script>
    <!-- End Google Tag Manager -->

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
    @include('partials.facebook_meta')
    <!--Fonts-->
    @include('partials.fonts')
    <!--Fonts-->
    @include('partials.schema')
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="overflow-x-hidden">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSKPCRGB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    @include('shared.mobile_buttons')
    {{ $slot }}
    <!--FOOTER-->
    @include('shared.footer')




</body>

</html>
