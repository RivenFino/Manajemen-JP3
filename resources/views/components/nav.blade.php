<aside class="main-sidebar sidebar-dark-primary elevation-4  bg-zinc-700 rounded-r-2xl ">
            <!-- Sidebar -->
            <div class="sidebar px-2">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
                    <div class="image">
                        <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Hi!, <b>{{ Auth::user()->username}}</b></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('guru.tampil')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>Data Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mapel.tampil')}}" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>Data Mapel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('riwayat.tampil')}}" class="nav-link">
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
            <div class="sidebar-logout ">
                <a href="/logout" class="nav-link flex justify-center items-center ">
                    <i class="nav-icon fas fa-sign-out-alt text-lg"></i>
                    <span class="text-lg">Logout</span>
                </a>
            </div>
            <!-- /.sidebar-logout -->
        </aside>