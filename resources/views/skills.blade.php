@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ secure_asset('css/skills.css') }}">
@endpush

@section('content')

    <div id="web-header-skills">
        
    </div>

    <div class="skills-body-container">
        <div class="content-container shadow p-3 mb-5 bg-white rounded">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <p>hello1</p>
                    <p>hello2</p>
                </div>
            </div>
        </div>
    </div>

    <div id="web-footer-skills">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>

@endsection