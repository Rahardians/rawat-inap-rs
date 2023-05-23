@extends('partials.template')

@push('css')
    <style>
        /* .form-group{
            justify-content: center
        } */
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Register Pasien Keluar</h4>
                    <p class="card-description">
                        Pasien Keluar
                    </p>
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('pasien-keluar.store') }}" class="forms-sample" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No. RM</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_rm" class="form-control align-middle" id="exampleInputUsername2"
                                            placeholder="No. RM" readonly value="{{ $data->no_rm }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Pasien</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly name="nama" value="{{ $data->nama }}" class="form-control" id="exampleInputEmail2" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tgl Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" readonly name="tgl_lahir" value="{{ $data->tgl_lahir }}" class="form-control" id="exampleInputMobile"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" class="form-control" id="exampleInputMobile"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" readonly value="{{ $data->alamat }}" class="form-control" id="exampleInputConfirmPassword2"
                                            placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status Pasien</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly name="status_pasien" value="{{ $data->rawat->status_pasien }}" class="form-control" id="exampleInputMobile"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                    <div class="col-sm-9">
                                        <input type="date" readonly name="tgl_masuk" value="{{ $data->rawat->tgl_masuk }}" class="form-control" id="exampleInputUsername2"
                                            >
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('pasien-keluar.index') }}" class="btn btn-light">Cancel</a>
                        </div>
                        <div class="col">
                                
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Jenis Pelayanan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control"  name="jenis_pelayanan" id="">
                                            <option value="OBGYN">OBGYN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Kelas Rawat</label>
                                    <div class="col-sm-9">
                                        <select class="form-control"  name="kelas_rawat" id="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jenis Pembayaran</label>
                                    <div class="col-sm-9">
                                        <select class="form-control"  name="jenis_pembayaran" id="">
                                            <option value="BPJS">BPJS</option>
                                            <option value="Umum">Umum</option>
                                            <option value="Asuransi">Asuransi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Ruang Perawatan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control"  name="ruangan" id="">
                                            <option value="Dewi">Dewi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Keluar</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tgl_keluar" class="form-control" id="exampleInputUsername2"
                                            >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jam Keluar</label>
                                    <div class="col-sm-9">
                                        <input type="time" name="jam_keluar" class="form-control" id="exampleInputUsername2"
                                            >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Cara Keluar</label>
                                    <div class="col-sm-9">
                                        <select name="cara_keluar" class="form-control" id="">
                                            <option value="Atas Izin Dokter">Atas Izin Dokter</option>
                                            <option value="Pasien Dipindahkan">Pasien Dipindahkan</option>
                                            <option value="Dirujuk">Dirujuk</option>
                                            <option value="Mati < 48 Jam">Mati < 48 Jam</option>
                                            <option value="Mati > 48 Jam">Mati > 48 Jam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">DPJP</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="dpjp" class="form-control" id="exampleInputUsername2"
                                            >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
