@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Them the loai truyen</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <!-- <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
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
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
