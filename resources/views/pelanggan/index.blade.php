<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>INDIBIZ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


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

        .instansi-logos {
            overflow: hidden;
            white-space: nowrap;
            padding: 20px 0;
            background-color: #f0f0f0;
            position: relative;
            width: 100%;
        }

        .logo-wrapper {
            display: flex;
            flex-wrap: nowrap;
            width: calc(200%);
            animation: scroll 30s linear infinite;
        }

        .logo-item {
            display: inline-block;
            margin: 0 15px;
        }

        .logo-content {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .logo-item img {
            max-width: 100px;
            height: auto;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .carousel-image-wrapper {
            position: relative;
        }

        .carousel-image-wrapper img {
            display: block;
            width: 100%;
            height: auto;
        }

        .carousel-image-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
            z-index: 1;
        }

        .carousel-caption {
            position: absolute;
            bottom: 20px;
            /* left: 20px; */
            width: 80%;
            z-index: 2;
            top: 40%;
            left: 52%;
            transform: translate(-50%, -50);
            color: #fff;
        }

        .carousel-caption h5 {

            text-align: left;
            font-size: 50px;
            margin-bottom: 10px;
            font-weight: bold;

        }

        .carousel-caption p {
            text-align: left;
            font-size: 25px;
        }

        .faq .accordion-button {
            font-size: 18px;
            font-weight: 600;
        }

        .faq .accordion-body {
            font-size: 16px;
        }

        .faq .section-header h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .faq .section-header p {
            font-size: 1.25rem;
            color: #666;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .float:hover {
            background-color: #128C7E;
            /* Warna hijau gelap saat hover */
        }

        .my-float {
            margin-top: 16px;
        }

        .modal-content {
            border-radius: 8px;
            padding: 20px;
        }

        .modal-header {
            border-bottom: 1px solid #ddd;
        }

        .modal-footer {
            border-top: 1px solid #ddd;
            text-align: right;
        }

        .card {
            display: flex;
            flex-direction: column;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: 300px;
            /* Lebar kartu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            flex: 1;
            /* Memastikan body kartu mengisi ruang yang tersedia */
        }

        .services-container {
            padding-top: 30px;
            display: grid;
            flex-wrap: wrap;
            gap: 16px;
            margin-left: -60px;
            grid-template-columns: repeat(4, 1fr);
            /* Jarak antar kartu */
        }

        .category-section {
            text-align: center;
        }

        .category-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .divider {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 16px 0;
        }

        .card-title {
            font-size: 1.25rem;
            margin: 16px 0 8px;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .service-price {
            font-size: 1rem;
            font-weight: bold;
            margin: 8px 0;
            text-align: center;
            background-color: #007bff;
            width: 100px;
            color: #fff;
            border-radius: 4px;
            padding: 8px 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            display: inline-block;
            border: 1px solid #007bff;
        }

        .card-content {
            flex: 1;
        }

        .card-content img {
            width: 100%;
            /* Membuat gambar sesuai lebar kartu */
            height: 200px;
            /* Tinggi gambar */
            object-fit: cover;
            /* Memastikan gambar terpotong dengan baik */
            display: block;
        }

        .btn-category.active {
            background-color: #2c3e50;
            color: white;
            border: 1px solid #1a242f;
        }

        .card {
            margin-bottom: 1rem;
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
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" style="font-weight: 700;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/layananpelanggan') }}"
                            style="font-weight: 700;">LAYANAN</a>
                    </li>
                </ul>
                </li>
                </ul>
            </div> --}}
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-image-wrapper">
                    <img src="{{ asset('img/cover1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat datang di IndiBiz</h5>
                    <p>Temukan solusi bisnis terbaik bersama kami</p>
                </div>
            </div>
        </div>
    </div>
    <div class="instansi-logos">
        <div class="container">
            <div class="row no-gutters">
                <div class="logo-wrapper">
                    <!-- List of logos (duplicate for smooth scroll) -->
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 2">
                    </div>
                    <!-- Tambahkan lebih banyak logo di sini -->
                    <!-- Duplicate -->
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('img/tel-u.png') }}" class="img-fluid" alt="Logo 2">
                    </div>
                    <!-- Tambahkan lebih banyak logo di sini -->
                </div>
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
                        <p>Indibiz adalah ekosistem solusi digital dunia usaha dari Telkom Indonesia yang membantu
                            pebisnis menciptakan peluang dan mewujudkan harapannya.
                            Indibiz menawarkan beragam layanan yang bisa disesuaikan dengan kebutuhan penggunanya karena
                            hadir dengan berbagai layanan seperti Indibiz Education, Indibiz Ruko, Indibiz Hotel, dan
                            Indibiz Finance.
                        </p>
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
                            <h4>Paket Menarik</h4>
                            <p>Tersedia berbagai macam penawaran paket spesial untuk Anda.</p>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <i class="bi bi-speedometer2"></i>
                            <h4>Koneksi Cepat</h4>
                            <p>Koneksi yang cepat untuk mendukung Anda.</p>
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
                        <h2>Produk Kami</h2>
                        <p>Jelajahi Solusi Digitalisasi Bisnis dari Indibiz</p>
                    </div>
                </div>
            </div>

            <div class="row gx-4 row-cols-2 row-cols-md-3 row-cols-xl-3 gy-4 justify-content-center">
                <?php foreach ($kategoris as $kategori) { ?>
                <div class="col-md-3">
                    <div class="icon-box" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $kategori->id; ?>">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#"><?php echo $kategori->nama_kategori; ?></a></h4>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <!-- Sidebar for Categories -->
                <div class="col-12">
                    <div class="category-section">
                        <h3 style="font-weight: 600">DAFTAR KATEGORI</h3>
                        <div class="category-buttons col-12">
                            @foreach ($categories as $category)
                                <button class="btn btn-primary btn-category" data-id="{{ $category->id }}">
                                    {{ $category->nama_kategori }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Services -->
                <div class="col-12">
                    <div id="service-list" class="services-container">
                        @foreach ($services as $service)
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <img src="{{ asset('storage/products/' . $service->gambar) }}" alt="Gambar"
                                            onerror="this.onerror=null; this.src='{{ asset('storage/products/default.png') }}'">
                                        <h5 class="card-title">{{ $service->nama_layanan }}</h5>
                                        <p class="card-text">{{ $service->detail }}</p>
                                    </div>
                                    <p class="card-text service-price">{{ $service->harga }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <?php foreach ($kategoris as $kategori) { ?>
    <div class="modal fade" id="modal-<?php echo $kategori->id; ?>" tabindex="-1"
        aria-labelledby="modalLabel-<?php echo $kategori->id; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel-<?php echo $kategori->id; ?>">Apa itu <?php echo $kategori->nama_kategori; ?>?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><?php echo $kategori->deskripsi; ?></p>
                    <p style="font-weight: 700;">KELEBIHAN</p>
                    <p><?php echo $kategori->kelebihan; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <section id="faq" class="faq section-padding">
        <div class="container mt-5 mb-5">
            <div class="section-header text-center pb-3">
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <p>Temukan jawaban untuk pertanyaan umum di sini</p>
            </div>
            <div class="accordion" id="accordionFAQ">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apa itu IndiBiz?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            IndiBiz adalah ekosistem solusi digital dari Telkom Indonesia yang dirancang untuk membantu
                            pebisnis mengembangkan usaha mereka melalui berbagai layanan digital.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana cara mendaftar di IndiBiz?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Anda dapat mendaftar melalui situs web IndiBiz dengan mengikuti petunjuk pendaftaran yang
                            tersedia. Setelah mendaftar, Anda akan mendapatkan akses ke berbagai layanan yang kami
                            tawarkan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Apakah ada biaya untuk menggunakan layanan IndiBiz?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Beberapa layanan di IndiBiz mungkin memerlukan biaya tergantung pada jenis layanan yang Anda
                            pilih. Kami menyediakan informasi rinci tentang biaya dan paket di situs web kami.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact section-bg" style="background-color: #9ecff0; padding-bottom:40px;">
        <div class="container">
            <div class="col-md-12 mt-md-5" style="padding-top:40px;">
                <div class="section-header text-center pb-5">
                    <h2>Form Laporan</h2>
                    <p>Laporkan segala kendala Anda kepada kami.</p>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 50px">
                <div class="col-lg-10">
                    <form id="report-form" action="{{ route('pelangganlaporan.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" id="nama" placeholder="Nama" value="{{ old('nama') }}">
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
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('no_pelanggan') is-invalid @enderror"
                                name="no_pelanggan" id="no_pelanggan" placeholder="No. Pelanggan"
                                value="{{ old('no_pelanggan') }}">
                            @error('no_pelanggan')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="masalah" id="masalah" rows="5" placeholder="Detail" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                style="background: #3498db; margin-top: 50px; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Send
                                Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle category button click
            document.querySelectorAll('.btn-category').forEach(button => {
                button.addEventListener('click', function() {
                    let categoryId = this.getAttribute('data-id');
                    fetch(`/filter/${categoryId}`)
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('service-list').innerHTML = data;
                        })
                        .catch(error => console.error('Error fetching filtered services:', error));
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-category');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    buttons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

</body>

</html>
