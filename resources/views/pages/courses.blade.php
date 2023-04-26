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
                    <p class="lead">Welcome Back <span>Father</span></p>
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

                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card">
                        <div class="img-container">
                            <img src="images/courses_images/course_1.png" class="card-img-top" alt="course 1">
                        </div>
                        <div class="card-body course-content">
                            <h5 class="card-title">All Autism Treatment Center of America</h5>
                            <p class="card-text">The Autism Treatment Center of America™ is the worldwide teaching
                                center for
                                The Son-Rise Program®, a powerful and effective home-based treatment for children and
                                adults of
                                all ages challenged by Autism, Autism Spectrum Disorders, Asperger's Syndrome, Pervasive
                                Developmental Disorder (PDD), and other developmental difficulties. The Son-Rise Program
                                was
                                originated in 1974 by parents, Barry Neil Kaufman (best-selling author, Son-Rise: The
                                Miracle
                                Continues) and Samahria Lyte Kaufman for their son. The treatment and educational model
                                has
                                changed the way children with Autism are helped worldwide. The Son-Rise Program was
                                awarded the
                                Best Autism Therapy at the AutismOne National Conference.</p>
                            <a class="reset-a" href="videos.php"> Go To Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card">
                        <div class="img-container">
                            <img src="images/courses_images/course_2.png" class="card-img-top" alt="course 2">
                        </div>
                        <div class="card-body course-content">
                            <h5 class="card-title">Active of Autism</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                itaque,
                                temporibus sit
                                dolores aperiam sint harum1 reiciendis, maiores adipisci, error blanditiis maxime
                                nesciunt2
                                nostrum ex!Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                itaque,
                                temporibus sit
                                dolores aperiam sint harum reiciendis, maiores adipisci, error blanditiis maxime
                                nesciunt
                                nostrum ex! Aspernatur est ad pariatur ea.</p>
                            <a class="reset-a" href="videos.php"> Go To Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card ">
                        <div class="img-container">
                            <img src="images/courses_images/course_3.png" class="card-img-top" alt="course 3">
                        </div>
                        <div class="card-body course-content">
                            <h5 class="card-title">Course of Autism</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                itaque,
                                temporibus sit
                                dolores aperiam sint harum reiciendis, maiores adipisci, error blanditiis maxime
                                nesciunt
                                nostrum ex! Aspernatur est ad pariatur ea.</p>
                            <a class="reset-a" href="videos.php"> Go To Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card ">
                        <div class="img-container">
                            <img src="images/courses_images/course_4.png" class="card-img-top" alt="course 4">
                        </div>
                        <div class="card-body course-content">
                            <h5 class="card-title">Fundament of Autism</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                itaque,
                                temporibus sit
                                dolores aperiam sint harum reiciendis, maiores adipisci, error blanditiis maxime
                                nesciunt
                                nostrum ex! Aspernatur est ad pariatur ea.</p>
                            <a class="reset-a" href="videos.php"> Go To Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card ">
                        <div class="img-container">
                            <img src="images/courses_images/course_5.png" class="card-img-top" alt="course 5">
                        </div>
                        <div class="card-body course-content">
                            <h5 class="card-title">Fundamenta3ls of Autisms</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                itaque,
                                temporibus sit
                                dolores aperiam sint harum reiciendis, maiores adipisci, error blanditiis maxime
                                nesciunt
                                nostrum ex! Aspernatur est ad pariatur ea.</p>
                            <a class="reset-a" href="videos.php"> Go To Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card ">
                        <div class="img-container">
                            <img src="images/courses_images/course_6.png" class="card-img-top" alt="course 6">
                        </div>
                        <div class="card-body course-content">
                            <h5 class="card-title">Fundamenta3ls of Autisms</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                itaque,
                                temporibus sit
                                dolores aperiam sint harum reiciendis, maiores adipisci, error blanditiis maxime
                                nesciunt
                                nostrum ex! Aspernatur est ad pariatur ea.</p>
                            <a class="reset-a" href="videos.php"> Go To Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 search-result">
                    <div class="card course-card ">
                        <div class="img-container">
                            <img src="images/courses_images/course_7.png" class="card-img-top" alt="course 7">
                        </div>
                        <div class="card-body course-content">
                            <h5 class="card-title">Fundamenta3ls of Autism</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                itaque,
                                temporibus sit
                                dolores aperiam sint harum reiciendis, maiores adipisci, error blanditiis maxime
                                nesciunt
                                nostrum ex! Aspernatur est ad pariatur ea.</p>
                            <a class="reset-a" href="videos.php"> Go To Course</a>
                        </div>
                    </div>
                </div>

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
