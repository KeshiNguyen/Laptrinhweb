@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <form>
        <div class="header" id="header">
            <div class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <a class="logo" title="Web doc truyen" href="">
                                <img src="//st.nettruyentv.com/data/logos/logo-nettruyen.png" width="200">
                            </a>
                        </div>
                        <div class="navbar-form navbar-left hidden-xs search-box comicsearchbox">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Tim kiem..." aria-label="Search">
                            </form>
                    </div>
                    <div class="notification"> 
                        <a href="#" title="thong bao">
                            <!-- Lay thong tin ve cmt -->
                        </a>
                    </div>
                    <ul class="nav-account list-inline hidden-xs pull-right">
                        <li class="login-link">
                            <a rel="nofollow" href="{{ route('login') }}">
                            Dang nhap
                            </a>
                        </li>
                        <li class="regiter-link">
                            <a rel="nofollow" href="{{ route('register') }}">
                            Dang ky
                            </a>
                        </li>
                    </ul>
                </div>  
            </div>
        </div>

        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{route('home'}">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hot</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Xep hang
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Top thang</a>
                                <a class="dropdown-item" href="#">Top tuan</a>
                                <a class="dropdown-item" href="#">Top ngay</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            The loai
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Manga</a>
                            <a class="dropdown-item" href="#">Manwa</a>
                            <a class="dropdown-item" href="#">Manhua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Tim truyen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Theo doi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lich su</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <main class="main">
            <div class="container">
                <div class="navbar-left">
                    <div class= "container-fluid">
                        <h4>Truyện mới cập nhật</h4>
                        <div class= "row">
                            <div class ="col-12 col-sm-6 col-md-4 ">
                                <a class="comic1" href="">
                                    <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcfqOIjHfN7epiTT-cfutaScSS9_qL7wjoAY6xV4Zu0nyCMmJAmspembuBB1insem2BoE&usqp=CAU" width="200" style="">
                                    <p class="nameofcomic">
                                        nameofcomic
                                    </p>
                                    <ul>
                                        <li>chap1</li>
                                        <li>chap2</li>
                                        <li>chap3</li>
                                    </ul>
                                </a>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4 ">
                                <a class="comic2" href="https://www.nettruyentv.com/truyen-tranh/lua-chon-than-cap-ta-khong-theo-sao-lo-manh-len-71621">
                                    <img class="img" src="https://st.ntcdntempv3.com/data/comics/197/lua-chon-than-cap-ta-khong-theo-sao-lo-m-6128.jpg" >
                                    <p class="nameofcomic">
                                        nameofcomic2
                                    </p>
                                    <lu>
                                        <li>chap1</li>
                                        <li>chap1</li>
                                        <li>chap1</li>
                                    </lu>

                                </a>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                            <div class ="col-12 col-sm-6 col-md-4">
                                <p>.col-12 .col-sm-6 .col-md-4</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar-right">

                </div>
            </div>
        </main>
        <div class="footer">
            <footer class="bg-primary text-white text-center text-lg-start">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Web doc truyen</h5>
                        <a class="logo">
                            <img src="https://tvmcomics.com.vn/wp-content/uploads/2019/11/nhan-vat-nu-anime-dep.jpg" width="150"  alt="">
                        </a>
                        
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                        </ul>
                    </div>
                
                    <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
                </footer>
        </div>
    </form>
</div>
@endsection  