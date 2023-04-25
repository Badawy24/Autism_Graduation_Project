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
            <form action="" method="get">
                <input name="fname" class=" form-control" type="text" placeholder="Child First name" aria-label="default input example">
                <input name="lname" class=" form-control" type="text" placeholder="Child Last name" aria-label="default input example">
                <label>Birth Date</label>
                <input name="date" class=" form-control" type="date" placeholder="" aria-label="default input example">
                <select name="gender" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <select name="ethnicity" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select Ethnicity</option>
                    <option value="middle eastern">Middle Eastern</option>
                    <option value="White European">White European</option>
                    <option value="Hispanic">Hispanic</option>
                    <option value="black">Black</option>
                    <option value="asian">Asian</option>
                    <option value="south asian">South Asian</option>
                    <option value="Native Indian">Native Indian</option>
                    <option value="Others">Others</option>
                </select>
                <label>Child Hade Jaundice</label>
                <div class="d-flex">
                    <div class="form-check" style="width:100px">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check" style="width:100px">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                    </div>
                </div>
                <label>There is Family Member with ASD ?</label>
                <div class="d-flex">
                    <div class="form-check" style="width:100px">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check" style="width:100px">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
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



<div style="height: 100vh; overflow: hidden;z-index:2;position:relative;">
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
                                    <!-- <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                                        Ahmed Osama <img src="/images/child-img.png" class="rounded-circle" />
                                </button> -->
                                    <button type="link" class="list-group-item list-group-item-action">
                                        <a href="child-profile.php" style="text-decoration:none; color:#000;"><img src="/images/child-img.png" class="rounded-circle" /> Aya Osama Ahmed</a>
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        <a href="child-profile.php" style="text-decoration:none; color:#000;"><img src="/images/child-img.png" class="rounded-circle" /> Aya Osama Ahmed</a>
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        <a href="child-profile.php" style="text-decoration:none; color:#000;"><img src="/images/child-img.png" class="rounded-circle" /> Aya Osama Ahmed</a>
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        <a href="child-profile.php" style="text-decoration:none; color:#000;"><img src="/images/child-img.png" class="rounded-circle" /> Aya Osama Ahmed</a>
                                    </button>
                                    <button type="button" class="add-button">
                                        <span><i class="fa-solid fa-plus"></i></span>
                                    </button>

                                </div>
                            </div>
                            <div class="dropdown border-top">
                                <a href="#" class="d-flex  justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <span>Welcome Father to Our Site</span>
                        <h1>Here you can <span class="one">diagnose</span> & <span class="two">treat </span>your child
                        </h1>
                        <div>
                            <p class="lead">
                                Welcome to our site<br />
                                You can create an internal profile for each child whose condition you want to follow up, or the status of a previously registered child. You can also follow all the courses offered through the site. </p>
                            <button type="button" class="btn btn-primary my-button-pink" fdprocessedid="czt6rs">Get Courses Now</button>
                        </div>
                    </div>
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
<script src="/js/bootstrap.bundle.min.js"></script>
@endsection

@endsection


