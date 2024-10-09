<header id="header" class="fixed-top" style="background-color: #37517e">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto">
            <a href="{{ route('landing') }}">Ma<span class="text-info">ma</span>nin</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="{{ route('landing') }}#hero">Beranda</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('landing') }}#about">Tentang</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('landing') }}#portfolio">Blog Post</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('landing') }}#team">Team</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('landing') }}#contact">Kontak</a>
                </li>
                <li>
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/home') }}" class="getstarted scrollto">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="getstarted scrollto">Masuk</a>
                        @endauth
                    </div>
                    @endif
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>