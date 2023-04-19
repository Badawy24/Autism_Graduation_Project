@extends('pages.main-template')

@section('content')
<div class="blur-image-login">
</div>
<div class="login-section">
    <div class="container">
        <div class="all-section">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="login-image">

                    </div>
                </div>
                <div class=" col-lg-6">
                    <div class="form-section">
                        <form class='login' action="login" method="post">
                            @if (Session::has('cantLogin'))
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <div>{{ Session::get('cantLogin') }} </div>
                            </div>
                            @endif
                            @csrf

                            <h4>Welcome Back </h4>
                            <input class="form-control" type="text" placeholder="Enter Email" name="email" aria-label="default input example">
                            @error('email')
                                <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <input class="form-control" type="password" placeholder="Enter Password" name="password" aria-label=" default input example">
                            @error('password')
                                <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <button type="submit" class="my-button-pink btn btn-primary mb-3">Login</button>
                        </form>
                        <hr>
                        <a href="email-forget-password.php">Forget Password?</a>
                        <a href="register.php">Create an Account!</a>

                        <a class="go-back" href="index.php"> <button type="button" class="btn btn-primary my-button-pink">Go Back << </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection