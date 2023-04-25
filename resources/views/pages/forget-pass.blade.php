@extends('pages.main-template')

@section('content')
<div class="email-forget-pass">
    <div class="container">
        <div class="email-box">
            <h4>Reset Your Password</h4>
            {{-- <p>Enter your email address to receive the confirmation code</p> --}}
            @if (Session::has('email-sent'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ Session::get('email-sent') }} </div>
                {{ Session::forget('email-sent') }}
            </div>
            @endif
            @if (Session::has('success-pass'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ Session::get('success-pass') }} </div>
                <a href="/login">Login Now</a>
            </div>
            @endif
            @if (Session::has('fail-pass'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ Session::get('fail-pass') }} </div>
            </div>
            @endif
            @if (Session::has('codeNotMatch'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div> {{ Session::get('codeNotMatch') }} </div>
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
                <input name="password" class="form-control" type="password" placeholder="New Password" aria-label="default input example">
                @error('password')
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ $message }} </div>
                    </div>
                @enderror
                <input name="password_confirmation" class="form-control" type="password" placeholder="Confirm Password" aria-label="default input example">
                @error('password_confirmation')
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ $message }} </div>
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary form-control my-button-pink">Reset Password</button>
                <a href="/email-forget-password">Go Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
