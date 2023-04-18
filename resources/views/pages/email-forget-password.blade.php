<?php
@include('head.php');
?>

<div class="email-forget-pass">
    <div class="container">
        <div class="email-box">
            <h4>Enter an E-mail</h4>
            <p>Enter your email address to receive the confirmation code</p>
            <form action="forget-pass.php">
                <input class="form-control" type="email" placeholder="Email" aria-label="default input example">
                <button type="submit" class="btn btn-primary form-control my-button-pink">Send Email</button>
                <a href="login.php">Go Back</a>
            </form>
        </div>
    </div>
</div>

<?php
@include('script.php');
?>