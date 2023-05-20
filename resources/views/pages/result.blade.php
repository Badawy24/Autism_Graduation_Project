@extends('pages.main-template')
@section('style')
<link rel="stylesheet" href="/css/style-child-profile.css">
@endsection
@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')
<div class="result">
    <div class="container">
        <div class="test-result">
            @if ($data->testResult == 1)
                <div class="res">
                    <img class="result-image" src="{{ asset('images/icon/autistic.png') }}" alt="autistic">
                </div>
                <p>&nbsp; We Are Sorry &#128148;</p>
                <p>Autistic Child</p>
                {{-- <p>{{ $data['modle_type'] }}</p> --}}
            @endif
            @if ($data->testResult == 0)
            <div class="res">
                <img class="result-image" src="{{ asset('images/icon/non-autistic.png') }}" alt="non-autistic">
            </div>
            <p>We Are Happy &#128150;</p>
            <p>Your Child is Fine</p>
                {{-- <p>{{ $data['modle_type'] }}</p> --}}
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
            @if ($data->testResult == 1)
            <div class="col-md-4">
                <div class="our-courses">
                    <p class="lead">Here you can see some instructions on how to deal with the child, develop his skills, and try to control the disorder</p>
                    <a href="/" class="get-courses my-button-pink">How to Deal</a>
                </div>
            </div>
            @endif
            @if ($data->testResult == 0)
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
