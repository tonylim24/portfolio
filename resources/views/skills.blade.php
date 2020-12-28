@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ secure_asset('css/skills.css') }}">
@endpush

@section('content')

    <div class="main-container"></div>
        <div class="image-container">
            <div class="main-container-title bg-white">
                <h1>SKILLS</h1>
            </div>
            <div class="body-container">
                <nav class="navbar navbar-expand-lg">
                    <div>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Full Stack</a>
                                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item waves-effect waves-light" href="#">HTML</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">AJAX</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">CSS</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Bootstrap</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Laravel</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">PHP</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">React JS</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">JavaScript</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">JQuery</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">JSON / XML / CSV</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Java</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Python</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">C++</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">MySQL</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">PostgreSQL</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">PHPMyAdmin</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Environment</a>
                                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Microsoft Windows</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Linux Ubuntu</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Raspberry Pi NOOBS</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Git</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Cmder</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Visual Studio Code</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">IntelliJ IDEA</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Composer</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Node</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">PHP Artisan</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Google Chrome</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Mozilla Firefox</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
                                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Adobe Creative Cloud</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Adobe Photoshop</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Adobe XD</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Skype</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Zoom</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Slack</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Trello</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">ClickUp</a>
                                    <hr>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Prestashop</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Currently Learning</a>
                                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Redux</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="web-footer">
            {{-- React DOM Manipulation: js/components/Footer.js --}}
        </div>
    </div>

@endsection