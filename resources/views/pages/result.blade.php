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
            @if ($data['res'] == 'autistic')
                <div class="res">
                    <i class=" fa-solid fa-circle-check"></i>
                </div>
                <p>Autistic Child</p>
            @endif
            @if ($data['res'] == 'non-autistic')
                <div class="res">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <p>Non Autistic Child</p>
            @endif
        </div>
    </div>
</div>
<div class="get-solution">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="our-courses">
                    <p class="lead">Here you can watch some videos that help you learn about your child's illness and how to deal with it and its development.</p>
                    <a href="courses.php" class="get-courses my-button-pink">Get Courses</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="doctors">
                    <div class="doc-head">
                        <h2>Suggested Doctors</h2>

                        <p class="lead">Some suggested doctors in this field that you can contact to start your child's treatment phase</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="one-doc">
                                <section class="doc-box">
                                    <div class="image">
                                        <img class="image-doc" src="images/doc1.jpg">
                                    </div>
                                    <div class="overlay">
                                        <div class="slideUp doc-content">
                                            <p>Consultant of pediatrics at El Rehab Hospital. she has more than ten years experience in the field.</p>
                                            <p>
                                                <strong>Hospital:</strong> El Rehab Specialized Hospital
                                            </p>
                                            <h4>Education</h4>
                                            <ul style="list-style: circle;">
                                                <li>Masters Degree in Paediatrics, Aleppo University, Syria</li>
                                                <li>Bachelors in Medicine, Aleppo University, Syria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                <span>Dr. Lina Matook</span>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="one-doc">
                                <section class="doc-box">
                                    <div class="image">
                                        <img class="image-doc" src="images/doc2.jpg">
                                    </div>
                                    <div class="overlay">
                                        <div class="slideUp doc-content">
                                            <p>Professor of pediatrics at Ain Shams University. She has more than 20 years experience in the field.</p>
                                            <p>
                                                <strong>Hospital:</strong> Wedge for Hospital Managment
                                            </p>
                                            <h4>Education</h4>
                                            <ul style="list-style: circle;">
                                                <li>M.D of Pediarics, Ain Shams University, Egypt</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                <span>Dr. Hanan Ibrahim</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="one-doc">
                                <section class="doc-box">
                                    <div class="image">
                                        <img class="image-doc" src="images/doc3.jpeg">
                                    </div>
                                    <div class="overlay">
                                        <div class="slideUp doc-content">
                                            <p>pediatric and neonatal specialist with great expertise in his field. He is currently working at Zaher Zone Clinics and at Ahmad Maher Teaching Hospital as a pediatrician.</p>
                                            <p>
                                                <strong>Clinic:</strong> Zaher Zone Clinics
                                            </p>

                                        </div>
                                    </div>
                                </section>
                                <span>
                                    Dr. Remon Mories</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="one-doc">
                                <section class="doc-box">
                                    <div class="image">
                                        <img class="image-doc" src="images/doc4.jpg">
                                    </div>
                                    <div class="overlay">
                                        <div class="slideUp doc-content">
                                            <p>With experience spanning more than 30 years Dr.Ahmed Shereen has a long history in management of neonatal and pediatric cases.</p>
                                            <p>
                                                <strong>Clinic:</strong> Smilly Health Care Center
                                            </p>
                                            <h4>Education</h4>
                                            <ul style="list-style: circle;">
                                                <li>Bachelor of Medicine and Surgery, Cairo University, Egypt</li>
                                                <li>Master of Pediatric Medicine, Cairo University, Egypt</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                <span>Dr. Ahmed Shereen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
