<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPasien;
use App\Models\DataPasienKeluarMasuk;

class GrafikController extends Controller
{
    public function kunjungan()
    {
        // Mengambil data pasien keluar masuk
        $dataPasienKeluarMasuk = DataPasienKeluarMasuk::all();

        // Menghitung jumlah pasien laki-laki dan perempuan
        $lakiLakiCount = 0;
        $perempuanCount = 0;

        foreach ($dataPasienKeluarMasuk as $data) {
            $pasien = DataPasien::where('no_rm', $data->no_rm)->first();

            if ($pasien) {
                if ($pasien->jenis_kelamin == 'Pria') {
                    $lakiLakiCount++;
                } elseif ($pasien->jenis_kelamin == 'Perempuan') {
                    $perempuanCount++;
                }
            }
        }

        // Menghitung total pasien
        $totalCount = $lakiLakiCount + $perempuanCount;
        return view('grafik.kunjungan', compact('lakiLakiCount', 'perempuanCount', 'totalCount'));
    }
}
