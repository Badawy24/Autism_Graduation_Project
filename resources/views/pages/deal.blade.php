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
                    <h2>{{ __('deal_translate.guideline') }}</h2>
                    <ol>
                        <div class="step">
                            <li>{{ __('deal_translate.sensory_activities_title') }}</li>
                            <p>{{ __('deal_translate.sensory_activities_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.communication_practice_title') }}</li>
                            <p>{{ __('deal_translate.communication_practice_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.outdoor_playtime_title') }}</li>
                            <p>{{ __('deal_translate.outdoor_playtime_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.reading_time_title') }}</li>
                            <p>{{ __('deal_translate.reading_time_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.mindfulness_relaxation_title') }}</li>
                            <p>{{ __('deal_translate.mindfulness_relaxation_content') }}</p>
                        </div>
                        {{--  --}}
                        <div class="step">
                            <li>{{ __('deal_translate.social_greetings_title') }}</li>
                            <p>{{ __('deal_translate.social_greetings_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.turn_taking_games_title') }}</li>
                            <p>{{ __('deal_translate.turn_taking_games_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.visual_schedule_checkins_title') }}</li>
                            <p>{{ __('deal_translate.visual_schedule_checkins_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.positive_affirmations_title') }}</li>
                            <p>{{ __('deal_translate.positive_affirmations_content') }}</p>
                        </div>
                        <div class="step">
                            <li>{{ __('deal_translate.daily_chores_title') }}</li>
                            <p>{{ __('deal_translate.daily_chores_content') }}</p>
                        </div>
                    </ol>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
