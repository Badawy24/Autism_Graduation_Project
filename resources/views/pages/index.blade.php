
@extends('pages.main-template')
@section('navbar')
@include('pages.navbar_before_login')
@endsection
@section('content')
<div class="top-page"></div>

<!-- start Header -->
<header class="pt-5 index-page">
    <div class=" container">
        <div class="row">
            <div class="col-md-6">
                <div class="head-content">
                    <span>{{ __('index_translate.welcome') }}</span>
                    <h1>{{ __('index_translate.magic') }}<span class="one">{{ __('index_translate.diag') }}</span> & <span class="two">{{ __('index_translate.treating') }} </span>{{ __('index_translate.autism') }}
                    </h1>
                    <p>{{ __('index_translate.identify') }}</p>
                    <a href="login.php"><button type="button" class="btn btn-primary my-button-pink">{{ __('index_translate.protect') }}</button></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="head-image">
                    <img class="img-fluid" id="header-image" src="images/autism_header.webp" />
                </div>
            </div>
        </div>
    </div>
</header>

<section class="autism">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="autism-box">
                    <h3>{{ __('index_translate.know') }}<br>
                        <span><i class="fas fa-hand-point-right fa-fw fa-2x fa-beat-fade"></i></span>
                    </h3>

                </div>
            </div>
            <div class="col-lg-8">
                <video width="100%" controls autoplay poster="images/vid2.png" muted>
                    <source src="video/What is Autism_.mp4" type="video/mp4">
                        {{ __('index_translate.video_tag_error') }}
                </video>
            </div>
        </div>
    </div>
</section>


<section class="about-us" id="about">

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-image">
                    <img class="img-fluid" id="about-image" src="images/about-us.png" />
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-item mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="icon">
                                            <i class="fa-solid fa-stethoscope"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="about-item-content">
                                            <h4>{{ __('index_translate.services') }}</h4>
                                            <p>{{ __('index_translate.methods') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-item mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="icon">
                                            <i class="fa-solid fa-stethoscope"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="about-item-content">
                                            <h4>{{ __('index_translate.confidence') }}</h4>
                                            <p>{{ __('index_translate.confidence_text') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-item mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="icon">
                                            <i class="fa-solid fa-stethoscope"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="about-item-content">
                                            <h4>{{ __('index_translate.users') }}</h4>
                                            <p>{{ __('index_translate.users_text') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="about-item mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="icon">
                                            <i class="fa-solid fa-stethoscope"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="about-item-content">
                                            <h4>nnnnnnnnn</h4>
                                            <p>This is some content from a media component. You can replace this with
                                                any content and adjust it as needed.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- end of about us -->

<!-- start services -->

<div id="service" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>See Our <span class="one">Services</span> &amp; What We <span class=two>Provide</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" style="text-decoration:none">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="hidden-content">
                            <h4>With / Without Autism</h4>
                            <p>The site provides a test that uses artificial intelligence to diagnose whether your child has autism or not</p>
                        </div>

                        <div class="showed-content">
                            <img class="img-fluid" src="images/service_one.png" alt="">
                            <h4>Diagnosing</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" style="text-decoration:none">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="hidden-content tret">
                            <h4>Help treat your child</h4>
                            <p>The site provides a set of courses through which you can help your child and develop his condition without going to a doctor</p>
                        </div>
                        <div class="showed-content">
                            <img class="img-fluid" src="images/service_two.png" alt="">
                            <h4>Treatment</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- End services -->


<!-- start contact Us -->
<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2>We are glad you used our site, you can leave your opinion here</h2>
                    <p>You can leave any problem you encounter during the use of the site or any opinion about adding a new feature to the site.</p>
                    <div class="phone-info">
                        <h4>For any enquiry, Call Us: <span> <i class="p-icon fa-solid fa-phone"></i> <a href="#">012-873-04299</a></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                    <div class="contact-dec">
                        <img src="assets/images/contact-decoration.png" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end contact us -->

<!-- start Footer -->
<footer>
    <div class="container">
        <p class="lead">
            Made With Love By <span class="one">Aya <i class="fa-solid fa-heart"></i><span>
        </p>
    </div>
</footer>

@endsection

