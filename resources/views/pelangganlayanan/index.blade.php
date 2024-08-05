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
    <link href="{{ asset('stylepelanggan.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        .card {
            display: flex;
            flex-direction: column;
            margin: 10px;
            width: 15rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            height: 22rem;
            /* Tetapkan tinggi yang sama untuk semua kartu */
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            /* Pastikan body kartu mengisi seluruh tinggi */
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
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
            border: none;
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            /* Jarak antara judul dan detail */
        }

        .card-text {
            margin-bottom: 0.5rem;
        }

        .service-price {
            font-weight: 700;
            margin-top: auto;
            /* Memastikan harga berada di bagian bawah */
        }

        .card-content {
            flex: 1;
            /* Agar konten mengisi ruang yang tersedia */
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
        }

        .my-float {
            margin-top: 16px;
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
                        style="height: 40px; width: 160px;"></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('pelanggan.index') }}"
                            style="font-weight: 700;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/layananpelanggan') }}"
                            style="font-weight: 700;">LAYANAN</a>
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
                                            onerror="this.onerror=null; this.src='{{ asset('storage/products/default.png') }}'"
                                            style="width: 100px; height: auto;">
                                        <h5 class="card-title">{{ $service->nama_layanan }}</h5>
                                        <p class="card-text">{{ $service->detail }}</p>
                                    </div>
                                    <hr class="divider">
                                    <p class="card-text service-price">{{ $service->harga }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark p-2 text-center mt-md-5">
        <!-- Footer content here -->
    </footer>

    <!-- All Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.btn-category').on('click', function() {
                var id_kategori = $(this).data('id');
                $.ajax({
                    url: '{{ url('/layananpelanggan/filter') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id_kategori: id_kategori
                    },
                    success: function(response) {
                        $('#service-list').html(
                            response);
                    },
                    error: function(xhr) {
                        console.error('AJAX request failed:', xhr
                            .responseText);
                    }
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</body>

</html>
