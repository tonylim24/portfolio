@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
@endpush

@section('content')
    <div id="web-header-blog">
        {{-- React DOM Manipulation: js/components/HeaderBlog.js --}}
    </div>

    <div class="body-container">
        <div class="subtitle">
            <h4>Blog</h4>
        </div>
        <div class="blog-container" id="blog">
            <a href="{{route('gitdocs')}}">
                <div class="blog-content bg-grad-peach shadow p-3 mb-5 rounded">
                    <h1 class="blog-title">Basic Git Commands</h1>
                    <div class="blog-image">
                        <img src="{{secure_asset('images/logos/git-h150px.png')}}" />
                    </div>
                    <p class="blog-description">Basic git commands that are commonly used during production.</p>
                </div>
            </a>
            <div class="blog-content bg-grad-blueshade shadow p-3 mb-5 rounded">
                <h1 class="blog-title text-white">Basic Laravel OOP Concept</h1>
                <div class="blog-image">
                    <img src="{{secure_asset('images/logos/Laravel-h150px.png')}}" />
                </div>
                <p class="blog-description text-white">Laravel OOP guide by using layouts and routes.</p>
            </div>
            <div class="blog-content bg-grad-underwater shadow p-3 mb-5 rounded">
                <h1 class="blog-title text-white">Random Number Generator</h1>
                <div class="blog-image">
                    <img src="{{secure_asset('images/dice.png')}}" />
                </div>
                <p class="blog-description text-white">Laravel app to generate random numbers.</p>
            </div>
        </div>
    </div>

    <div id="web-footer">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>
    
@endsection