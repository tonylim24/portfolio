@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
    {{-- <div id="web-header">
        
    </div> --}}

    <div class="body-container">
        <div class="body-content-container-hero">
            <div class="tl-logo">
                <img src="https://i.imgur.com/4uU2FGB.png">
            </div>
            <div class="profile-container">
                <div class="profile-name-description">
                    <h1>Tony Lim</h1><br />
                    <h2>Aspiring to grow in the web and software development industry on a world class level.</h2>
                    <br>
                </div>
            </div>
            <hr>
        </div>
        
        <div class="body-content-container-resume" id="resume">
            <div class="resume-title">
                <h3>Resume</h3>
            </div>
            <div class="resume-image">
                <img id="resume-image" src="{{ asset('images/WEB_RESUME_A4_96PPI.jpg')}}">
            </div>
        </div>

    </div>

    <div id="web-footer">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>
    
@endsection