<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="https://i.imgur.com/rPSBLdw.png" width="30" height="30" alt="" />
    </a>
    <p class="navbar-brand"> | Blog</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Return to Intro </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('blog-index')}}">Blog Index </a>
            </li>
        </ul>
    </div>
</nav>