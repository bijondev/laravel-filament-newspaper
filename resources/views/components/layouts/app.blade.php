<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('keywords', 'lifestyleboosthq.xyz')">
    <meta name="description" content="@yield('description', 'lifestyleboosthq.xyz')">
    <title>@yield('title', 'lifestyleboosthq.xyz')</title>
    <link rel="icon" type="image/x-icon" href="{{ url('/favicon.ico') }}">
    <!--  Essential META Tags -->
    <meta property="og:title" content="@yield('title', 'lifestyleboosthq.xyz')">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="@yield('image', 'lifestyleboosthq.xyz')">
    <meta property="og:url" content="@yield('url', 'lifestyleboosthq.xyz')">
    <meta name="twitter:card" content="@yield('description', 'lifestyleboosthq.xyz')">

    <!--  Non-Essential, But Recommended -->
    <meta property="og:description" content="@yield('description', 'lifestyleboosthq.xyz')">
    <meta property="og:site_name" content='lifestyleboosthq.xyz'>
    <meta name="twitter:image:alt" content=@yield('title', 'lifestyleboosthq.xyz' )>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireStyles
</head>

<body>
    @livewire('partials.header')
    <main>
        {{ $slot }}
    </main>
    @livewire('partials.footer')
    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <!-- <script src="{{ asset('assets/js/gijgo.min.js') }}"></script> -->
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script> -->

    <!-- Breaking New Pluging -->
    <script src="{{ asset('assets/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('assets/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <!-- <script src="{{ asset('assets/js/contact.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery.form.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/mail-script.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script> -->

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts
</body>


</html>
