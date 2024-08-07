<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    @vite('resources/sass/app.scss')
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
                        <h1 class="h3 mb-0 text-gray-800">Jawab Laporan</h1>

                    </div>

                    {{-- @method('put') --}}
                    <form action="{{ route('adminlaporan.update', [$laporans->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="kode" class="form-label">No. Pelanggan</label>
                            <input class="form-control @error('no_pelanggan') is-invalid @enderror" type="text"
                                name="no_pelanggan" id="no_pelanggan"
                                value="{{ $errors->any() ? old('no_pelanggan') : $laporans->no_pelanggan }}" disabled>
                            @error('no_pelanggan')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Masalah</label>
                            <input class="form-control @error('masalah') is-invalid @enderror" type="text"
                                name="masalah" id="masalah"
                                value="{{ $errors->any() ? old('masalah') : $laporans->masalah }}" disabled>
                            @error('masalah')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="solusi" class="form-label">Solusi</label>
                            <input class="form-control @error('solusi') is-invalid @enderror" type="text"
                                name="solusi" id="solusi"
                                value="{{ $errors->any() ? old('solusi') : $laporans->solusi }}">
                            @error('solusi')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_status" class="form-label">Status</label>
                            <select class="form-control" id="nama_status" name='nama_status'>
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('status');
                                    } else {
                                        $selected = $laporans->id_status;
                                    }
                                @endphp
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}"
                                        {{ $selected == $status->id ? 'selected' : '' }}>
                                        {{ $status->nama_status }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Jawab</button>
                    </form>
                    @vite('resources/js/app.js')
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')

</head>

<body>
    <form action="{{ route('adminlaporan.update', [$laporans->id]) }}" method="POST">
        @csrf
        @method('put')
        <h3>Jawab Laporan</h3>
        <div>
            <label>No. Pelanggan</label>
            <input class="@error('no_pelanggan') is-invalid @enderror" type="text" name="no_pelanggan"
                id="no_pelanggan" value="{{ $errors->any() ? old('no_pelanggan') : $laporans->no_pelanggan }}" disabled>
            @error('no_pelanggan')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Masalah</label>
            <input class="@error('masalah') is-invalid @enderror" type="text" name="masalah" id="masalah"
                value="{{ $errors->any() ? old('masalah') : $laporans->masalah }}" disabled>
            @error('masalah')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Solusi</label>
            <input class="@error('solusi') is-invalid @enderror" type="text" name="solusi" id="solusi"
                value="{{ $errors->any() ? old('solusi') : $laporans->solusi }}">
            @error('solusi')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Status</label>
            <select name="nama_status" id="nama_status">
                @php
                    $selected = '';
                    if ($errors->any()) {
                        $selected = old('status');
                    } else {
                        $selected = $laporans->id_status;
                    }
                @endphp
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" {{ $selected == $status->id ? 'selected' : '' }}>
                        {{ $status->nama_status }}
                    </option>
                @endforeach
            </select>
            @error('$status')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div>
            <button type=submit>Jawab</button>
        </div>
        @vite('resources/js/app.js')

</body>

</html> --}}
