<?php

namespace App\Http\Controllers\Registrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPasienKeluarMasuk;
use App\Models\DataPasien;

class PasienMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noRms = DataPasienKeluarMasuk::pluck('no_rm')->toArray();
        $data = DataPasien::whereNotIn('no_rm', $noRms)->get();
        return view('registrasi.pasien-masuk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = DataPasien::where('no_rm',$request->no_rm)->first();
        return view('registrasi.pasien-masuk.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'no_rm' =>  'required',
        ]);

        DataPasienKeluarMasuk::create([
            'no_rm' => $request->no_rm,
            'tgl_masuk' => $request->tgl_masuk,
            'status_pasien' => $request->status_pasien,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'ruangan' => $request->ruangan,
            'kelas' => $request->kelas_rawat,
            'jenis_pelayanan' => $request->jenis_pelayanan,
        ]);

        return redirect()->route('pasien-keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
