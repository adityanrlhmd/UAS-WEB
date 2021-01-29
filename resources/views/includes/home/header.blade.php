<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
        <a class="navbar-brand" href="/"><img src="img/logo_sctv.png" alt="" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active ml-2">
                    <a class="nav-link" href="#"> JADWAL TV </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="{{route('program.index')}}"> PROGRAM </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="#"> NEWS </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="{{route('ginstagram.index')}}"> GALERI </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="#"> KONTAK KAMI </a>
                </li>

                <li class="nav-item ml-2">
                    <a class="nav-link" id="streaming" href="#">
                        <img src=" https://www.sctv.co.id//assets/images/material/radar_gerak.gif" alt="">
                        LIVE STREAMING
                    </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="#">
                        <img src="https://www.sctv.co.id//assets/images/material/icon_search.png" alt="">
                    </a>
                </li>
                <li>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                    <div class="btn-group ml-2" role="group" aria-label="Basic mixed styles example">
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</i></a>

                        @if (Route::has('register'))
                            <a class="btn btn-success" href="{{ route('register') }}">Register</i></a>
                        @endif
                    </div>

                    @endauth
                </div>
            @endif
                </li>
            </ul>
        </div>
    </nav>
</header>
