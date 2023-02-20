<?php
@include('navbar_after_login.php');
?>
<div class="top-page"></div>

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
                    <img src="images/courses_images/course_1.png" class="card-img-top" alt="course 1">
                </div>
                <div class="card-body course-content">
                    <h5 class="card-title">All Autism Treatment Center of America</h5>
                    <p class="card-text">The Autism Treatment Center of America™ is the worldwide teaching center for
                        The Son-Rise Program®, a powerful and effective home-based treatment for children and adults of
                        all ages challenged by Autism, Autism Spectrum Disorders, Asperger's Syndrome, Pervasive
                        Developmental Disorder (PDD), and other developmental difficulties. The Son-Rise Program was
                        originated in 1974 by parents, Barry Neil Kaufman (best-selling author, Son-Rise: The Miracle
                        Continues) and Samahria Lyte Kaufman for their son. The treatment and educational model has
                        changed the way children with Autism are helped worldwide. The Son-Rise Program was awarded the
                        Best Autism Therapy at the AutismOne National Conference.
                    </p>
                </div>
            </div>
        </aside>

        <section class="videos-container">
            <div class="row card-group">


                <!-- *****************************1****************************** -->
                <div class="col-md-6 col-sm-12 search-result">
                    <div class="card course-card video-card">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/UDEHnB7Et6Y?list=PL974783FDD2EE10F6"
                            title="Autism Help Celebrating: The Son-Rise Program" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="card-body course-content">
                            <h5 class="card-title">Autism Help Celebrating: The Son-Rise Program</h5>
                        </div>
                    </div>
                </div>
                <!-- ******************************2*********************************** -->
                <div class="col-md-6 col-sm-12 search-result">
                    <div class="card course-card video-card ">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/-K3Te87b000?list=PL974783FDD2EE10F6"
                            title="Autism help: Building - A Son-Rise Program Technique" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="card-body course-content">
                            <h5 class="card-title">Autism help: Building-A Son-Rise Program Technique</h5>
                        </div>
                    </div>
                </div>
                <!-- ******************************3*********************************** -->
                <div class="col-md-6 col-sm-12 search-result">
                    <div class="card course-card video-card ">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/WVFEo0ttSLM?list=PL974783FDD2EE10F6"
                            title="Autism Help with Flexibility:- The Son-Rise Program" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="card-body course-content">
                            <h5 class="card-title">Autism Help with Flexibility:- The Son-Rise Program</h5>

                        </div>
                    </div>
                </div>
                <!-- ******************************4*********************************** -->

                <div class="col-md-6 col-sm-12 search-result">
                    <div class="card course-card video-card ">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/WXGG6AME3Jo?list=PL974783FDD2EE10F6"
                            title="Joining our children with Autism: Autism help:  The Son-Rise Program" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="card-body course-content">
                            <h5 class="card-title">Joining our children with Autism: Autism help
                            </h5>

                        </div>
                    </div>
                </div>
                <!-- ******************************5*********************************** -->

                <div class="col-md-6 col-sm-12 search-result">
                    <div class="card course-card video-card ">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/2xdhs3lGjrQ?list=PL974783FDD2EE10F6"
                            title="Setting Boundaries with Your Child on the Autism Spectrum - The Son-Rise Program"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="card-body course-content">
                            <h5 class="card-title">Setting Boundaries with Your Child on the Autism Spectrum - The
                                Son-Rise Program</h5>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</article>





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
<?php
@include('script.php');
?>