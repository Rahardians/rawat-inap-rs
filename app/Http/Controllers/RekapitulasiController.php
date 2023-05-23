<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataPasienKeluarMasuk;

class RekapitulasiController extends Controller
{
    public function index()
    {
        // Array untuk menyimpan data pasien berdasarkan bulan
        $dataPasienBulan = [];

        // Loop untuk mengambil data pasien berdasarkan bulan
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            // Mengambil data dari tabel DataPasienKeluarMasuk untuk bulan yang sedang diproses
            $dataPasien = DB::table('data_pasien_keluar_masuks')
                ->whereMonth('tgl_masuk', $bulan)
                ->orWhereMonth('tgl_keluar', $bulan)
                ->get();

            // Inisialisasi variabel jumlah pasien
            $jumlahMasuk = 0;
            $jumlahDipindahkan = 0;
            $jumlahIzinDokter = 0;
            $jumlahDirujuk = 0;
            $jumlahMatiKurang48Jam = 0;
            $jumlahMatiLebih48Jam = 0;
            $jumlahKeluar = 0;
            $hariPerawatan = 0;
            $lamaRawat = 0;
            $jumlahUmum = 0;
            $jumlahBPJS = 0;
            $jumlahAsuransi = 0;

            // Kode untuk menghitung jumlah pasien
            foreach ($dataPasien as $pasien) {
                $tglMasuk = date('m', strtotime($pasien->tgl_masuk));
                if ($tglMasuk == $bulan) {
                    $jumlahMasuk++;
                }
                
                if ($pasien->cara_keluar === 'Pasien Dipindahkan') {
                    $jumlahDipindahkan++;
                }
                
                if ($pasien->cara_keluar === 'Atas Izin Dokter') {
                    $jumlahIzinDokter++;
                }
                
                if ($pasien->cara_keluar === 'Dirujuk') {
                    $jumlahDirujuk++;
                }
                
                if ($pasien->cara_keluar === 'Mati < 48 Jam') {
                    $jumlahMatiKurang48Jam++;
                }
                
                if ($pasien->cara_keluar === 'Mati > 48 Jam') {
                    $jumlahMatiLebih48Jam++;
                }
                
                if ($pasien->status_pasien === 'Keluar') {
                    $jumlahKeluar++;
                }
                
                $hariPerawatan += $this->hitungHariPerawatan($pasien->tgl_masuk, $pasien->tgl_keluar);
                
                // ... Kode untuk menghitung jumlah pasien lainnya
                
                if ($pasien->jenis_pembayaran === 'Umum') {
                    $jumlahUmum++;
                }
                
                if ($pasien->jenis_pembayaran === 'BPJS') {
                    $jumlahBPJS++;
                }
                
                if ($pasien->jenis_pembayaran === 'Asuransi') {
                    $jumlahAsuransi++;
                }
            }
            // Menyimpan data pasien ke array berdasarkan bulan
            $dataPasienBulan[$bulan] = [
                'jumlahMasuk' => $jumlahMasuk,
                'jumlahDipindahkan' => $jumlahDipindahkan,
                'jumlahIzinDokter' => $jumlahIzinDokter,
                'jumlahDirujuk' => $jumlahDirujuk,
                'jumlahMatiKurang48Jam' => $jumlahMatiKurang48Jam,
                'jumlahMatiLebih48Jam' => $jumlahMatiLebih48Jam,
                'jumlahKeluar' => $jumlahKeluar,
                'hariPerawatan' => $hariPerawatan,
                'lamaRawat' => $lamaRawat,
                'jumlahUmum' => $jumlahUmum,
                'jumlahBPJS' => $jumlahBPJS,
                'jumlahAsuransi' => $jumlahAsuransi
            ];
        }

        // Mengirim data ke view menggunakan compact()
        return view('tabel.rekapitulasi', compact('dataPasienBulan'));
    }

    private function hitungHariPerawatan($tglMasuk, $tglKeluar)
    {
        $date1 = new \DateTime($tglMasuk);
        $date2 = new \DateTime($tglKeluar);
        $interval = $date1->diff($date2);
        $hariPerawatan = $interval->days + 1;

        return $hariPerawatan;
    }
}
