@extends('partials.template')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="statistics-details d-flex align-items-center justify-content-between">
                                    <div class="card p-3">
                                        <p class="statistics-title">Tanggal</p>
                                        <h3 class="rate-percentage" id="date">Senin, 8 Mei 2023</h3>
                                    </div>
                                    <div class="card p-3">
                                        <p class="statistics-title">Waktu</p>
                                        <h3 class="rate-percentage" id="time">20:22</h3>
                                    </div>
                                    <div class="card p-3">
                                        <p class="statistics-title">Jumlah Tempat Tidur</p>
                                        <h3 class="rate-percentage">5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body card-rounded">
                                                <h4 class="card-title  card-title-dash">Pasien Masuk Hari Ini</h4>

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
                                                                    Alamat
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($masuk as $key => $item)
                                                                <tr>
                                                                    <td>
                                                                        {{ $key + 1 }}
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
                                                                        {{ $item->pasien->alamat }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body card-rounded">
                                                <h4 class="card-title  card-title-dash">Pasien Keluar Hari Ini</h4>

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
                                                                    Alamat
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($keluar as $key => $item)
                                                                <tr>
                                                                    <td>
                                                                        {{ $key + 1 }}
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
                                                                        {{ $item->pasien->alamat }}
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
                                {{-- <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">Market Overview</h4>
                                                        <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit
                                                            amet consectetur adipisicing elit</p>
                                                    </div>
                                                    <div>
                                                        <div class="dropdown">
                                                            <button
                                                                class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                type="button" id="dropdownMenuButton2"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"> This month </button>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton2">
                                                                <h6 class="dropdown-header">Settings</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                        <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                                        <h4 class="me-2">USD</h4>
                                                        <h4 class="text-success">(+1.37%)</h4>
                                                    </div>
                                                    <div class="me-3">
                                                        <div id="marketing-overview-legend"></div>
                                                    </div>
                                                </div>
                                                <div class="chartjs-bar-wrapper mt-3">
                                                    <canvas id="marketingOverview"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        // Function to format the date as "Day, DD Month YYYY"
        function formatDate(date) {
            const options = {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };
            return date.toLocaleDateString('en-US', options);
        }

        // Function to format the time as "HH:MM"
        function formatTime(date) {
            const options = {
                hour: 'numeric',
                minute: 'numeric',
                hour12: false
            };
            return date.toLocaleTimeString('en-US', options);
        }

        // Function to update the time in the HTML element
        function updateTime() {
            const currentTime = new Date();
            const formattedTime = formatTime(currentTime);
            document.getElementById('time').textContent = formattedTime;
        }

        // Get the current date and set the formatted date in the HTML element
        const currentDate = new Date();
        const formattedDate = formatDate(currentDate);
        document.getElementById('date').textContent = formattedDate;

        // Update the time immediately
        updateTime();

        // Update the time every second (1000 milliseconds)
        setInterval(updateTime, 1000);
    </script>
@endpush
