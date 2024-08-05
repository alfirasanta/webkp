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

            <!-- Nav Item - Dashboard -->
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
            <li class="nav-item active">
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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Kategori</h1>

                    </div>
                    <a class="btn btn-success" href="{{ route('adminkategori.create') }}" style="color:white;">+ Tambah
                        Kategori</a></button>
                    <div class="container-fluid py-3">
                        <div class="container">
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #3498db; color: white" scope="col">No. </th>
                                            <th style="background-color: #3498db; color: white" scope="col">Kode</th>
                                            <th style="background-color: #3498db; color: white" scope="col">Nama
                                                Kategori</th>
                                            <th style="background-color: #3498db; color: white" scope="col">
                                                Deskripsi</th>
                                            <th style="background-color: #3498db; color: white" scope="col">
                                                Kelebihan</th>
                                            <th style="background-color: #3498db; color: white" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kategoris as $index => $kategori)
                                            <tr class="bg-light">

                                                <th style="background-color: white;" scope="row">{{ $index + 1 }}
                                                </th>
                                                <td style="background-color: white;">{{ $kategori->kode }}</td>
                                                <td style="background-color: white;">{{ $kategori->nama_kategori }}
                                                </td>
                                                <td style="background-color: white;">{{ $kategori->deskripsi }}
                                                </td>
                                                <td style="background-color: white;">{{ $kategori->kelebihan }}
                                                </td>
                                                <td style="background-color: white;">
                                                    <form>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('adminkategori.edit', [$kategori->id]) }}">Edit</a>
                                                    </form>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('adminkategori.destroy', [$kategori->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div>
        <a href="{{ route('adminkategori.create') }}">+tambah
        </a>
    </div>
    <table>
        <th>
            <tr>no</tr>
            <tr>code</tr>
            <tr>nama kategori</tr>
            <tr>aksi</tr>
        </th>
        <tbody>
            @foreach ($kategoris as $index => $kategori)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kategori->kode }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('adminkategori.edit', [$kategori->id]) }}">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('adminkategori.destroy', [$kategori->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> --}}
