<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPasienKeluarMasuk;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $currentDay = Carbon::now()->day;
        $masuk = DataPasienKeluarMasuk::whereDay('tgl_masuk', $currentDay)->get();
        $keluar = DataPasienKeluarMasuk::whereDay('tgl_keluar', $currentDay)->get();
        return view('index',compact('masuk','keluar'));
    }
}
