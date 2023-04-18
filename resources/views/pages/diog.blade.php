<?php
@include('head.php');
?>
<div class="small-nav">
    <div class="container">
        <div class="nav-links">
            <a href="child-profile.php" class="back">Go Back</a> /
            <a href="home.php" class="home">Home</a>
        </div>
    </div>
</div>

<div class="top-page"></div>
<section class="digo-wave">
    <img src="./images/digo11.png" alt="">
</section>
<div class=" d-flex justify-content-center diagnos">
    <div class="digo">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide digo-box-ques" data-bs-ride="carousel">
                <form class="carousel-inner" method="get">
                    <article class="carousel-item box-ques active">
                        <div class="d-block w-100">
                            <p class="lead"> <span>Q1: </span> Does your child look at you when you call his/her name?
                            </p>
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="1" name="q1" id="yq1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="0" name="q1" id="nq1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="carousel-item box-ques">
                        <div class="d-block w-100">
                            <p class="lead"> <span>Q2: </span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Veniam
                                consequuntur voluptatum
                                recusandae qui rerum consectetur exercitationem, deserunt quibusdam at maxime sed iusto
                            </p>
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="1" name="q2" id="yq2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="0" name="q2" id="nq2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="carousel-item box-ques">
                        <div class="d-block w-100">
                            <p class="lead"> <span>Q3: </span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Veniam
                                consequuntur voluptatum
                                recusandae qui rerum consectetur exercitationem, deserunt quibusdam at maxime sed iusto
                            </p>
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="1" name="q3" id="yq3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="0" name="q3" id="nq3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="carousel-item box-ques">
                        <div class="d-block w-100">
                            <p class="lead"> <span>Q4: </span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Veniam
                                consequuntur voluptatum
                                recusandae qui rerum consectetur exercitationem, deserunt quibusdam at maxime sed iusto
                            </p>
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">YES</span>
                                        <input type="radio" value="1" name="q4" id="yq4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ans-group">
                                    <label class="custom-radio-btn">
                                        <span class="label">NO</span>
                                        <input type="radio" value="0" name="q4" id="nq4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="carousel-item box-ques">
                        <div class="d-block w-100">
                            <p class="lead"> <span>Q5: </span> Upload Childe Photo</p>
                            <div class="radio-ans">
                                <div class="ans-group">
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="carousel-indicators-diog">
                        <div id="ques-left">Question : 1/5</div>
                    </div>
                </form>
                <button class="carousel-control-prev carousel-control-digo " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" id="back-ques">
                    <span class="btn btn-primary btn-digo btn-digo-back" aria-hidden="true"> <i class="fa-solid fa-arrow-left"></i>
                        Back</span>
                    <span class="visually-hidden">Back</span>
                </button>
                <button class="carousel-control-next carousel-control-digo" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" id="next-ques">
                    <span class="btn btn-primary btn-digo" aria-hidden="true">Next <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- <section class="digo-wave digo-wave-rev">
    <img src="./images/digo-rev.png" alt="">
</section> -->
<script>
    let toTopButton = document.querySelector(".to-top");
    toTopButton.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(".top-page").scrollIntoView({
            behavior: "smooth"
        });
    });

    var countQues = 1;
    document.querySelector("#next-ques").addEventListener("click", function() {
        document.getElementById("ques-left").textContent = "Question : " + (countQues + 1) + "/5";
        if (countQues > 3) {
            document.getElementById("next-ques").classList.add("d-none");
        }
        document.getElementById("back-ques").classList.remove("d-none");
        countQues++;
    });
    document.querySelector("#back-ques").addEventListener("click", function() {
        document.getElementById("ques-left").textContent = "Question : " + (countQues - 1) + "/5";
        if (countQues < 3) {
            document.getElementById("back-ques").classList.add("d-none");
        }
        document.getElementById("next-ques").classList.remove("d-none");
        countQues--;
    });
</script>
<?php
@include('script.php');
?>