<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Green Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <link href="{{ asset('stylepelanggan.css') }}" rel="stylesheet">
    <style>
        .about i {
            font-size: 30px;
            color: #3498db;
        }

        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        .services .icon-box {
            padding: 30px;
            border-radius: 6px;
            background: #fff;
            transition: ease-in-out 0.3s;
        }

        .services .icon-box i {
            float: left;
            color: #3498db;
            font-size: 40px;
            line-height: 0;
        }

        .services .icon-box h4 {
            margin-left: 70px;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .services .icon-box h4 a {
            color: #384046;
            transition: 0.3s;
        }

        .services .icon-box p {
            margin-left: 70px;
            line-height: 24px;
            font-size: 14px;
        }

        .services .icon-box:hover {
            box-shadow: 0px 2px 22px rgba(0, 0, 0, 0.08);
        }

        .services .icon-box:hover h4 a {
            color: #3498db;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning"><img src="{{ asset('img/indibiz.png') }}"
                        style="height: 40px; width: 160px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" style="font-weight: 700;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" style="font-weight: 700;">LAYANAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('pelangganlaporan.create') }}"
                            style="font-weight: 700;">LAPORAN</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="font-weight: 700;">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Edit Profil</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/cover1.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <section class="contact section-padding" id="contact">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-3">
                        <img src="{{ asset('img/indibiz.png') }}" style="height: 60px; width: 210px;">
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-3">
                    <!--for getting the form download the code from download button-->
                </div>
            </div> --}}
        </div>
    </section>
    <section id="about" class="about">
        <div class="container mb-5">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-1 pt-lg-0">
                    <h3>About Us</h3>
                    <p>
                        Indibiz by Telkom Indonesia hadir sebagai solusi inovatif untuk memenuhi kebutuhan akses
                        internet dengan dukungan konektivitas yang handal bagi pengembangan UKM di era modern dan
                        digital saat ini.

                        Tujuan dari Indibiz adalah untuk mendukung pertumbuhan bisnis, dengan menyediakan berbagai
                        solusi digital yang dapat dimanfaatkan oleh para pelaku usaha untuk menciptakan lebih banyak
                        peluang bisnis
                    </p>
                    <div class="row icon-boxes">
                        <div class="col-md-6">
                            <i class="bi bi-wifi"></i>
                            <h4>Corporis voluptates sit</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <i class="bi bi-speedometer2"></i>
                            <h4>Ullamco laboris nisi</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="services" class="services section-bg" style="background-color: #9ecff0; padding-bottom:40px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-md-5">
                    <div class="section-header text-center pb-5">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>

            <div class="row gx-4  row-cols-2 row-cols-md-3 row-cols-xl-3 gy-4 justify-content-center">
                <?php
       foreach ($kategoris as $kategori){ ?>
                <div class="col-md-3">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">{{ $kategori->nama_kategori }}</a></h4>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        </div>

        </div>
    </section>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
