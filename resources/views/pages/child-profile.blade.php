@extends('pages.main-template')

@section('style')
<link rel="stylesheet" href="/css/style-child-profile.css">
@endsection

@section('content')
<button class="goback"><a href="/home">Go Back</a>
</button>
<div class="child-header">
</div>
<div class="child-data">
    <div class="container">
        <!-- Child Data -->
        <div class="child-data-box d-flex flex-wrap justify-content-evenly">
            <div class="child-image rounded-circle">
                <img src={{'/images/child_images/' . $child->childImage}} width="100" height="100" class="rounded-circle" alt="">
            </div>
            <div class="content1">
                <p>
                    <strong>{{ $child->firstName }} {{ $child->lastName }}</strong> <br />
                    <span>Age : </span>{{ $age }} <br />
                </p>
            </div>
            <div class="content1">
                <p>
                    <span>Child Ethnicity : </span>{{ $child->childEthnicity }} <br />
                    <span>child jaundice? </span>
                    @if ( $child->childJaundice == 1 )
                        <i class=" fa-solid fa-circle-check"></i> <br />
                    @else
                        <i class="fa-solid fa-circle-xmark"></i> <br />
                    @endif

                    <span>Presence of ASD in family? </span>
                    @if ( $child->familyWithASD == 1 )
                        <i class=" fa-solid fa-circle-check"></i> <br />
                    @else
                        <i class="fa-solid fa-circle-xmark"></i> <br />
                    @endif
                </p>
            </div>
            <div class=" content1">
                <p>
                    <span>Is {{ $child->firstName }} With ASD? </span><i class=" fa-solid fa-circle-check"></i> <br />
                    <span>How many ASD tests done for {{ $child->firstName }} ? </span> {{ $child->numberOfTests }}<br />
                </p>
            </div>
        </div>


        <!-- Tests Data and make new Test -->
        <div class="tests">
            <div class="row">
                <div class="col-md-8">
                    <div class="test-data">
                        <h3>Tests Done to {{ $child->firstName}}</h3>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <?php $i=0; ?>
                            @foreach ($tests as $test)
                            <div class="accordion-item one-test">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne<?php echo $i; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne<?php echo $i; ?>">
                                        Diagnosis Number <?php echo $i; ?>  / {{$test->created_at}}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne<?php echo $i; ?>" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne<?php echo $i; $i++;?>">
                                    <div class="accordion-body">
                                        @if ($test->testImage == NULL)
                                        <p>The one who completes the test is <strong><em>{{$test->whoCompletesTheTest}}</em></strong></p>
                                        <p>Test Done Using a <strong>Questionnaires</strong></p>
                                        @else
                                            <p>Test Done Using Clear <strong>Image</strong> of Child</p>
                                        @endif
                                        @if($test->testResult == 1 || $test->testResult > 45)
                                        <div class="result">
                                            <img width="100" height="100" class="mb-3"  src="{{ asset('images/icon/autistic.png') }}" alt="autistic">
                                            {{-- <p class="text-black">Your Child Have Autistic Triats</p> --}}
                                        </div>
                                        @endif
                                        @if ($test->testResult == 0 || $test->testResult <= 45)
                                        <div class="result">
                                            <img width="100" height="100" class="mb-3" src="{{ asset('images/icon/non-autistic.png') }}" alt="non-autistic">
                                            {{-- <p class="text-black">Your Child Have Autistic Triats</p> --}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="child-edit-del">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="/delete/{{$child->id}}"><button class="btn btn-danger" type="button">Delete {{$child->firstName}} <i class="fa-solid fa-trash"></i></button></a>
                            <button class="btn btn-success edit-child-btn" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit {{$child->firstName}} data <i class="fa-solid fa-pen-to-square"></i></button>
                            @if (Session::has('success-edit'))
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <div> {{ Session::get('success-edit') }} </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="new-test mt-4">
                        <h3>To Make New test Choose : </h3>
                        <a href="/diog/{{ $child->id }}">
                            <div class="test-type">
                                <p><i class="fa-solid fa-pen-to-square"></i>
                                    <br />Make Diagnosis Using Question Only
                                </p>
                            </div>
                        </a>
                        <a href="/diogimg/{{ $child->id }}">
                            <div class="test-type">
                                <p><i class="fa-solid fa-image"></i><br />Make Diagnosis Using Photo for a Child Only</p>
                            </div>
                        </a>
                        {{-- <a href="diog.php">
                            <div class="test-type">
                                <p><i class="fa-solid fa-question"></i><br />Make Diagnosis Using Question and Photo Together</p>
                            </div>
                        </a> --}}
                    </div>
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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit child Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <section class="modal-body">
                <div class="edit-form">
                    <div class="child-form">
                        <form action='/edit-child/{{$child->id}}' method="post" class="childF" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="child-image">
                                    <label class="upload-child-image">
                                        <input id="img-upload" type="file" name="image" onchange="updateProfileImage()"/>
                                        <img id="profile-img" src="{{'/images/child_images/' . $child->childImage}}" />
                                    </label>
                                </div>
                                <div class="text-center mb-2"><label for="img-upload">{{ __('home_translate.child_image') }}</label></div>
                            </div>

                            <input name="fname" class=" form-control" type="text" placeholder="{{ __('home_translate.child_first_name') }}" aria-label="default input example" value={{$child->firstName}}>
                            @error('fname')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <input name="lname" value={{$child->lastName}} class=" form-control" type="text" placeholder="{{ __('home_translate.child_last_name') }}" aria-label="default input example">
                            @error('lname')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <label>{{ __('home_translate.birth_date') }}</label>
                            <input value={{$child->birthDate}} id="birthdate" name="date" class=" form-control" type="date" max="<?php echo date('Y-m-d', strtotime('-1 year')); ?>" placeholder="{{ __('home_translate.birth_date') }}" aria-label="default input example">
                            @error('date')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <select  name="gender" class="form-select" aria-label="Default select example">
                                <option selected disabled>{{ __('home_translate.select_gender') }}</option>
                                @if($child->gender == 'm')
                                <option selected value="m">{{ __('home_translate.male') }}</option>
                                <option value="f">{{ __('home_translate.female') }}</option>
                                @elseif ($child->gender == 'f')
                                <option value="m">{{ __('home_translate.male') }}</option>
                                <option selected value="f">{{ __('home_translate.female') }}</option>
                                @endif
                            </select>
                            @error('gender')
                                <div class="text-danger d-flex align-items-center mb-3" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                            @enderror
                            <select name="ethnicity" class="form-select" aria-label="Default select example">
                                <option selected disabled>{{ __('home_translate.select_ethnicity') }}</option>
                                <option <?php if($child->childEthnicity == 'middle eastern') { echo 'selected';} ?> value="middle eastern">{{ __('home_translate.middle_eastern') }}</option>
                                <option <?php if($child->childEthnicity == 'white european') { echo 'selected';} ?> value="white european">{{ __('home_translate.white_european') }}</option>
                                <option <?php if($child->childEthnicity == 'hispanic') { echo 'selected';} ?> value="hispanic">{{ __('home_translate.hispanic') }}</option>
                                <option <?php if($child->childEthnicity == 'black') { echo 'selected';} ?> value="black">{{ __('home_translate.black') }}</option>
                                <option <?php if($child->childEthnicity == 'asian') { echo 'selected';} ?> value="asian">{{ __('home_translate.asian') }}</option>
                                <option <?php if($child->childEthnicity == 'latino') { echo 'selected';} ?> value="latino">{{ __('home_translate.latino') }}</option>
                                <option <?php if($child->childEthnicity == 'pacifica') { echo 'selected';} ?> value="pacifica">{{ __('home_translate.pacific') }}</option>
                                <option <?php if($child->childEthnicity == 'south asian') { echo 'selected';} ?> value="south asian">{{ __('home_translate.south_asian') }}</option>
                                <option <?php if($child->childEthnicity == 'native indian') { echo 'selected';} ?> value="native indian">{{ __('home_translate.native_indian') }}</option>
                                <option <?php if($child->childEthnicity == 'mixed') { echo 'selected';} ?> value="mixed">{{ __('home_translate.mixed') }}</option>
                                <option <?php if($child->childEthnicity == 'others') { echo 'selected';} ?> value="others">{{ __('home_translate.others') }}</option>
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
                                    <input <?php if($child->childJaundice == 1) { echo 'checked';} ?> class="form-check-input" type="radio" name="Jaundice" id="Jaundice" value="yes">
                                    <label class="form-check-label" for="Jaundice">
                                        {{ __('home_translate.yes') }}
                                    </label>
                                </div>
                                <div class="form-check" style="width:100px">
                                    <input <?php if($child->childJaundice == 0) { echo 'checked';} ?> class="form-check-input" type="radio" name="Jaundice" id="Jaundice" value="no">
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
                            <button type="submit" class="my-button-pink btn btn-primary mb-3" fdprocessedid="m750om">Save Changes</button>
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
    let add_child_button = document.getElementsByClassName('edit-child-btn');
    let add_child_form = document.getElementsByClassName('child-form');
    let close_button = document.getElementsByClassName('close-form');
    add_child_button[0].addEventListener('click', function() {
        add_child_form[0].style.top = "0";
    });
    // close_button[0].addEventListener('click', function() {
    //     add_child_form[0].style.top = "-100%";
    // });
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
