@extends('partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
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
                    <h4 class="card-title">Data Pasien Masuk</h4>
                    <p class="card-description">
                        <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien Baru</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">
                                        No
                                    </th>
                                    <th>
                                        No. RM
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Tgl Lahir
                                    </th>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                    <th>
                                        Ruang RI
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)                                    
                                <tr>
                                    <td>
                                        {{ $key+1 }}
                                    </td>
                                    <td>
                                        {{ $item->no_rm }}
                                    </td>
                                    <td>
                                        {{ $item->pasien->nama }}
                                    </td>
                                    <td>
                                        {{ $item->pasien->tgl_lahir }}
                                    </td>
                                    <td>
                                        {{ $item->pasien->jenis_kelamin }}
                                    </td>
                                    <td>
                                        {{ $item->ruangan }}
                                    </td>
                                    <td>
                                        @if ($item->status_pasien == "Keluar")
                                        <a href="" class="btn btn-success">Keluar</a>
                                        @else
                                        <a href="{{ route('pasien-keluar.create',$item->no_rm) }}" class="btn btn-danger">Belum Keluar</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
