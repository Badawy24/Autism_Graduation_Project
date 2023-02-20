<?php
@include('head.php');
?>
<!-- badawy : 16/10/2022 -->
<!-- navbar after login -->

<div class="to-top" data-section=".service">
    <i class="fa-solid fa-arrow-up"></i>
</div>
<nav class="navbar navbar-expand-lg fixed-top log-nav navbar-after" id="navbar">
    <div class="container">
        <a class="navbar-brand hvr-buzz-out" href="#" id="navbar-brand">Autism in <br><span>children</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-ellipsis-vertical"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " aria-current="page" href="courses.php">Courses</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " aria-current="page" href="avoid.php">How to Avoid</a>
                </li>
            </ul>
            <article data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <div class="btn btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <div id="profile-icon" class="profile-icon d-flex mx-3">
                        <span class="user-profile">Aya Osama</span>
                        <i class="icon fa-solid fa-user"></i>
                    </div>
                </div>
            </article>

        </div>
    </div>
</nav>
<!--<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="head-pro" id="offcanvasRightLabel">Profile</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
     <div class="offcanvas-body">
        <article>
            <div class="img-prof">
                <img src="images/baby.png" alt="">
            </div>
            <p class="lead user-prof">
                <span>Yoya5501</span>
            </p>

            <ul class="user-data">
                <li>Name : <span>Yoya</span></li>
                <li>Age : <span>10</span></li>
                <li>Email : <span>Yo@gmail.com</span></li>
            </ul>
            <ul class="user-setting">
                <li>

                    <button id="prof-btn" class="btn">
                        <i class="fa-solid fa-id-badge"></i>
                        <span> Proflie</span>
                    </button>

                </li>
                <li>

                    <button id="sett-btn" class="btn">
                        <i class="fa-solid fa-gear fa-spin"></i>
                        <span> Setting</span>
                    </button>

                </li>
                <li>

                    <button id="logout" class="btn logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span> Logout</span>
                    </button>

                </li>
            </ul>
        </article>
    </div>
</div> -->