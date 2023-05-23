@extends('partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div id="alert" class="alert alert-success alert-block mb-3">
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div id="alert" class="alert alert-danger alert-block mb-3">
                            {{ $message }}
                        </div>
                    @endif
                    <h4 class="card-title">Data Rekapitulasi</h4>
                    {{-- <p class="card-description">
                        <a href="" class="btn btn-primary">Tambah Pasien Baru</a>
                    </p> --}}
                    <!-- Membuat tabel HTML -->
                    <div class="table-responsive">
                        <!-- Membuat tabel HTML -->
                        <table class="table table-striped">
                            <tr>
                                <th>Bulan</th>
                                <th>Pasien Masuk</th>
                                <th>Pasien Dipindahkan</th>
                                <th>Atas Izin Dokter</th>
                                <th>Dirujuk</th>
                                <th>Mati &lt; 48 Jam</th>
                                <th>Mati &gt; 48 Jam</th>
                                <th>Total Pasien Keluar</th>
                                <th>Hari Perawatan</th>
                                <th>Lama Rawat</th>
                                <th>Cara Bayar: Umum</th>
                                <th>Cara Bayar: BPJS</th>
                                <th>Cara Bayar: Asuransi</th>
                            </tr>
                            @foreach ($dataPasienBulan as $bulan => $dataPasien)
                                <tr>
                                    <td>{{ $bulan }}</td>
                                    <td>{{ $dataPasien['jumlahMasuk'] }}</td>
                                    <td>{{ $dataPasien['jumlahDipindahkan'] }}</td>
                                    <td>{{ $dataPasien['jumlahIzinDokter'] }}</td>
                                    <td>{{ $dataPasien['jumlahDirujuk'] }}</td>
                                    <td>{{ $dataPasien['jumlahMatiKurang48Jam'] }}</td>
                                    <td>{{ $dataPasien['jumlahMatiLebih48Jam'] }}</td>
                                    <td>{{ $dataPasien['jumlahKeluar'] }}</td>
                                    <td>{{ $dataPasien['hariPerawatan'] }}</td>
                                    <td>{{ $dataPasien['lamaRawat'] }}</td>
                                    <td>{{ $dataPasien['jumlahUmum'] }}</td>
                                    <td>{{ $dataPasien['jumlahBPJS'] }}</td>
                                    <td>{{ $dataPasien['jumlahAsuransi'] }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
