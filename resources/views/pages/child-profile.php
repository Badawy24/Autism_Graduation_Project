<?php
@include('head.php');
?>
<button class="goback"><a href="home.php">Go Back</a>
</button>
<div class="child-header">
</div>
<div class="child-data">
    <div class="container">
        <!-- Child Data -->
        <div class="child-data-box d-flex flex-wrap justify-content-evenly">
            <div class="child-image rounded-circle">
                <img src="images/child-img.png" width="100" height="100" class="rounded-circle" alt="">
            </div>
            <div class="content1">
                <p>
                    <strong>Aya Osama Ahmed</strong> <br />
                    <span>Age : </span>4 <br />
                </p>
            </div>
            <div class="content1">
                <p>
                    <span>Child Ethnicity : </span>White European <br />
                    <span>child jaundice? </span><i class=" fa-solid fa-circle-check"></i> <br />
                    <span>Presence of ASD in family? </span><i class="fa-solid fa-circle-xmark"></i> <br />
                </p>
            </div>
            <div class=" content1">
                <p>
                    <span>Is Aya With ASD? </span><i class=" fa-solid fa-circle-check"></i> <br />
                    <span>How many ASD tests done for Aya? </span> 2<br />
                </p>
            </div>
        </div>


        <!-- Tests Data and make new Test -->
        <div class="tests">
            <div class="row">
                <div class="col-md-8">
                    <div class="test-data">
                        <h3>Tests Done to Aya</h3>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item one-test">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Diagnosis Number 1 / 28-1-2023 4:27
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <p>The one who completes the test is <strong><em>the father</em></strong></p>
                                        <ul>
                                            <li>Does your child look at you when you call his/her name? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>How easy is it for you to get eye contact with your child? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child point to indicate that s/he wants something? (e.g. a toy that is out of reach)
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </li>
                                            <li>Does your child point to share interest with you? (e.g. poin9ng at an interes9ng sight) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child pretend? (e.g. care for dolls, talk on a toy phone) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child follow where you are looking? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>If you or someone else in the family is visibly upset, does your child show signs of wan9ng to comfort them? (e.g. stroking hair, hugging them)
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </li>
                                            <li>Would you describe your child’s first words as: <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child use simple gestures? (e.g. wave goodbye) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child stare at nothing with no apparent purpose?
                                                <i class=" fa-solid fa-circle-check"></i>
                                            </li>
                                        </ul>
                                        <div class="image-test">
                                            <h4>Image Uploded to Test : </h4>
                                            <img src="images/child-img.png" width="200" height="200" />
                                        </div>
                                        <div class="result autistic">
                                            <span>Autistic<br />
                                                <i class="fa-solid fa-check"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item one-test">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Diagnosis Number 2 / 28-1-2023 4:27
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <p>The one who completes the test is <strong><em>the father</em></strong></p>
                                        <ul>
                                            <li>Does your child look at you when you call his/her name? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>How easy is it for you to get eye contact with your child? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child point to indicate that s/he wants something? (e.g. a toy that is out of reach)
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </li>
                                            <li>Does your child point to share interest with you? (e.g. poin9ng at an interes9ng sight) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child pretend? (e.g. care for dolls, talk on a toy phone) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child follow where you are looking? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>If you or someone else in the family is visibly upset, does your child show signs of wan9ng to comfort them? (e.g. stroking hair, hugging them)
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </li>
                                            <li>Would you describe your child’s first words as: <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child use simple gestures? (e.g. wave goodbye) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child stare at nothing with no apparent purpose?
                                                <i class=" fa-solid fa-circle-check"></i>
                                            </li>
                                        </ul>
                                        <div class="image-test">
                                            <h4>Image Uploded to Test : </h4>
                                            <img src="images/child-img.png" width="200" height="200" />
                                        </div>
                                        <div class="result autistic">
                                            <span>Autistic<br />
                                                <i class="fa-solid fa-check"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item one-test">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Diagnosis Number 3 / 28-1-2023 4:27
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <p>The one who completes the test is <strong><em>the father</em></strong></p>
                                        <ul>
                                            <li>Does your child look at you when you call his/her name? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>How easy is it for you to get eye contact with your child? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child point to indicate that s/he wants something? (e.g. a toy that is out of reach)
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </li>
                                            <li>Does your child point to share interest with you? (e.g. poin9ng at an interes9ng sight) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child pretend? (e.g. care for dolls, talk on a toy phone) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child follow where you are looking? <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>If you or someone else in the family is visibly upset, does your child show signs of wan9ng to comfort them? (e.g. stroking hair, hugging them)
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </li>
                                            <li>Would you describe your child’s first words as: <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child use simple gestures? (e.g. wave goodbye) <i class=" fa-solid fa-circle-check"></i></li>
                                            <li>Does your child stare at nothing with no apparent purpose?
                                                <i class=" fa-solid fa-circle-check"></i>
                                            </li>
                                        </ul>
                                        <div class="image-test">
                                            <h4>Image Uploded to Test : </h4>
                                            <img src="images/child-img.png" width="200" height="200" />
                                        </div>
                                        <div class="result non-autistic">
                                            <span>NON<br /> Autistic<br />
                                                <i class="fa-solid fa-xmark"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="new-test">
                        <h3>To Make New test Choose : </h3>
                        <a href="diog.php">
                            <div class="test-type">
                                <p><i class="fa-solid fa-pen-to-square"></i>
                                    <br />Make Diagnosis Using Question Only
                                </p>
                            </div>
                        </a>
                        <a href="diog.php">
                            <div class="test-type">
                                <p><i class="fa-solid fa-image"></i><br />Make Diagnosis Using Photo for a Child Only</p>
                            </div>
                        </a>
                        <a href="diog.php">
                            <div class="test-type">
                                <p><i class="fa-solid fa-question"></i><br />Make Diagnosis Using Question and Photo Together</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
@include('script.php');
?>