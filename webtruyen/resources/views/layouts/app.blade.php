<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Web đọc truyện</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="{{ asset('css/style.css') }}" type="" href="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bb5f64390.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="header">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container justify-content-between">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="https://st.nettruyentv.com/data/logos/logo-nettruyen.png">
                            </a>
                        </div>
                        <div class="navbar-nav ">                            
                                <form class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tim kiem" autocomplete="off">
                                        <div class="input-group-btn">
                                            <input type="submit" class="btn btn-default">
                                        </div>  
                                    </div>
                                </form>
                        </div>
                        

                        <div class="navbar-right" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                                                            
                            </ul>
 
                            <!-- Right Side Of Navbar-->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <div class="container">
                <div class="navbar-header" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Trang chủ <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="XepHangMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Xếp hạng
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Top tháng</a>
                        <a class="dropdown-item" href="#">Top tuần</a>
                        <a class="dropdown-item" href="#">Top ngàyngày</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="TheLoaiMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thể loại
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Manga</a>
                        <a class="dropdown-item" href="#">Manghua</a>
                        <a class="dropdown-item" href="#">Manwa</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tìm truyện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Theo dõi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lịch sử</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>

        <footer  class="bg-black text-white text-center text-lg-start footer" id="footer">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Web doc truyen</h5>
                        <a href="{{ route('home') }}">
                            <img src="https://st.nettruyentv.com/data/logos/logo-nettruyen.png" alt="logo">
                        </a>
                        <div class="mt-4">
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-facebook-f"></i></a>
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-dribbble"></i></a>
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-google-plus-g"></i></a>
                        </div>                       
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <p>
                            Từ khóa
                        </p>
                        <ul>

                        </ul>
                    </div>
                </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:Web truyện
                <a class="text-white" href="{{ route('home') }}">http://localhost:8012/webtruyen/home</a>
            </div>
        </footer>
    </div> 
</body>
</html>
