
<!-- aya : 15/10/2022 -->
<!-- navbar before login -->

<div class="to-top" data-section=".service">
    <i class="fa-solid fa-arrow-up"></i>
</div>
<nav class="navbar navbar-expand-lg fixed-top log-nav navbar-after" id="navbar">
    <div class="container">
        <a class="navbar-brand hvr-buzz-out" href="/"><img class="logo-img" src="{{ asset('images/logo.png') }}" alt="logo"><span>{{ __('nav_bar_translate.title') }}</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-ellipsis-vertical"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">{{ __('nav_bar_translate.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">{{ __('nav_bar_translate.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">{{ __('nav_bar_translate.services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">{{ __('nav_bar_translate.register') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">{{ __('nav_bar_translate.login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact-link my-button-pink" href="#contact">{{ __('nav_bar_translate.contact') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="{{ route('langSwap','en') }}">En</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="{{ route('langSwap','ar') }}">ع</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
