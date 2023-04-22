@extends('pages.main-template')

@section('content')
<div class="email-forget-pass">
    <div class="container">
        <div class="email-box">
            <h4>Enter an E-mail</h4>
            <p>Enter your email address to receive the confirmation code</p>
            <form action="reset-pass-form" method="POST">
                @csrf
                <input name='email-reset' class="form-control" type="email" placeholder="Email" aria-label="default input example">
                @error('email-reset')
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ $message }} </div>
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary form-control my-button-pink">Send Email</button>
                <a href="/login">Go Back</a>
            </form>
        </div>
    </div>
</div>

@endsection
