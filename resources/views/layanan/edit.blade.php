<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

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
            <li class="nav-item active">
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
            <li class="nav-item">
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Layanan</h1>

                    </div>
                    <form action="{{ route('adminlayanan.update', [$layanans->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="nama_layanan" class="form-label">Nama Layanan</label>
                            <input class="form-control @error('nama_layanan') is-invalid @enderror" type="text"
                                name="nama_layanan" id="nama_layanan"placeholder="Masukkan Nama Layanan"
                                value="{{ $errors->any() ? old('nama_layanan') : $layanans->nama_layanan }}">
                            @error('nama_layanan')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="form-label">Detail</label>
                            <input class="form-control @error('detail') is-invalid @enderror" type="text"
                                name="detail" id="detail"placeholder="Masukkan Nama Layanan"
                                value="{{ $errors->any() ? old('detail') : $layanans->detail }}">
                            @error('detail')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input class="form-control @error('gambar') is-invalid @enderror" type="file"
                                name="gambar" id="gambar"placeholder="Masukkan Gambar"
                                value="{{ $errors->any() ? old('gambar') : $layanans->gambar }}">
                            @error('gambar')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror" type="text"
                                name="harga" id="harga"placeholder="Masukkan Harga Layanan"
                                value="{{ $errors->any() ? old('harga') : $layanans->harga }}">
                            @error('harga')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <select class="form-control" id="nama_kategori" name='nama_kategori'>
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('kategori');
                                    } else {
                                        $selected = $layanans->id_kategori;
                                    }
                                @endphp
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}"
                                        {{ $selected == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->kode .
                                            ' -
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ' .
                                            $kategori->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
    <form action="{{ route('adminlayanan.update', [$layanans->id]) }}" method="POST">
        @csrf
        @method('put')
        <h3>Edit Layanan</h3>
        <div>
            <label>Nama Layanan</label>
            <input class="@error('nama_layanan') is-invalid @enderror" type="text" name="nama_layanan"
                id="nama_layanan"placeholder="Masukkan Nama Layanan"
                value="{{ $errors->any() ? old('nama_layanan') : $layanans->nama_layanan }}">
            @error('nama_layanan')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Detail</label>
            <input class="@error('detail') is-invalid @enderror" type="text" name="detail"
                id="detail"placeholder="Masukkan Nama Layanan"
                value="{{ $errors->any() ? old('detail') : $layanans->detail }}">
            @error('detail')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Nama Kategori</label>
            <select name="nama_kategori" id="nama_kategori">
                @php
                    $selected = '';
                    if ($errors->any()) {
                        $selected = old('kategori');
                    } else {
                        $selected = $layanans->id_kategori;
                    }
                @endphp
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $selected == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->kode .
                            ' -
                                                                                                                                                                                                                                                                                                                        ' .
                            $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
            @error('kategori')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div>
            <button type=submit>Edit</button>
        </div>
        @vite('resources/js/app.js')

</body>

</html> --}}
