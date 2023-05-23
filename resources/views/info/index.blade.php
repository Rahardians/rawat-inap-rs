@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
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
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h4 class="card-title">Data Info</h4>
                    <p class="card-description">
                        Form ini digunakan untuk Edit Data Info
                    </p>
                    <form action="{{ route('adm.info.update') }}" method="post" class="forms-sample">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" id="exampleInputName1" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Deskripsi</label>
                            <input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control" id="exampleInputName1" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Alamat</label>
                            <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control" id="exampleInputEmail3" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Link Alamat</label>
                            <input type="text" name="alamat_link" value="{{ $data->alamat_link }}" class="form-control" id="exampleInputPassword4" placeholder="Link Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">No. Whatsapp</label>
                            <input type="text" name="whatsapp" value="{{ $data->whatsapp }}" class="form-control" id="exampleInputPassword4" placeholder="Diawali dengan 628">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Instagram</label>
                            <input type="text" name="instagram" value="{{ $data->instagram }}" class="form-control" id="exampleInputPassword4" placeholder="Username Instagram">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush