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
                        <a class="nav-link" aria-current="page" href="{{ route('pelangganlaporan.index') }}"
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
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="col-md-12 mt-md-5">
                <div class="section-header text-center pb-5">
                    <h2>Form Laporan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur<br>
                        adipisicing elit. Non, quo.</p>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 50px">
                <div class="col-lg-10">
                    <form action="{{ route('pelangganlaporan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" id="nama" placeholder="Nama" type="text" name="nama"
                                id="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                name="no_telp" id="no_telp" placeholder="No. Telp" value="{{ old('no_telp') }}">
                            @error('no_telp')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                name="no_pelanggan" id="no_pelanggan" placeholder="No. Pelanggan"
                                value="{{ old('no_pelanggan') }}">
                            @error('no_pelanggan')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="masalah" id ="masalah" rows="5" placeholder="Detail" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit"
                                style="background: #3498db; margin-top: 50px;
border: 0;
padding: 10px 24px;
color: #fff;
transition: 0.4s;
border-radius: 4px;">Send
                                Form</button></div>
                    </form>
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
