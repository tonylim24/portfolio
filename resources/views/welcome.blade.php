@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
@endpush

@section('content')
    <div id="web-header">
        {{-- React DOM Manipulation: js/components/HeaderMain.js --}}
    </div>

    <div class="body-container">
        <div class="body-content-container-hero" id="intro">
            <div class="tl-logo">
                <img src="https://i.imgur.com/4uU2FGB.png">
            </div>
            <div class="profile-container">
                <div class="profile-name-description">
                    <h1>Tony Lim</h1>
                    <h2>Web / Software Developer</h2>
                    <h3>Grow, Conceptualize, Develop, Exceed. </h3>
                    <br> 
                    <div class="technology-container">
                        <a href="{{url('/skills')}}"><p>Development Technologies:</p></a><br>
                        {{-- Show if screen width > 1366px, refer to css. --}}
                        <div class="dev-logos" id="dev-technology-logos-desktop">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/Laravel.png') }}" alt="Laravel" title="Laravel" />
                            <img src="{{ asset('images/logos/ReactJS.png') }}" alt="ReactJS" title="ReactJS" />
                            <img src="{{ asset('images/logos/MySQL.png') }}" alt="MySQL" title="MySQL" />
                            <img src="{{ asset('images/logos/CSS.png') }}" alt="CSS" title="CSS" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/java.png') }}" alt="Java" title="Java" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/python.png') }}" alt="Python" title="Python" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/bootstrap.png') }}" alt="Bootstrap" title="Bootstrap" class="img-add-left-padding" />
                            <a href="{{url('/skills')}}">
                                <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" class="img-add-left-padding" />
                            </a>
                        </div>

                        {{-- Show if screen width < 1365px --}}
                        <div class="dev-logos" id="dev-technology-logos-mobile">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/Laravel.png') }}" alt="Laravel" title="Laravel" />
                            <img src="{{ asset('images/logos/ReactJS.png') }}" alt="ReactJS" title="ReactJS" />
                            <a href="{{url('/skills')}}">
                                <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" />
                            </a>
                        </div>
                        <br>
                        <a href="{{url('/skills')}}"><p>Environment: </p></a><br>
                        {{-- Show if screen width > 1366px, refer to css. --}}
                        <div class="dev-logos" id="dev-environment-logos-desktop">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/windows.png') }}" alt="Microsoft Windows" title="Microsoft Windows" />
                            <img src="{{ asset('images/logos/linux.png') }}" alt="Linux" title="Linux" title="Linux" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/adobecc.png') }}" alt="Adobe Creative Cloud" title="Adobe Creative Cloud" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/git.png') }}" alt="Git" title="Git" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/nodejs.png') }}" alt="Node JS" title="Node JS" class="img-add-left-padding" />
                            <a href="{{url('/skills')}}">
                                <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" class="img-add-left-padding-15" />
                            </a>
                            </div>
                        {{-- Show if screen width < 1365px --}}
                        <div class="dev-logos" id="dev-environment-logos-mobile">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/windows.png') }}" alt="Windows" title="Windows" />
                            <img src="{{ asset('images/logos/git.png') }}" alt="Git" title="Git" class="img-add-left-padding" />
                            <a href="{{url('/skills')}}">
                                <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" class="img-add-left-padding-15" />
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <hr>
        </div>
        
        <div class="subtitle">
            <h4>Resume</h4>
            <div>
                <a href="{{route('downloadResume')}}">
                    <i data-feather="download" class="small-icon" style="display: inline-block"></i><small class="instruction" style="display:inline"> Click to Download </small>
                </a>
            </div>
            <div>
                <i data-feather="maximize-2" class="small-icon" style="display: inline-block"></i><small class="instruction"> Click on the image to expand</small>
            </div>
        </div>
        <div class="body-content-container-resume shadow p-3 mb-5 bg-white rounded" id="resume">
            <div class="resume-image">
                <a href="{{asset('images/WEB_RESUME_A4_96PPI.jpg')}}" data-fancybox data-caption="Resume">  
                    <img id="resume-image" src="{{ asset('images/WEB_RESUME_A4_96PPI.jpg')}}" alt="resume">
                </a>
            </div>
            <hr>
        </div>

        <div class="subtitle">
            <h4>Work & Projects</h4>
            <small class="instruction" style="display:inline"> Click to view gallery or go into a live webpage. </small>
        </div>
        <div class="body-content-container-projects p-3 mb-5 bg-white rounded" id="projects">
            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    {{-- DataCore Images Gallery --}}
                    <a href="{{asset('/images/datacore/datacore-index.jpg')}}" data-fancybox="gallery" data-caption="DataCore Index Page.">
                        <img src="{{asset('/images/datacore/datacore-index.jpg')}}" alt="Lee's Electronic's DataCore" />
                    </a>
                    <a href="{{asset('/images/datacore/datacore-search.jpg')}}" data-fancybox="gallery" data-caption="DataCore Search Page."></a>
                    <a href="{{asset('/images/datacore/create_order.jpg')}}" data-fancybox="gallery" data-caption="DataCore behaving as online POS system to create order. Payments are done through Beanstream Payment API."></a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">DataCore</p>
                    <p class="project-text">
                        Business centric web application to assist Lee's Electronic Components in daily operations. 
                        Developed using Laravel, Bootstrap, JQuery, AJAX, PHP, CSS, JS, Bambora API, and SQL.
                    </p><br>
                    <small class="project-text">Due to customer's and Lee's Electronic's privacy, only screenshots will be provided.</small>
                </div>
            </div>

            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    {{-- <a href="#" target="_blank" rel="noreferrer">
                        <img src="{{asset('/images/coreui-index.jpg')}}" alt="Lee's Electronic's CoreUI"> 
                    </a> --}}
                    <a href="{{asset('/images/coreui/coreui-index.jpg')}}" data-fancybox="gallery" data-caption="DataCore's Backend (CoreUI)'s Index Page.">
                        <img src="{{asset('/images/coreui/coreui-index.jpg')}}" alt="Lee's Electronic's DataCore" />
                    </a>
                    <a href="{{asset('/images/coreui/coreui-analytics.jpg')}}" data-fancybox="gallery" data-caption="CoreUI is used to provide admins with statistics and business insights."></a>
                    <a href="{{asset('/images/coreui/coreui-calendar.jpg')}}" data-fancybox="gallery" data-caption="Each individual users have access to their own calendar. Shift schedules and statutory holidays are automatically filled by using Python script."></a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">CoreUI</p>
                    <p class="project-text">
                        DataCore's backend system to assist with administration procedures. Database is synced with
                         point of sale system with shell scripts and CSV imports.
                    </p><br>
                    <small class="project-text">Due to customers' and Lee's Electronic's privacy, only screenshots will be provided.</small>
                </div>
            </div>

            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    <a href="https://tonylim-portfolio.herokuapp.com/" target="_blank" rel="noreferrer">
                        <img src="{{asset('/images/portfolio.jpg')}}" alt="Portfolio"> 
                    </a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">PERSONAL PORTFOLIO</p>
                    <p class="project-text">
                        Responsive personal portfolio developed locally with MAMP, Nginx, Laravel, CSS, Bootstrap, React, and deployed with Heroku.
                    </p>
                </div>
            </div>

            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    <a href="http://www.tngames.ca" target="_blank" rel="noreferrer">
                        <img src="{{asset('/images/tngames.jpg')}}" alt="T&N Games"> 
                    </a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">T&N Games</p>
                    <p class="project-text">
                        Modern and simple website developed using HTML, Bootstrap, CSS, and Google APIs. The idea behind 
                        the website is so that it can be maintained without any web development knowledge.
                    </p>
                </div>
            </div>

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
                <a href="https://tonylim-hatchways-frontend.netlify.app/" target="_blank">
                    <div class="blog-content bg-grad-blueshade shadow p-3 mb-5 rounded">
                        <h1 class="blog-title text-white">Displaying API with React</h1>
                        <div class="blog-image">
                            <img src="{{secure_asset('images/logos/ReactJS.png')}}" />
                        </div>
                        <p class="blog-description text-white">Hatchways' assessment to display API using React JS. <br /> 
                            For code please check GitHub repository "frontend-react-api".
                        </p>
                    </div>
                </a>
                <div class="blog-content bg-grad-underwater shadow p-3 mb-5 rounded">
                    <h1 class="blog-title text-white">Random Number Generator</h1>
                    <div class="blog-image">
                        <img src="{{secure_asset('images/dice.png')}}" />
                    </div>
                    <p class="blog-description text-white">Laravel app to generate random numbers.</p>
                </div>
                <a href="{{route('blog-index')}}">
                    <div class="blog-content bg-grad-stpetersburg shadow p-3 mb-5 rounded">
                        <h1 class="blog-title">And More!</h1>
                        <div class="blog-image">
                            <img src="{{secure_asset('images/more-150px.png')}}" />
                        </div>
                        <p class="blog-description">Eventually, more blog posts will be listed here!</p>
                    </div>
                </a>
            </div>
        </div>
        {{-- End Work, Projects, and Blog Container --}}

        <div id="canvas-container" class="w-100"></div>

        <p class="text-muted">All trademarks are the property of their respective owners.</p>
    </div>

    <div id="web-footer">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>
    
