<?php use Illuminate\Support\Facades\DB; ?>
@extends('pages.main-template')

@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')

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
                                <h4>{{ __('home_translate.your_child') }}</h4>
                            </div>
                            <div class="child-list">
                                <div class="list-group">
                                    <?php $childs = Db::select('select * from childs where userId = ?', [session('user_id')]); ?>
                                    @foreach ($childs as $child)
                                        <button type="link" class="list-group-item list-group-item-action">
                                            <a href="/child-profile/{{ $child->id }}" style="text-decoration:none; color:#000;"><img src={{'images/child_images/' . $child->childImage}} class="rounded-circle" /> {{ $child->firstName . ' ' . $child->lastName}}</a>
                                        </button>
                                    @endforeach
                                    <button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <span><i class="fa-solid fa-plus"></i></span>
                                    </button>
                                </div>
                            </div>
                            <br>
                            <div class="dropdown border-top">
                                <a href="#" class="d-flex justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                            <div> {{ __('home_translate.new_user') }} </div>
                        </div>
                        @endif
                        @if (Session::has('success-add'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ __('home_translate.success-add') }} </div>
                        </div>
                        @endif
                        @if (Session::has('fail'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ __('home_translate.fail-add') }} </div>
                        </div>
                        @endif
                        @if (Session::has('nochild'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ __('home_translate.nochild') }} </div>
                        </div>
                        @endif
                        @if (Session::has('childDel'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{Session::get('childDel')}} </div>
                        </div>
                        @endif
                        <span>{{ __('home_translate.welcome') }} {{session('user')->firstName . ' ' . session('user')->lastName}} {{ __('home_translate.to_our_site') }}</span>
                        <h1>{{ __('home_translate.here_you_can') }} <span class="one">{{ __('home_translate.diagnose') }}</span> & <span class="two">{{ __('home_translate.treat') }} </span>{{ __('home_translate.your_child') }}
                        </h1>
                        <div>
                            <p class="lead">
                                {{ __('home_translate.welcome') }} {{ __('home_translate.to_our_site') }}
                            </p>
                            <p class="lead">
                                {{ __('home_translate.create_internal_profile') }}
                            </p>
                            <p class="lead">
                                {{ __('home_translate.follow_all_courses') }}
                            </p>
                            <a href="/courses"><button type="button" class="btn btn-primary my-button-pink" fdprocessedid="czt6rs">{{ __('home_translate.get_all_courses') }}</button></a>
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

{{-- Start Add Child Using Bootstrap By Badawy --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ __('home_translate.add_new_child') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <section class="modal-body">
                <div class="add-child">
                    <div class="child-form">
                        <form action=<?php echo "add-child/" . session('user_id'); ?> method="post" class="childF" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="child-image">
                                    <label class="upload-child-image">
                                        <input id="img-upload" type="file" name="image" onchange="updateProfileImage()"/>
                                        <img id="profile-img" src="/images/child_images/child-img.png"/>
                                    </label>
                                </div>
                                <div class="text-center mb-2"><label for="img-upload">{{ __('home_translate.child_image') }}</label></div>
                            </div>

                            <input name="fname" class=" form-control" type="text" placeholder="{{ __('home_translate.child_first_name') }}" aria-label="default input example">
                            @error('fname')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <input name="lname" class=" form-control" type="text" placeholder="{{ __('home_translate.child_last_name') }}" aria-label="default input example">
                            @error('lname')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <label>{{ __('home_translate.birth_date') }}</label>
                            <input id="birthdate" name="date" class=" form-control" type="date" max="<?php echo date('Y-m-d', strtotime('-1 year')); ?>" placeholder="{{ __('home_translate.birth_date') }}" aria-label="default input example">
                            @error('date')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <select name="gender" class="form-select" aria-label="Default select example">
                                <option selected disabled>{{ __('home_translate.select_gender') }}</option>
                                <option value="m">{{ __('home_translate.male') }}</option>
                                <option value="f">{{ __('home_translate.female') }}</option>
                            </select>
                            @error('gender')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <select name="ethnicity" class="form-select" aria-label="Default select example">
                                <option selected disabled>{{ __('home_translate.select_ethnicity') }}</option>
                                <option value="middle eastern">{{ __('home_translate.middle_eastern') }}</option>
                                <option value="white european">{{ __('home_translate.white_european') }}</option>
                                <option value="hispanic">{{ __('home_translate.hispanic') }}</option>
                                <option value="black">{{ __('home_translate.black') }}</option>
                                <option value="asian">{{ __('home_translate.asian') }}</option>
                                <option value="latino">{{ __('home_translate.latino') }}</option>
                                <option value="pacifica">{{ __('home_translate.pacific') }}</option>
                                <option value="south asian">{{ __('home_translate.south_asian') }}</option>
                                <option value="native indian">{{ __('home_translate.native_indian') }}</option>
                                <option value="mixed">{{ __('home_translate.mixed') }}</option>
                                <option value="others">{{ __('home_translate.others') }}</option>
                            </select>
                            @error('ethnicity')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <label>{{ __('home_translate.child_had_jaundice') }}</label>
                            <div class="d-flex">
                                <div class="form-check" style="width:100px">
                                    <input class="form-check-input" type="radio" name="Jaundice" id="Jaundice" value="yes">
                                    <label class="form-check-label" for="Jaundice">
                                        {{ __('home_translate.yes') }}
                                    </label>
                                </div>
                                <div class="form-check" style="width:100px">
                                    <input class="form-check-input" type="radio" name="Jaundice" id="Jaundice" value="no">
                                    <label class="form-check-label" for="Jaundice">
                                        {{ __('home_translate.no') }}
                                    </label>
                                </div>
                            </div>
                            @error('Jaundice')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <button type="submit" class="my-button-pink btn btn-primary mb-3" fdprocessedid="m750om">{{ __('home_translate.add_child') }}</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
{{-- End Add Child Using Bootstrap By Badawy --}}
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


