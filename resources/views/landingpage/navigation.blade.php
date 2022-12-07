<nav class="navbar navbar-expand-lg fixed-top navbar-static-top navbar-light bg-light ">
    <a class="navbar-brand mr-auto mr-lg-0 d-inline" href="#">
        <img src="assets/image/logo-brand.png" alt="" srcset="">
    </a>
    <div class="container navbar-wrapper mr-auto">
        <button class="navbar-toggler p-0 border-0 ml-auto" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-2">
                <li class="nav-item active">
                    <a class="nav-link" href="beranda">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#rek">Rekomendasi Kos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#kost">Kost</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#tes">Testimoni</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#tentang">About</a>
                </li>
            </ul>
            <div class="ml-auto button-navbar d-flex">
                <!-- Added -->
                @guest
                <a class="btn btn-custom" href="login" type="button">Login</a>
                <a class="btn daftar" href="daftar" type="button">Daftar</a>
                @endguest
                @auth
                <div class="dropdown">
                    <button class="btn btn-secondary name dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                        @php
                        $role = Auth::user()->role
                        @endphp
                        @if( $role === "pemilik")
                        <a class="dropdown-item" href="dashboards">Dashboard Pemilik</a>
                        @endif
                        <a class="dropdown-item" href="#"
                            onclick="document.getElementById('form-logout').submit()">Logout</a>
                        <form action="{{ route('logout') }}" method="post" id="form-logout">
                            @csrf
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>