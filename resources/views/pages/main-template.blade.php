<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/hover.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/style-child-profile.css">
        <link rel="icon" href="{{ asset('images/icon/icon.png') }}">
        <title>{{ __('nav_bar_translate.title') }}</title>
    </head>

    <body>
        <div class="top-page"></div>

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
        @yield('scripts')

    </body>

</html>
