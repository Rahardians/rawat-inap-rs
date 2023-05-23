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
                    <h4 class="card-title">Form Register Pasien</h4>
                    <p class="card-description">
                        Daftar Pasien
                    </p>
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('pasien.store') }}" class="forms-sample" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No. RM</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_rm" class="form-control align-middle" id="exampleInputUsername2"
                                            placeholder="No. RM">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Pasien</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tgl Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tgl_lahir" class="form-control" id="exampleInputMobile"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select class="form-control"  name="jenis_kelamin" id="">
                                            <option value="Pria">Pria</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control" id="exampleInputConfirmPassword2"
                                            placeholder="Alamat">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
