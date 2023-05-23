<?php

namespace App\Http\Controllers\Registrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPasienKeluarMasuk;
use App\Models\DataPasien;

class PasienKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataPasienKeluarMasuk::with(['pasien'])->get();
        // dd($data);
        return view('registrasi.pasien-keluar.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = DataPasien::where('no_rm',$request->no_rm)->first();
        return view('registrasi.pasien-keluar.create',compact('data'));
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

        $data = DataPasienKeluarMasuk::where('no_rm',$request->no_rm)->orderBy('created_at','DESC')->first();
        $data->tgl_keluar = $request->tgl_keluar;
        $data->jam_keluar = $request->jam_keluar;
        $data->cara_keluar = $request->cara_keluar;
        $data->lama_rawat = $request->lama_rawat;
        $data->dpjp = $request->dpjp;
        $data->status_pasien = "Keluar";
        $data->save();

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
