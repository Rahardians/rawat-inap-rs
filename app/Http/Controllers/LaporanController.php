<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPasien;
use App\Models\DataPasienKeluarMasuk;

class LaporanController extends Controller
{
    public function kunjungan()
    {
        // Mengambil data pasien keluar masuk
        $dataPasienKeluarMasuk = DataPasienKeluarMasuk::all();

        // Inisialisasi counters
        $bulanCount = [];

        // Menghitung jumlah pasien laki-laki dan perempuan per bulan
        foreach ($dataPasienKeluarMasuk as $data) {
            $bulan = date('F', strtotime($data->tgl_masuk));

            if (!isset($bulanCount[$bulan])) {
                $bulanCount[$bulan] = ['Pria' => 0, 'Perempuan' => 0];
            }

            $pasien = DataPasien::where('no_rm', $data->no_rm)->first();

            if ($pasien) {
                if ($pasien->jenis_kelamin == 'Pria') {
                    $bulanCount[$bulan]['Pria']++;
                } elseif ($pasien->jenis_kelamin == 'Perempuan') {
                    $bulanCount[$bulan]['Perempuan']++;
                }
            }
        }

        // Membangun array hasil laporan
        $laporan = [];
        foreach (range(1, 12) as $month) {
            $bulan = date('F', mktime(0, 0, 0, $month, 1));
            $lakiLakiCount = $bulanCount[$bulan]['Pria'] ?? 0;
            $perempuanCount = $bulanCount[$bulan]['Perempuan'] ?? 0;
            $totalCount = $lakiLakiCount + $perempuanCount;
            
            $laporan[] = [
                'bulan' => $bulan,
                'laki_laki' => $lakiLakiCount,
                'perempuan' => $perempuanCount,
                'total' => $totalCount
            ];
        }

        return view('laporan.kunjungan', ['laporan' => $laporan]);

    }
}
