<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/hover.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="icon" href="{{ asset('images/icon/icon.png') }}">
        @yield('style')
        <title>{{ __('nav_bar_translate.title') }}</title>
    </head>

    <body>
        <div class="top-page"></div>
        <div class="to-top" onclick="topFunction()" data-section=".service">
            <i class="fa-solid fa-arrow-up"></i>
        </div>
        @yield('navbar')
        @yield('content')

        <script src="/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/all.min.js"></script>
        <script src="/js/main.js"></script>
        <script>
            // var scrollTop = $(".to-top");
            // scrollTop.click(function() {
            //     $("body").animate({ scrollTop: 0 }, 600);

            // });
            function topFunction() {
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        </script>
        @yield('scripts')

    </body>

</html>
