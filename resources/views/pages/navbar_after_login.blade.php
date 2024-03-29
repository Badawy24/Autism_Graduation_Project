


<!-- badawy : 16/10/2022 -->
<!-- navbar after login -->

<div class="to-top" data-section=".service">
    <i class="fa-solid fa-arrow-up"></i>
</div>
<nav class="navbar navbar-expand-lg fixed-top log-nav navbar-after" id="navbar">
    <div class="container">
        <a class="navbar-brand hvr-buzz-out" href="#"><img class="logo-img" src="{{ asset('images/logo.png') }}" alt="logo"><span>{{ __('nav_bar_translate.title') }}</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-ellipsis-vertical"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a @class(['active'=>Request::is('home'),'nav-link']) aria-current="page" href="/home">{{ __('nav_bar_translate.home') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a @class(['active'=>Request::is('courses'),'nav-link']) aria-current="page" href="/courses">{{ __('nav_bar_translate.courses') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a @class(['active'=>Request::is('avoid'),'nav-link']) aria-current="page" href="/avoid">{{ __('nav_bar_translate.howavoid') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a @class(['active'=>Request::is('deal'),'nav-link']) aria-current="page" href="/deal">{{ __('nav_bar_translate.howdeal') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a @class(['active'=>Request::is('recommend'),'nav-link']) aria-current="page" href="/recommend">{{ __('nav_bar_translate.recomendation') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="{{ route('langSwap','en') }}">En</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="{{ route('langSwap','ar') }}">ع</a>
                </li>
            </ul>
            <article>
                <a href="/" class="btn btn-lg dropdown-toggle" >
                    <div id="profile-icon" class="profile-icon d-flex mx-3">
                        <span class="user-profile">{{ session('user')->firstName }} {{ session('user')->lastName }}</span>
                        <i class="icon fa-solid fa-user"></i>
                    </div>
                </a>
            </article>

        </div>
    </div>
</nav>

