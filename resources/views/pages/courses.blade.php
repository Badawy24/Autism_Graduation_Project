@extends('pages.main-template')

@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')

<article class="pt-5 my-5 courses">
    <div class="container">
        <section class="search-bar">
            <div class="row">
                <div class="col-md-9">
                    <p class="lead">{{ __('sign_translate.welcome_back') }} <span>{{ session('user')->firstName }}</span></p>
                </div>
                <div class="col-md-3">
                    <div class="search-container">
                        <form>
                            <div class="search-box">
                                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                                <input type="text" id="search-input" class="search-input" placeholder="Search...">
                            </div>
                            <!-- <button type="submit" id="search-button"><i class="fa fa-search"></i></button> -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="courses-container">
            <div class="row card-group">

                @foreach ($courses as $course)
                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card ">
                        <div class="img-container">
                            <img src="/images/courses_images/{{ $course->courseImage }}" class="card-img-top" alt="course 3">
                        </div>
                        <div class="card-body course-content">
                            @if (session()->has('locale') && session()->get('locale') =='ar')
                            <h5 class="card-title">{{ $course->courseTitleAr }}</h5>
                            <p class="card-text lead">{{$course->courseDescriptionAr}}</p>

                            {{-- @elseif (session()->has('locale') && session()->get('locale') =='ar') --}}
                            @else
                                <h5 class="card-title">{{ $course->courseTitleEn }}</h5>
                                <p class="card-text">{{$course->courseDescriptionEn}}</p>
                            @endif
                            <div class="card-foot">
                                <a class="reset-a" href="/videos/{{ $course->id }}"> {{ __('course_translate.goto_course') }}</a>
                                <form action="/fav/{{ $course->id }}" method="POST">
                                    @csrf
                                    @if ($fav_courses->contains($course->id))
                                    <button class="btn fav-icon-container" type="submit"><i class="fav-icon fa-solid fa-heart fa-2x" style="color: {{ session()->get('fill') }}"></i></button>
                                    @else (session()->has('fill') && session()->get('fill') == 'grey')
                                    <button class="btn fav-icon-container" type="submit"><i class="fav-icon fa-solid fa-heart fa-2x" style="color: grey"></i></button>
                                    @endif
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
</article>

@section('scripts')
<script>
    document.getElementById("search-input").addEventListener("keyup", function() {
        var searchValue = this.value.toLowerCase();
        var searchResults = document.getElementsByClassName("search-result");

        for (var i = 0; i < searchResults.length; i++) {
            var resultText = searchResults[i].innerHTML.toLowerCase();

            if (resultText.indexOf(searchValue) !== -1) {
                searchResults[i].style.display = "block";
            } else {
                searchResults[i].style.display = "none";
            }
        }
    });
    </script>
@endsection

@endsection
