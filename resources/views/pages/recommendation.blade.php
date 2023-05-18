<?php use Illuminate\Support\Facades\DB; ?>
@extends('pages.main-template')

@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')

<div class="get-solution recommend">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="doctors">
                    <div class="doc-head">
                        <h2>Suggested Doctors</h2>

                        <p class="lead">Some suggested doctors in this field that you can contact to start your child's treatment phase</p>
                    </div>
                    <div class="row">

                        @foreach ($doctors as $doctor)
                            <div class="col-md-4 mb-3">
                                <div class="one-doc">
                                    <section class="doc-box">
                                        <div class="image">
                                            <img class="image-doc" src={{'/images/doc_images/' . $doctor->docImage}}>
                                        </div>
                                        <div class="doc-content">
                                            <span>Dr. {{$doctor->firstName . ' ' . $doctor->lastName}}</span>
                                            <p>{{$doctor->doctorDesc}}</p>
                                            <p>
                                                <strong>Email:</strong> {{$doctor->email}}<br />
                                                <strong>Phone:</strong> {{$doctor->doctorPhone}}<br />
                                                <strong>Address:</strong> {{$doctor->doctorAddress}}<br />
                                                <strong>Hospital:</strong> {{$doctor->doctorHospital}}<br />
                                            </p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="healthcare">
                    <div class="doc-head">
                        <h2>Suggested Healthcare</h2>
                        <p class="lead">Some suggested Healthcare in this field that you can contact to start your child's treatment phase</p>
                    </div>
                    <div class="all-health">
                        @foreach ($healthcare as $health)
                        <div class="one-health">
                            <h3>{{$health->healthcarName}}</h3>
                            <p>
                                <strong>Address : </strong> {{$health->healthcarAddress}}<br />
                                <strong>Phone : </strong> {{$health->healthcarPhone}}<br />
                                <strong>WebSite : </strong> <a href="{{$health->healthcarWebSite}}">{{$health->healthcarWebSite}}</a><br />
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection