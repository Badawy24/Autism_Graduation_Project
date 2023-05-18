@extends('pages.main-template')

@section('content')
<div class="email-forget-pass">
    <div class="container">
        <div class="email-box">
            @if (Session::has('notfound'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <div> {{ __("sign_translate.".Session::get('notfound')) }} </div>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <div> {{ __("index_translate.".Session::get('error')) }} </div>
                </div>
            @endif
            <h4>{{ __("sign_translate.email_placeholder") }}</h4>
            <p>{{ __("sign_translate.enter_email_reset") }}</p>
            <form action="reset-form" method="get">
                @csrf
                <input name='email-reset' class="form-control" type="text" placeholder="{{ __("sign_translate.email") }}" aria-label="default input example">
                @error('email-reset')
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ $message }} </div>
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary form-control my-button-pink">{{ __("sign_translate.send_email") }}</button>
                <a href="/login">{{ __("sign_translate.go_back") }}</a>
            </form>
        </div>
    </div>
</div>

@endsection
