<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />

    <title>Blue Print Collective</title>

    <meta name="keywords" content="" />

    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />

    <!-- Bootstrap -->

    <link type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Owl Carousel -->

    <link type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Custom Css -->

    <link type="text/css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Responsive Css -->

    <link type="text/css" href="{{ asset('assets/css/resposive.css" rel="stylesheet') }}" />

    @stack('links')
</head>

<body>
    @include('includes.frontend.header')

    @yield('content')


    @if (!Route::is('contact'))
        @include('includes.frontend.news-letter')
    @endif
    @include('includes.frontend.footer')

    <!-- JS Start here -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        window.jQuery ||
            document.write('<script src="{{ asset('assets/js/jquery.min.js') }}"><\/script>');
    </script>

    <!-- Bootstrap JS -->

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Owl Carousel JS -->

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Custome js -->

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    @stack('scripts')
</body>

</html>
