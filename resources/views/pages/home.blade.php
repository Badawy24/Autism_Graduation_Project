<?php use Illuminate\Support\Facades\DB; ?>
@extends('pages.main-template')

@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')

<!-- start add child form -->
<div class="add-child">
    <div class="container">
        <div class="child-form">
            <h3>Add New Child</h3>
            <span class="close-form">x</span>
            <form action=<?php echo "add-child/" . session('user_id'); ?> method="post" class="childF" enctype="multipart/form-data">
                @csrf
                <div class="child-image">
                    <label class="upload-child-image">
                        <input type="file" name="image" onchange="updateProfileImage()"/>
                        <img id="profile-img" src="/images/child_images/child-img.png"/>
                    </label>
                </div>
                <input name="fname" class=" form-control" type="text" placeholder="Child First name" aria-label="default input example">
                <input name="lname" class=" form-control" type="text" placeholder="Child Last name" aria-label="default input example">
                <label>Birth Date</label>
                <input name="date" class=" form-control" type="date" placeholder="" aria-label="default input example">
                <select name="gender" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select Gender</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>

                <select name="ethnicity" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select Ethnicity</option>
                    <option value="middle eastern">Middle Eastern</option>
                    <option value="white european">White European</option>
                    <option value="hispanic">Hispanic</option>
                    <option value="black">Black</option>
                    <option value="asian">Asian</option>
                    <option value="latino">Latino</option>
                    <option value="pacifica">Pacifica</option>
                    <option value="south asian">South Asian</option>
                    <option value="native indian">Native Indian</option>
                    <option value="mixed">Mixed</option>
                    <option value="others">Others</option>
                </select>
                <label>Child Hade Jaundice</label>
                <div class="d-flex">
                    <div class="form-check" style="width:100px">
                        <input class="form-check-input" type="radio" name="Jaundice" id="Jaundice" value="yes">
                        <label class="form-check-label" for="Jaundice">
                            Yes
                        </label>
                    </div>
                    <div class="form-check" style="width:100px">
                        <input class="form-check-input" type="radio" name="Jaundice" id="Jaundice" value="no">
                        <label class="form-check-label" for="Jaundice">
                            No
                        </label>
                    </div>
                </div>
                <button type="submit" class="my-button-pink btn btn-primary mb-3" fdprocessedid="m750om">Add Child</button>
            </form>
        </div>
    </div>
</div>
<!-- end add child form -->



<div style="height: 100vh;z-index:2;position:relative;">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M384.53,-2.46 C576.41,24.11 132.84,148.12 415.57,161.89 L500.00,149.60 L505.87,-4.43 Z" style="stroke: none; fill: #FD556D;"></path>
    </svg>
    <div class="homepage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- another aside AYA -->
                    <div class="nav-child">
                        <div class="nav-child-content">
                            <div class="nav-head">
                                <h4>Your Child</h4>
                            </div>
                            <div class="child-list">
                                <div class="list-group">
                                    <?php $childs = Db::select('select * from childs where userId = ?', [session('user_id')]); ?>
                                    @foreach ($childs as $child)
                                        <button type="link" class="list-group-item list-group-item-action">
                                            <a href="/child-profile/{{ $child->id }}" style="text-decoration:none; color:#000;"><img src={{'images/child_images/' . $child->childImage}} class="rounded-circle" /> {{ $child->firstName . ' ' . $child->lastName}}</a>
                                        </button>
                                    @endforeach
                                    <button type="button" class="add-button">
                                        <span><i class="fa-solid fa-plus"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown border-top">
                                <a href="#" class="d-flex justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon fa-solid fa-user"></i>
                                </a>
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li> -->
                                    <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="home-content">
                        @if (Session::has('new_user'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ Session::get('new_user') }} </div>
                        </div>
                        @endif
                        @if (Session::has('success-add'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ Session::get('success-add') }} </div>
                        </div>
                        @endif
                        @if (Session::has('fail-add'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ Session::get('fail-add') }} </div>
                        </div>
                        @endif
                        @if (Session::has('nochild'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ Session::get('nochild') }} </div>
                        </div>
                        @endif
                        <span>Welcome {{session('user')->firstName . ' ' . session('user')->lastName}}  to Our Site</span>
                        <h1>Here you can <span class="one">diagnose</span> & <span class="two">treat </span>your child
                        </h1>
                        <div>
                            <p class="lead">
                                Welcome to our site<br />
                                You can create an internal profile for each child whose condition you want to follow up, or the status of a previously registered child. You can also follow all the courses offered through the site. </p>
                            <a href="/courses"><button type="button" class="btn btn-primary my-button-pink" fdprocessedid="czt6rs">Get Courses Now</button></a>
                        </div>
                    </div>
                    <section class="courses-container">
                        <div class="row card-group">

                        @foreach ($courses as $course)
                            <div class="col-md-6 col-sm-12 search-result">
                                <div class="card course-card ">
                                    <div class="img-container">
                                        <img src="/images/courses_images/{{ $course->courseImage }}" class="card-img-top" alt="course 3">
                                    </div>
                                    <div class="card-body course-content">
                                        @if (session()->has('locale') && session()->get('locale') =='ar')
                                        <h5 class="card-title">{{ $course->courseTitleAr }}</h5>
                                        <p class="card-text lead">{{$course->courseDescriptionAr}}</p>
                                        @else
                                            <h5 class="card-title">{{ $course->courseTitleEn }}</h5>
                                            <p class="card-text">{{$course->courseDescriptionEn}}</p>
                                        @endif
                                        <div class="card-foot">
                                            <a class="reset-a" href="/videos/{{ $course->courseId }}"> {{ __('course_translate.goto_course') }}</a>
                                            <form action="/fav/{{ $course->courseId }}" method="POST">
                                                @csrf
                                                <button class="btn fav-icon-container" type="submit"><i class="fav-icon fa-solid fa-heart fa-2x" style="color: {{ session()->get('fill') }}"></i></button>
                                            </form>
                                            {{-- <a class="fav-icon-container" href="/videos"> <i class="fav-icon fa-solid fa-heart fa-2x" style="color: grey"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    let add_child_button = document.getElementsByClassName('add-button');
    let add_child_form = document.getElementsByClassName('add-child');
    let close_button = document.getElementsByClassName('close-form');
    add_child_button[0].addEventListener('click', function() {
        add_child_form[0].style.top = "0";
    });
    close_button[0].addEventListener('click', function() {
        add_child_form[0].style.top = "-100%";
    });
</script>
<script>
    function updateProfileImage() {
        const input = document.querySelector('input[name="image"]');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.querySelector('#profile-img');
                img.setAttribute('src', '/images/icon/done.png');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script src="/js/bootstrap.bundle.min.js"></script>
@endsection

@endsection


