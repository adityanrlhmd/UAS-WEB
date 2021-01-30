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
                    <a class="nav-link" href="{{route('tv.index')}}"> JADWAL TV </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="{{route('program.index')}}"> PROGRAM </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="{{route('berita.index')}}"> NEWS </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="{{route('ginstagram.index')}}"> GALERI </a>
                </li>
                <li class="nav-item active ml-2">
                    <a class="nav-link page-scroll" href="#kontak" > KONTAK KAMI </a>
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
                <li class="dropdown no-arrow ">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user" style="color: blue"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}" class="ml-5" style="text-decoration: none" >Admin</a>
                                @else
                                    <a href="{{ route('login') }}" class="ml-4" style="text-decoration: none">Login</i></a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" style="text-decoration: none">Register</i></a>
                                    @endif

                                @endauth
                            </div>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
