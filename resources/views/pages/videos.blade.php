@extends('pages.main-template')

@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')

<article class="pt-5 my-5 videos">
    <div class="container">
        <section class="search-bar">
            <div class="row justify-content-end">
                <div class="col-md-4">
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

        <aside class="course-view">
            <div class="card course-card">
                <div class="img-container">
                    <img src="/images/courses_images/{{ $course->courseImage }}" class="card-img-top" alt="course 1">
                </div>
                <div class="card-body course-content">
                    @if (session()->has('locale') && session()->get('locale') =='ar')
                        <h5 class="card-title">{{ $course->courseTitleAr }}</h5>
                        <p class="card-text lead">{{$course->courseDescriptionAr}}</p>
                    @else
                        <h5 class="card-title">{{ $course->courseTitleEn }}</h5>
                        <p class="card-text">{{$course->courseDescriptionEn}}</p>
                    @endif
                </div>
            </div>
        </aside>

        <section class="videos-container">
            <div class="row card-group">

                <!-- *********************************************************** -->
                @foreach ($videos as $video )
                <div class="col-md-6 col-sm-12 search-result">
                        <div class="card course-card video-card">
                            <iframe width="100%" height="100%"
                                src="{{ $video->videoApi }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                            <div class="card-body course-content">
                                <h5 class="card-title">
                                    @if (session()->has('locale') && session()->get('locale') =='en')
                                        {{ $video->videoTitleEn }}
                                    @elseif (session()->has('locale') && session()->get('locale') =='ar')
                                        {{ $video->videoTitleAr }}
                                    @endif
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- *********************************************************** -->
                @if ($videos == '[]')
                    <div class="text-center">
                        <p class="lead">
                            @if (session()->has('locale') && session()->get('locale') =='ar')
                                لا يوجد فيديوهات متاحة الان
                            @else
                                There are Not Available Videos Now
                            @endif
                        </p>
                    </div>
                @endif
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

