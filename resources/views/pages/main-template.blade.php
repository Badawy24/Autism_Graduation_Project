<!DOCTYPE html>
<html lang="en">
    <?php
        $json = file_get_contents('site_settings/head.json');
        $data = json_decode($json, true);
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@if (session()->has('locale') && session()->get('locale') =='ar') {{ $data['website_description_ar'] }} @else {{ $data['website_description_en'] }} @endif">
        <meta name="keywords" content="{{ $data['website_keywords'] }}">
        <link rel="canonical" href="{{ $data['website_canonical'] }}">
        <link rel="icon" href="{{ asset('images/icon/icon.png') }}">
        {{-- ********************* --}}
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/hover.css">
        <link rel="stylesheet" href="/css/style.css">
        @yield('style')
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
