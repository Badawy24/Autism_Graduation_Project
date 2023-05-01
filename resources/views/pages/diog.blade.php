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
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q1" id="yq1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q1" id="nq1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 1 --}}
                        </div>
                    </article>
                    {{-- End A1 --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A2 --}}
                    <article class="carousel-item box-ques question" id="question2">
                        <div class="d-block w-100">
                            {{-- Start Question 2 --}}
                            <p class="lead">
                                <span>Q2: </span>
                                How easy is it for you to get eye contact with your child?
                            </p>
                            {{-- End Question 2 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 2 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q2" id="yq2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q2" id="nq2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 2 --}}
                        </div>
                    </article>
                    {{-- End A2 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A3 --}}
                    <article class="carousel-item box-ques question" id="question3">
                        <div class="d-block w-100">
                            {{-- Start Question 3 --}}
                            <p class="lead">
                                <span>Q3: </span>
                                Does your child point to indicate that s/he wants something? (e.g. a toy that is out of reach)
                            </p>
                            {{-- End Question 3 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 3 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q3" id="yq3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q3" id="nq3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 3 --}}
                        </div>
                    </article>
                    {{-- End A3 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A4 --}}
                    <article class="carousel-item box-ques question" id="question4">
                        <div class="d-block w-100">
                            {{-- Start Question 4 --}}
                            <p class="lead">
                                <span>Q4: </span>
                                Does your child point to share interest with you? (e.g. poin9ng at an interes9ng sight)
                            </p>
                            {{-- End Question 4 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 4 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q4" id="yq4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q4" id="nq4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 4 --}}
                        </div>
                    </article>
                    {{-- End A4 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A5 --}}
                    <article class="carousel-item box-ques question" id="question5">
                        <div class="d-block w-100">
                            {{-- Start Question 5 --}}
                            <p class="lead">
                                <span>Q5: </span>
                                Does your child pretend? (e.g. care for dolls, talk on a toy phone)
                            </p>
                            {{-- End Question 5 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 5 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q5" id="yq5">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q5" id="nq5">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 5 --}}
                        </div>
                    </article>
                    {{-- End A5 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A6 --}}
                    <article class="carousel-item box-ques question" id="question6">
                        <div class="d-block w-100">
                            {{-- Start Question 6 --}}
                            <p class="lead">
                                <span>Q6: </span>
                                Does your child follow where you are looking?
                            </p>
                            {{-- End Question 6 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 6 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q6" id="yq6">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q6" id="nq6">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 6 --}}
                        </div>
                    </article>
                    {{-- End A6 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A7 --}}
                    <article class="carousel-item box-ques question" id="question7">
                        <div class="d-block w-100">
                            {{-- Start Question 7 --}}
                            <p class="lead">
                                <span>Q7: </span>
                                If you or someone else in the family is visibly upset, does your child show signs of wan9ng to comfort them? (e.g. stroking hair, hugging them)
                            </p>
                            {{-- End Question 7 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 7 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q7" id="yq7">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q7" id="nq7">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 7 --}}
                        </div>
                    </article>
                    {{-- End A7 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A8 --}}
                    <article class="carousel-item box-ques question" id="question8">
                        <div class="d-block w-100">
                            {{-- Start Question 8 --}}
                            <p class="lead">
                                <span>Q8: </span>
                                Would you describe your child’s first words as:
                            </p>
                            {{-- End Question 8 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 8 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q8" id="yq8">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q8" id="nq8">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 8 --}}
                        </div>
                    </article>
                    {{-- End A8 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A9 --}}
                    <article class="carousel-item box-ques question" id="question9">
                        <div class="d-block w-100">
                            {{-- Start Question 9 --}}
                            <p class="lead">
                                <span>Q9: </span>
                                Does your child use simple gestures? (e.g. wave goodbye)
                            </p>
                            {{-- End Question 9 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 9 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q9" id="yq9">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q9" id="nq9">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 9 --}}
                        </div>
                    </article>
                    {{-- End A9 --}}
        {{-- -------------------------------------------------------------- --}}
        {{-- -------------------------------------------------------------- --}}
                    {{-- Start A10 --}}
                    <article class="carousel-item box-ques question" id="question10">
                        <div class="d-block w-100">
                            {{-- Start Question 10 --}}
                            <p class="lead">
                                <span>Q10: </span>
                                Does your child stare at nothing with no apparent purpose?
                            </p>
                            {{-- End Question 10 --}}
                            {{-- --------------------- --}}
                            {{-- Start Answar 10 --}}

                            <div class="radio-ans">

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="yes" name="q10" id="yq10">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="no" name="q10" id="nq10">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            {{-- End Answar 10 --}}
                        </div>
                    </article>
                    {{-- End A10 --}}
        {{-- -------------------------------------------------------------- --}}

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
        questionCounterElement.innerHTML = "Question " + currentQuestion + " of 10";

        // Show or hide the Next and Previous buttons
        var nextButton = document.getElementById("next-button");
        var previousButton = document.getElementById("previous-button");
        if (currentQuestion == 1) {
            nextButton.style.display = "block";
            previousButton.style.display = "none";
        } else if (currentQuestion == 10) {
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
        if (currentQuestion < 10) {
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
