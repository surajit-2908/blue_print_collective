<!DOCTYPE html>
<!-- Last Published: Tue May 17 2022 19:00:47 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="" data-wf-page="623a5a014f92896143a113a9" data-wf-site="623a5a014f92892442a113aa">

<head>
    <meta charset="UTF-8" />

    <title>Blue Print Collective</title>

    <meta name="keywords" content="" />

    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
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

    <link type="text/css" href="{{ asset('assets/css/resposive.css') }}" rel="stylesheet" />

    @stack('links')
</head>

<body>
    <div class="page-wrapper">
        @stack("left-bar")
        @include('includes.frontend.header')

        @yield('content')


        @if (!Route::is('contact'))
            @include('includes.frontend.news-letter')
        @endif
        @include('includes.frontend.footer')
    </div>


    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js')}}"></script><![endif]-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Custome js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#submit-footer-form").on("click", function() {
                ValidateEmail($("#footer-email").val());
            })
        })

        function ValidateEmail(email) {

            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email)) {
                $('#footer-email-err').removeClass('d-none');
                email.focus;
                return false;
            } else {
                $('#footer-email-err').addClass('d-none');
                $('#submit-footer-form').addClass('d-none');
                $('#footer-form-loader').removeClass('d-none');
                setTimeout(function() {
                    $('#submit-footer-form').removeClass('d-none');
                    $('#footer-form-loader').addClass('d-none');
                    $('#footer-email-suc').removeClass('d-none');
                    $("#footer-email").val("");
                    setTimeout(function() {
                        $('#footer-email-suc').addClass('d-none');
                    }, 4000);
                }, 4000);
            }
        }
    </script>
    @stack('scripts')
</body>

</html>
