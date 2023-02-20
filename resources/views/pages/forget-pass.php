<?php
@include('head.php');
?>

<div class="email-forget-pass">
    <div class="container">
        <div class="email-box">
            <h4>Reset Your Password</h4>
            <p>Enter your email address to receive the confirmation code</p>
            <form action="">
                <input class="form-control" type="text" placeholder="XXX-XXX" aria-label="default input example">
                <input class="form-control" type="password" placeholder="New Password" aria-label="default input example">
                <input class="form-control" type="password" placeholder="Confirm Password" aria-label="default input example">
                <button type="submit" class="btn btn-primary form-control my-button-pink">Reset Password</button>
                <a href="email-forget-password.php">Go Back</a>
            </form>
        </div>
    </div>
</div>

<?php
@include('script.php');
?>