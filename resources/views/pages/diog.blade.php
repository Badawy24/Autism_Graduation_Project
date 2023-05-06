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
                <form class="carousel-inner" method="POST" action="/diagmodel/{id}" id="diag-form">
                    @csrf

                    {{-- Start A1 --}}
                    <article class="carousel-item box-ques question" id="question1">
                        <div class="d-block w-100">
                            {{-- Start Question 1 --}}
                            @error('question_1')
                            <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <div> {{ $message }} </div>
                            </div>
                            @enderror
                            <p class="lead">
                                <span>Q1: </span>
                                Does your child look at you when you call his/her name?
                            </p>
                            {{-- End Question 1 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 1 --}}
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Always</span>
                                        <input type="radio" value="always" {{ old('question_1') == 'always' ? 'checked' : '' }} name="question_1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Usually</span>
                                        <input type="radio" value="usually" {{ old('question_1') == 'usually' ? 'checked' : '' }} name="question_1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Sometimes</span>
                                        <input type="radio" value="sometimes" {{ old('question_1') == 'sometimes' ? 'checked' : '' }} name="question_1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Rarly</span>
                                        <input type="radio" value="rarly" {{ old('question_1') == 'rarly' ? 'checked' : '' }} name="question_1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Never</span>
                                        <input type="radio" value="never" {{ old('question_1') == 'never' ? 'checked' : '' }} name="question_1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 1 --}}
                        </div>
                    </article>
                    {{-- End A1 --}}
                    {{-- ############################################################## --}}


                    {{-- Start A2 --}}
                    <article class="carousel-item box-ques question" id="question2">
                        <div class="d-block w-100">
                            {{-- Start Question 2 --}}
                            @error('question_2')
                            <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <div> {{ $message }} </div>
                            </div>
                            @enderror
                            <p class="lead">
                                <span>Q1: </span>
                                Does your child look at you when you call his/her name?
                            </p>
                            {{-- End Question 2 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 2 --}}
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Always</span>
                                        <input type="radio" value="always" name="question_2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Usually</span>
                                        <input type="radio" value="usually" name="question_2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Sometimes</span>
                                        <input type="radio" value="sometimes" name="question_2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Rarly</span>
                                        <input type="radio" value="rarly" name="question_2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">Never</span>
                                        <input type="radio" value="never" name="question_2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 2 --}}
                        </div>
                    </article>
                    {{-- End A2 --}}
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
                        href="/diagmodel/{id}" onclick="event.preventDefault(); document.getElementById('diag-form').submit();">
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