@endsection

@push('bottom-scripts')
    <script>
        var renderer, scene, camera, card;

        init();
        animate();

        function init() {

            var container = document.getElementById('canvas-container');
            var w = container.offsetWidth;
            var h = container.offsetHeight;

            // renderer
            renderer = new THREE.WebGLRenderer();
            // renderer.setSize( window.innerWidth, window.innerHeight );
            renderer.setSize( w, h );
            renderer.setClearColor("#FFFFFF");

            // Get DOM to Render
            container.appendChild( renderer.domElement );

            // document.body.appendChild( renderer.domElement );

            // scene
            scene = new THREE.Scene();
            
            // camera
            camera = new THREE.PerspectiveCamera( 75, w / h, 1, 1000 );
            camera.position.z = 6;
            camera.lookAt( scene.position );
            
            // geometry
            var geometry1 = new THREE.PlaneGeometry( 7, 4, 1, 1 );            
            var geometry2 = new THREE.PlaneGeometry( 7, 4, 1, 1 );            
            geometry2.applyMatrix( new THREE.Matrix4().makeRotationY( Math.PI ) );
                
            // textures

            const textureFront = new THREE.ImageUtils.loadTexture("storage/images/card-front.png");
            const textureBack = new THREE.ImageUtils.loadTexture("storage/images/card-back.png");

            // materials
            var material1 = new THREE.MeshPhongMaterial( { map: textureFront } );
            var material2 = new THREE.MeshPhongMaterial( { map: textureBack } );
            
            // card
            card = new THREE.Object3D();
            scene.add( card );

            const light = new THREE.PointLight(0xffffff, 1, 1000);
            light.position.set(0, 0, 50);
            scene.add(light);
            
            // mesh
            var mesh1 = new THREE.Mesh( geometry1, material1 );
            card.add( mesh1 );
            var mesh2 = new THREE.Mesh( geometry2, material2 );
            card.add( mesh2 );
            
        }

        function animate() {

            requestAnimationFrame( animate );
            
            card.rotation.y += 0.007;
            
            renderer.render( scene, camera );
            
        }
    </script>

    <script>
        var container = document.getElementById('canvas-container');
        console.log(container.offsetWidth);
        console.log(container.offsetHeight);

    </script>
    
@endpush