@extends('pages.main-template')

@section('navbar')
@include('pages.navbar_after_login')
@endsection

@section('content')
<div class="avoid-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="avoid-content">
                    <h2>{{ __('avoid_translate.guideline') }}</h2>
                    <ol>
                        <div class="step">
                            <li>{{ __('avoid_translate.excitement_title') }}</li>
                            <p>{{ __('avoid_translate.excitement_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('avoid_translate.follow_baby_title') }}</li>
                            <p>{{ __('avoid_translate.follow_baby_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('avoid_translate.use_sing_title') }}</li>
                            <p>{{ __('avoid_translate.use_sing_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('avoid_translate.turns_title') }}</li>
                            <p>{{ __('avoid_translate.turns_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('avoid_translate.spotlight_title') }}</li>
                            <p>{{ __('avoid_translate.spotlight_content') }}</p>
                        </div>
                    </ol>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
