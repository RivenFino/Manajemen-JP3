<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beranda</title>
    <link rel="icon" href="{{ asset('img/logo2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=fallback">

    <style>
        @media (max-width: 350px) {
            .btn {
                font-size: 12px;
                padding: 0.25rem 0.5rem;
            }
        }

        /* Adjust sidebar-logout for better positioning */
        .sidebar-logout {
            position: absolute;
            bottom: 0;
            width: calc(100% - 20px);
            left: 10px;
            background-color: #343a40;
            padding: 10px 0;
            border-top: 1px solid #dee2e6;
        }

        .sidebar-logout .nav-link {
            color: white;
            text-align: center;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #dc3545;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .sidebar-logout .nav-link i {
            margin-right: 10px;
            font-size: 14px;
        }

        .sidebar-logout .nav-link:hover {
            background-color: #c82333;
        }

        /* Navbar brand link style */
        .navbar-nav.ml-auto .brand-link {
            display: flex;
            align-items: center;
            background-color: transparent;
        }

        .navbar-nav.ml-auto .brand-link .brand-image {
            margin-right: 10px;
        }

        .navbar-nav.ml-auto .brand-link .brand-image img {
            display: block;
            height: 40px;
            width: auto;
        }

        /* Loading Screen Styles */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.3s ease;
        }

        .loading-content {
            text-align: center;
        }

        .loading-content img {
            animation: spin 1s linear infinite;
            height: 40px;
            width: 40px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .d-none {
            display: none;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 0.75rem;
        }

        .form-control-lg {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
        }

        .input-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .input-group .form-control {
            border-radius: 0.25rem 0 0 0.25rem;
        }

        .input-group .btn {
            border-radius: 0 0.25rem 0.25rem 0;
            font-size: 0.875rem;
        }

        .small-box {
            border-radius: 0.25rem;
            padding: 1rem;
            color: #fff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .small-box .inner {
            padding: 1.5rem;
        }

        .small-box .icon {
            top: 0.5rem;
            right: 0.5rem;
            color: rgba(0, 0, 0, 0.15);
        }

        .card {
            border-radius: 0.25rem;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f4f6f9;
            border-bottom: 1px solid #dee2e6;
            padding: 0.5rem 1rem;
        }

        .card-body {
            padding: 1rem;
        }

        /* Adjustments for table */
        .table thead th {
            background-color: #f8f9fa;
        }

        .table td,
        .table th {
            vertical-align: middle;
            font-size: 0.875rem;
        }

        .btn-sm {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }

        /* Adjust width of select and search box */
        .form-group .form-control-sm {
            max-width: 200px;
            /* Adjust width as needed */
            margin-right: 10px;
            /* Add space between select and search box */
        }

        .input-group-sm .form-control {
            max-width: 150px;
            /* Adjust width as needed */
        }

        .input-group-sm .btn {
            max-width: 50px;
            /* Adjust width as needed */
        }

        /* Center-align text in content header */
        .content-header .content-title {
            text-align: center;
            width: 100%;
        }
    </style>
</head>

<body class=" bg-gray-100">
    <div class="wrapper">

        <!-- Loading Screen -->
        <div id="loading-screen" class="d-none">
            <div class="loading-content">
                <img src="{{ asset('img/logo2.png') }}" alt="Loading">
                <p>Loading...</p>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">BERANDA</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Brand Logo -->
                <li class="nav-item">
                    <a href="#" class="brand-link">
                        <img src="{{ asset('img/logo2.jpeg') }}" alt="SMK Telkom"
                            class="brand-image img-circle elevation-0">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Hi!, {{ Auth::user()->username}}</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>Data Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>Data Mapel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-clock"></i>
                                <p>Riwayat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
            <!-- Sidebar Logout -->
            <div class="sidebar-logout">
                <a href="/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
            <!-- /.sidebar-logout -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12">
                            <h3 class="m-0 content-title">Administrasi Jam Mata Pelajaran Sekolah</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                <section class="flex justify-center items-center flex-col py-12 gap-4">
        @if(session()->has('success'))
            <div
                class="w-48 h-16 flex justify-center items-center bg-green-600 text-white font-bold text-xl rounded-xl shadow-lg">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex bg-white p-4 w-[1000px] rounded-md justify-center items-center flex-col">
            <h2>Hi {{ Auth::user()->username}}</h2>
            <h1 class="text-red-500">Ini halaman Dashboard</h1>
            <div class="flex w-full justify-end items-end px-24">
                <a href="/logout"
                    class="font-bold w-48 h-12 flex justify-center items-center rounded-md bg-yellow-500 hover:bg-yellow-600 text-white">Logout</a>
            </div>
        </div>
        <div class="flex bg-white p-4 w-[1000px] rounded-md justify-center items-center flex-col">
            <label for="dateInput">Pilih tanggal:</label>
            <div class="flex justify-center items-center">
                <input class="bg-gray-200 h-12 w-auto" type="text" id="formattedDateInput" readonly>
                <input class="bg-gray-200 h-12 w-auto" type="date" id="dateInput" name="dateInput" ">
            </div>

        </div>
    </section>
                    <div class="row">

                        <div class="col-lg-3 col-6 `">
                            <div class="small-box bg-light">
                                <div class="inner">
                                    <h3>40</h3>
                                    <p>Data Guru</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-light">
                                <div class="inner">
                                    <h3>12</h3>
                                    <p>Data Mata Pelajaran</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Type your keywords here">
                            </div>
                            <div class="input-group input-group-sm">
                                <input type="search" class="form-control" placeholder="Cari..">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Total Jam Pelajaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Rizki Rahman</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                            <td>20 Jam Pelajaran</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Rizki Rahman</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                            <td>20 Jam Pelajaran</td>
                                        </tr>
                                        <!-- Repeat rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>  


</body>
<script>
    const dateInput = document.getElementById('dateInput');
    const formattedDateInput = document.getElementById('formattedDateInput');

    dateInput.addEventListener('change', function () {
        const date = new Date(this.value);
        if (isNaN(date.getTime())) {
            formattedDateInput.value = '';
            return;
        }

        const daysOfWeek = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        const dayName = daysOfWeek[date.getDay()];
        const day = date.getDate();
        const monthName = months[date.getMonth()];
        const year = date.getFullYear();

        const formattedDate = `${dayName}, ${day} ${monthName} ${year}`;
        formattedDateInput.value = formattedDate;
    });

    // Trigger change event initially if needed
    dateInput.dispatchEvent(new Event('change'));
</script>
        <!-- jQuery -->
        <script src=" {{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
                <!-- Bootstrap 4 -->
                <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <!-- AdminLTE App -->
                <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var loadingScreen = document.getElementById('loading-screen');

                        function showLoadingScreen() {
                            loadingScreen.classList.remove('d-none');
                        }

                        function hideLoadingScreen() {
                            loadingScreen.classList.add('d-none');
                        }
                        // Show loading screen on page load
                        window.addEventListener('load', function () {
                            hideLoadingScreen();
                        });
                        // Show loading screen on page transition
                        window.addEventListener('beforeunload', function () {
                            showLoadingScreen();
                        });
                        // Optional: if you want to handle clicks on anchor tags
                        document.addEventListener('click', function (event) {
                            var target = event.target.closest('a');
                            if (target && !target.classList.contains('nav-link') && !target.closest('.sidebar')) {
                                showLoadingScreen();
                            }
                        });
                    });
                </script>

</html>