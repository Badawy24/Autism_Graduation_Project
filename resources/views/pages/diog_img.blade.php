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
                <form class="carousel-inner" method="POST" action="/diagmodelimg/{{ $child_id->id }}" id="diag-form" enctype="multipart/form-data">
                    @csrf
                    @if(session()->has('noface'))
                    <div class="alert-new alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div>{{ session()->get('noface') }}</div>
                    </div>
                    @enderror
                    <article class="box-ques">
                        <div class="d-block w-100">
                            <p class="lead">Upload Child Photo To Make Diagnosis</p>
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <input type="file" name="diagImg">
                                </div>
                            </div>
                        </div>
                    </article>
                </form>
                    <button class="carousel-control-next carousel-control-digo" id="confirm-button"
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
    const myCarouselElement = document.querySelector('#carouselExampleIndicators')
    const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 99999999,
    touch: false
    });
</script>
@endsection

@endsection
