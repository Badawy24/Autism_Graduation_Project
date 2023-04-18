<?php
@include('head.php');
?>

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
                        <form action="home.php" method="post">
                            <h4>Welcome Back </h4>
                            <input class="form-control" type="text" placeholder="Enter Email" name="email" aria-label="default input example">
                            <input class="form-control" type="text" placeholder="Enter Password" name="password" aria-label=" default input example">
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
<?php
@include('script.php');
?>