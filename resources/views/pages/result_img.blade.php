@extends('pages.main-template')
@section('style')
<link rel="stylesheet" href="/css/style-child-profile.css">
<style>
    .progress-res {
        position: relative;
        width: 60%;
        height: 20px;
        margin: auto;
        border-radius: 10px;
        overflow: hidden;
    }
    progress{
        width:100%;
        height:100%;
    }
    .progress-prec {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-weight: bold;
        color: black;
    }
    progress::-webkit-progress-bar {
  background-color: #eee;
  border-radius: 4px;
}

progress::-webkit-progress-value {
  /* background-color: #FD556D; */
  background-color: #57CCC3;
  border-radius: 4px;
}
</style>
@endsection
@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')
<div class="result">
    <div class="container">
        <div class="test-result">
            @if ($data->testResult > 50)
                <div class="res">
                    <img class="result-image" src="{{ asset('images/icon/autistic.png') }}" alt="autistic">
                </div>
                <p>&nbsp; We Are Sorry &#128148;</p>
                <p>Your Child Have Autistic Triats</p>
                {{-- <p>{{ $data['modle_type'] }}</p> --}}
                <div class="progress-res">
                    <progress value="{{ $data->testResult }}" max="100" style="background-color: blue;"></progress>
                    <span class="progress-prec">{{ $data->testResult }}%</span>
                </div>
            @endif
            @if ($data->testResult <= 50)
            <div class="res">
                <img class="result-image" src="{{ asset('images/icon/non-autistic.png') }}" alt="non-autistic">
            </div>
            <p>We Are Happy &#128150;</p>
            <p>Your Child is Fine</p>

            @endif

        </div>
    </div>
</div>
<div class="get-solution">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="our-courses">
                    <p class="lead">Here you can watch some videos that help you learn about your child's illness and how to deal with it and its development.</p>
                    <a href="/courses" class="get-courses my-button-pink">Get Courses</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="our-courses">
                    <p class="lead">Here you can see some of the specialized doctors and clinics that help you on how to deal with your child and his development.</p>
                    <a href="/recommend" class="get-courses my-button-pink">Recommendations</a>
                </div>
            </div>
            @if ($data->testResult > 50)
            <div class="col-md-4">
                <div class="our-courses">
                    <p class="lead">Here you can see some instructions on how to deal with the child, develop his skills, and try to control the disorder</p>
                    <a href="/" class="get-courses my-button-pink">How to Deal</a>
                </div>
            </div>
            @endif
            @if ($data->testResult <= 50)
            <div class="col-md-4">
                <div class="our-courses">
                    <p class="lead">Here you can see some instructions on how to deal with the child, develop his skills, and try to control the disorder</p>
                    <a href="/avoid" class="get-courses my-button-pink">How to Avoid</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
