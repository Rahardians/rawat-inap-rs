<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Register</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('pasien-masuk.index') }}">Registrasi Pasien
                            Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pasien-keluar.index') }}">Registrasi Pasien
                            Keluar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('history.index') }}">Histori Pasien</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tabel">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Tabel</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tabel" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('rekapitulasi.index') }}">Rekapitulasi Sensus
                            Harian</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#laporan">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="laporan" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="">Indikator Pelayanan
                            RS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kunjungan.index') }}">Kunjungan RS</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#grafik">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Grafik</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="grafik" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('grafik.kunjungan') }}">Grafik Kunjungan</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Graifk Barber
                            Johnson</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Graifk Efisiensi
                            TT</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#admin">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Admin</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="admin" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="">Data Pengguna</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Data Ruangan &
                            TT</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Data Jenis
                            Pembayaran</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Data Jenis
                            Pelayanan</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Data Diagnosa</a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
