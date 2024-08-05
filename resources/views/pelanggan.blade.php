<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Selamat Datang</title>
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

        .header {
            text-align: center;
            position: absolute;
            top: 40%;
            left: 55%;
            transform: translate(-50%, -50);
        }

        .header h1 {
            text-align: left;
            font-family: sans-serif;
            font-size: 40px;
        }

        .col-img {
            position: absolute;
            top: 20%;
            left: 2%;
            transform: translate(-50%, -50);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pelanggan.index') }}"><span class="text-warning"><img
                        src="{{ asset('img/indibiz.png') }}" style="height: 40px; width: 160px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li>
                        <a class="nav-link" href="{{ route('logout') }}" role="button"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            data-bs-toggle="dropdown" aria-expanded="false" style="font-weight: 700;">
                            LOGOUT
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header">
        <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
    </div>
    <div class="col-img">
        <img src="{{ asset('img/20945851.jpg') }}" alt="" width="50%" height="50%">
    </div>
</body>

</html>
