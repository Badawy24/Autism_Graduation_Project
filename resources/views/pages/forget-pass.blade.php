@extends('pages.main-template')

@section('content')
<div class="email-forget-pass">
    <div class="container">
        <div class="email-box">
            <h4>{{ __("sign_translate.reset_password") }}</h4>
            {{-- <p>Enter your email address to receive the confirmation code</p> --}}
            @if (Session::has('email-sent'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ __("sign_translate.".Session::get('email-sent')) }} </div>
            </div>
            @endif
            @if (Session::has('success-pass'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ __("sign_translate.".Session::get('success-pass')) }} </div>
                <a href="/login">{{ __("sign_translate.login_now") }}</a>
            </div>
            @endif
            @if (Session::has('fail-pass'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ __("sign_translate.".Session::get('fail-pass')) }} </div>
            </div>
            @endif
            @if (Session::has('codeNotMatch'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ __("sign_translate.".Session::get('codeNotMatch')) }} </div>
            </div>
            @endif
            <form action="reset-password" method="post">
                @csrf
                <input name="code" class="form-control" type="text" placeholder="XXX-XXX" aria-label="default input example">
                @error('code')
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ $message }} </div>
                    </div>
                @enderror
                <input name="password" class="form-control" type="password" placeholder="{{ __('sign_translate.new_pass') }}" aria-label="default input example">
                @error('password')
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ $message }} </div>
                    </div>
                @enderror
                <input name="password_confirmation" class="form-control" type="password" placeholder="{{ __('sign_translate.confirm_password') }}" aria-label="default input example">
                @error('password_confirmation')
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ $message }} </div>
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary form-control my-button-pink">{{ __("sign_translate.reset_password") }}</button>
                <a href="/email-forget-password">{{ __("sign_translate.go_back") }}</a>
            </form>
        </div>
    </div>
</div>
@endsection
