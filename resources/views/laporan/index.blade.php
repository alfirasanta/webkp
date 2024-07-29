<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Custom fonts for this template-->
    <link href="{{ asset('all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3498db">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">HALO, {{ Auth::user()->name }}!</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('adminlayanan.index') }}">
                    <span>Layanan</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('adminkategori.index') }}">
                    <span>Kategori</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="{{ route('adminlaporan.index') }}">
                    <span>Laporan</span>
                </a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">Log Out</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Laporan</h1>

                    </div>
                    <div class="container-fluid py-3">
                        <div class="container">
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #3498db; color: white" scope="col">No. </th>
                                            <th style="background-color: #3498db; color: white" scope="col">Nama</th>
                                            <th style="background-color: #3498db; color: white" scope="col">No. Telp
                                            </th>
                                            <th style="background-color: #3498db; color: white" scope="col">Alamat
                                            </th>
                                            <th style="background-color: #3498db; color: white" scope="col">No.
                                                Pelanggan</th>

                                            <th style="background-color: #3498db; color: white" scope="col">Masalah
                                            </th>
                                            <th style="background-color: #3498db; color: white" scope="col">Solusi
                                            </th>
                                            <th style="background-color: #3498db; color: white" scope="col">Status
                                            </th>
                                            <th style="background-color: #3498db; color: white" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporans as $index => $laporan)
                                            <tr>
                                                <th style="background-color: white;" scope="row">{{ $index + 1 }}
                                                </th>
                                                <td style="background-color: white;">{{ $laporan->nama }}</td>
                                                <td style="background-color: white;">{{ $laporan->no_telp }}</td>
                                                <td style="background-color: white;">{{ $laporan->alamat }}</td>
                                                <td style="background-color: white;">{{ $laporan->no_pelanggan }}</td>
                                                <td style="background-color: white;">{{ $laporan->masalah }}</td>
                                                <td style="background-color: white;">{{ $laporan->solusi }}</td>
                                                <td style="background-color: white;">
                                                    {{ $laporan->status->nama_status }}</td>
                                                <td style="background-color: white;">
                                                    <form>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('adminlaporan.edit', [$laporan->id]) }}">Jawab</a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>No. Pelanggan</th>
            <th>Nama</th>
            <th>Masalah</th>
            <th>Solusi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            @foreach ($laporans as $index => $laporan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $laporan->no_pelanggan }}</td>
                    <td>{{ $laporan->pelanggan->nama }}</td>
                    <td>{{ $laporan->masalah }}</td>
                    <td>{{ $laporan->solusi }}</td>
                    <td>{{ $laporan->status->nama_status }}</td>
                    <td>
                        <a href="{{ route('adminlaporan.edit', [$laporan->id]) }}">Jawab</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> --}}
