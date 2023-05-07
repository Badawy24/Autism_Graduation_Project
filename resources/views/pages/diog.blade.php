@extends('pages.main-template')
<style>
    .question {
        display: none;
    }
</style>
@section('content')
<div class="small-nav">
    <div class="container">
        <div class="nav-links">
            <a href="/child-profile/{{ $child_id->id }}" class="back">Go Back</a> /
            <a href="/home" class="home">Home</a>
            <a class="lang" href="{{ route('langSwap','en') }}">En</a>
            <a class="lang" href="{{ route('langSwap','ar') }}">ع</a>
        </div>
    </div>
</div>

<section class="digo-wave">
    <img src="/images/digo11.png" alt="">
</section>
<div class=" d-flex justify-content-center diagnos" onload="showQuestion()">
    <div class="digo">
        <div class="container">
            <div class="carousel slide digo-box-ques" data-bs-ride="carousel">
                {{-- <div class="carousel-indicators-diog">
                    <div id="question-counter"></div>
                </div> --}}
                <form class="carousel-inner" method="POST" action="/diagmodel/{{ $child_id->id }}" id="diag-form">
                    @csrf
                    <?php
                        $json = file_get_contents('QA.json');
                        $data = json_decode($json, true);
                        $type_qu = 'question_';
                        $type_ans = 'answers_';
                    ?>
                    {{ $age_in_months }}
                    @if ($age_in_months <= 36)
                        <?php $type_qu .= 'toddler_';?>
                    @elseif ($age_in_months > 36 && $age_in_months <= 132)
                        <?php $type_qu .= 'child_';?>
                    @elseif ($age_in_months > 132 && $age_in_months <= 192)
                        <?php $type_qu .= 'adolecent_';?>
                    @elseif ($age_in_months > 192)
                        <?php $type_qu .= 'adult_';?>
                    @endif

                    @if (session()->has('locale') && session()->get('locale') =='ar')
                        <?php $type_qu .= 'ar';?>
                        <?php $type_ans .= 'ar';?>
                    @else
                        <?php $type_qu .= 'en';?>
                        <?php $type_ans .= 'en';?>
                    @endif

                    @foreach($data[$type_qu] as $key => $question)
                        <article class="carousel-item box-ques question" id="question{{ $key + 1 }}">
                            <div class="d-block w-100">
                                {{-- Start Question --}}
                                @error('question_{{ $key + 1 }}')
                                <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ $message }} </div>
                                </div>
                                @enderror
                                <p class="lead">
                                    <span>Q{{ $key + 1 }}: </span>
                                    {{ $question }}
                                </p>
                                {{-- End Question --}}
                                {{-- ------------------------------------------------------- --}}
                                {{-- Start Answer --}}
                                <div class="radio-ans">
                                    @foreach($data[$type_ans] as $answer)
                                    <div class="ans-group">
                                        <label class="custom-radio-btn">
                                            <span class="label">{{ $answer }}</span>
                                            <input type="radio" value="{{ $answer }}" {{ old("q" . ($key + 1)) == $answer ? 'checked' : '' }} name="q{{ $key + 1 }}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                {{-- End Answer --}}
                            </div>
                        </article>
                    @endforeach

                    <article class="carousel-item box-ques question" id="question11">
                        <div class="d-block w-100">
                            {{-- Start Question 11 --}}
                            <p class="lead">
                                <span>Q11: </span>
                                Who Complete This Test
                            </p>
                            {{-- End Question 11 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 11 --}}
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Family Member</span>
                                        <input type="radio" value="family member" {{ old('q11') == 'family member' ? 'checked' : '' }} name="q11">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Self</span>
                                        <input type="radio" value="self" {{ old('q11') == 'self' ? 'checked' : '' }} name="q11">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Others</span>
                                        <input type="radio" value="others" {{ old('q11') == 'others' ? 'checked' : '' }} name="q11">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Health Care Professional</span>
                                        <input type="radio" value="health care professional" {{ old('q11') == 'health care professional' ? 'checked' : '' }} name="q11">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            {{-- End Answar 11 --}}
                        </div>
                    </article>
                    {{-- End A11 --}}
                    {{-- ############################################################## --}}

                    {{-- =================================================================== --}}
                    {{-- *********** Important Dont Delete ************** --}}
                    {{-- <article class="carousel-item box-ques">
                            <div class="d-block w-100">
                                <p class="lead"> <span>Q5: </span> Upload Childe Photo</p>
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                        </article> --}}
                    {{-- *********** Important Dont Delete ************** --}}
                    {{-- =================================================================== --}}

                    {{-- Counter Div --}}
                    <div class="carousel-indicators-diog" id="question-counter"></div>

                </form>
                <button class="carousel-control-prev carousel-control-digo " type="button" id="previous-button" onclick="previousQuestion()">
                    <span class="btn btn-primary btn-digo btn-digo-back" aria-hidden="true"> <i class="fa-solid fa-arrow-left"></i>
                        Back</span>
                        {{-- <span class="visually-hidden">Back</span> --}}
                    </button>
                    <button class="carousel-control-next carousel-control-digo" type="button" id="next-button" onclick="nextQuestion()">
                        <span class="btn btn-primary btn-digo" aria-hidden="true">Next <i class="fa-solid fa-arrow-right"></i></span>
                        {{-- <span class="visually-hidden">Next</span> --}}
                    </button>
                    <button class="carousel-control-next carousel-control-digo" id="confirm-button" style="display: none;"
                        href="/diagmodel/{{ $child_id->id }}" onclick="event.preventDefault(); document.getElementById('diag-form').submit();">
                        <span class="btn btn-primary btn-digo" aria-hidden="true">
                            Confirm <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </button>

            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    window.onload = function() {
        showQuestion();
    };

    // Store the current question number
    var currentQuestion = 1;

    function showQuestion() {
        // Hide all questions
        var questions = document.getElementsByClassName("question");
        for (var i = 0; i < questions.length; i++) {
            questions[i].style.display = "none";
        }

        // Show the current question
        var currentQuestionElement = document.getElementById("question" + currentQuestion);
        currentQuestionElement.style.display = "block";

        // Update the question counter
        var questionCounterElement = document.getElementById("question-counter");
        questionCounterElement.innerHTML = "Question " + currentQuestion + " of 11";

        // Show or hide the Next and Previous buttons
        var nextButton = document.getElementById("next-button");
        var previousButton = document.getElementById("previous-button");
        if (currentQuestion == 1) {
            nextButton.style.display = "block";
            previousButton.style.display = "none";
        } else if (currentQuestion == 11) {
            nextButton.style.display = "none";
            document.getElementById("confirm-button").style.display = "block";
            previousButton.style.display = "block";
        } else {
            nextButton.style.display = "block";
            document.getElementById("confirm-button").style.display = "none";
            previousButton.style.display = "block";
        }
    }

    function nextQuestion() {
        if (currentQuestion < 11) {
            currentQuestion++;
            showQuestion();
        }
    }

    function previousQuestion() {
        if (currentQuestion > 1) {
            currentQuestion--;
            showQuestion();
        }
    }

    function confirmForm() {
        // Handle form submission here
        alert("Form submitted successfully!");
    }
</script>
<script>
    const myCarouselElement = document.querySelector('#carouselExampleIndicators')
    const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 99999999,
    touch: false
    });
</script>
@endsection

@endsection
