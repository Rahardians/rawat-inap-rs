<?php

namespace App\Http\Controllers\Registrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPasien;

class PasienController extends Controller
{
    public function create()
    {
        return view('registrasi.pasien');
    }

    public function store(Request $request)
    {
        DataPasien::create([
            'no_rm' => $request->no_rm,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('pasien-masuk.index');
    }

    public function history()
    {
        $data = DataPasien::with(['rawat'])->get();
        return view('registrasi.history.index',compact('data'));
    }
}
