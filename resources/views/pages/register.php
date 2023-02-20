<?php
@include('head.php');
?>

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
                        <form class="register" action="" method="post">
                            <h4>Create an Account </h4>
                            <div class="form-boxs">
                                <div class="row f-box box1">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="First Name" name="first_name" aria-label="default input example">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Last Name" name="last_name" aria-label="default input example">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="email" placeholder="Email" name="email" aria-label="default input example">
                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Password" name="password" aria-label="default input example">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" aria-label="default input example">
                                    </div>
                                </div>
                                <!-- <div class="row f-box box2">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="First Name"
                                            name="first_name" aria-label="default input example">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Last Name" name="last_name"
                                            aria-label="default input example">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="email" placeholder="Email" name="email"
                                            aria-label="default input example">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Username" name="username"
                                            aria-label="default input example">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Password"
                                            name="password" aria-label="default input example">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Confirm Password"
                                            name="password_confirmation" aria-label="default input example">
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button type="button" class=" btn btn-primary regis-form-btn1"><i
                                            class="fa-solid fa-arrow-left"></i></button>
                                    <button type="button" class="btn btn-primary regis-form-btn2"><i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div> -->
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="my-button-pink btn btn-primary mb-3">Register</button>
                            </div>
                        </form>
                        <hr>
                        <a href="login.php">Already have an Account! Login</a>
                        <a class="go-back" href="index.php"> <button type="button" class="btn btn-primary my-button-pink">Go Back << </button>
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
<?php
@include('script.php');
?>