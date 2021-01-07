@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
@endpush

@section('content')
    <div id="web-header-blog">
        {{-- React DOM Manipulation: js/components/HeaderMain.js --}}
    </div>

    <div class="body-container" id="hatchways-frontend-assessment">

        <p class="text-muted">All trademarks are the property of their respective owners.</p>
    </div>

    <div id="web-footer">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>
    
@endsection