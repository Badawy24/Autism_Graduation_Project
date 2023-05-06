@extends('pages.main-template')
@section('content')
<div class="blur-image-register">
</div>
<div class="login-section register">
    <div class="container">
        <div class="all-section">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="register-image">

                    </div>
                </div>
                <div class=" col-lg-6">
                    <div class="form-section register">
                        <form class="register" action="register" method="post">
                            @if (Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif

                            @csrf
                            <h4>{{ __('sign_translate.create_account') }} </h4>
                            <div class="form-boxs">
                                <div class="row f-box box1">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="{{ __('sign_translate.first_name') }}" name="first_name" value="{{ old('first_name') }}" aria-label="default input example">
                                        @error('first_name')
                                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                <div> {{ $message }} </div>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="{{ __('sign_translate.last_name') }}" name="last_name" value="{{ old('last_name') }}" aria-label="default input example">
                                        @error('last_name')
                                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                <div> {{ $message }} </div>
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="email" placeholder="{{ __('sign_translate.email') }}" name="email" value="{{ old('email') }}" aria-label="default input example">
                                        @error('email')
                                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                <div> {{ $message }} </div>
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="{{ __('sign_translate.password') }}" name="password" aria-label="default input example">
                                        @error('password')
                                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                <div> {{ $message }} </div>
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="{{ __('sign_translate.confirm_password') }}" name="password_confirmation" aria-label="default input example">
                                        @error('password_confirmation')
                                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                <div> {{ $message }} </div>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="my-button-pink btn btn-primary mb-3">{{ __('sign_translate.register') }}</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <hr>
                        <a href="/login">{{ __('sign_translate.already_have_account') }}</a>
                        <a class="go-back" href="index.php"> <button type="button" class="btn btn-primary my-button-pink">{{ __('sign_translate.go_back') }} </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /* register form */
    let register_btn1 = document.querySelector(".regis-form-btn1");
    let register_btn2 = document.querySelector(".regis-form-btn2");
    let first_form = document.querySelector(".login-section .all-section .form-section form.register .form-boxs .box1");
    let last_form = document.querySelector(".login-section .all-section .form-section form.register .form-boxs .box2");
    register_btn2.addEventListener("click", function() {
        if (register_btn2.classList.contains("disabled")) {
            return;
        } else {
            last_form.style.left = "0";
            register_btn2.classList.add("disabled");
            register_btn1.classList.remove("disabled");
        }
    });
    register_btn1.addEventListener("click", function() {
        if (register_btn1.classList.contains("disabled")) {
            return;
        } else {
            last_form.style.left = "100%";
            register_btn1.classList.add("disabled");
            register_btn2.classList.remove("disabled");
        }
    });
</script>
@endsection
