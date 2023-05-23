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
                    <h4 class="card-title">Data Grafik Kunjungan</h4>
                    
                    <canvas class="my-auto" id="genderChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script src="https://www.bootstrapdash.com/demo/star-admin2-free/template/vendors/chart.js/Chart.min.js"></script>
<script src="https://www.bootstrapdash.com/demo/star-admin2-free/template/js/Chart.roundedBarCharts.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lakiLakiCount = {{ $lakiLakiCount }};
    var perempuanCount = {{ $perempuanCount }};

    var genderData = {
      datasets: [{
        data: [lakiLakiCount, perempuanCount],
        backgroundColor: ["#36A2EB", "#FF6384"]
      }],

      labels: [
        'Laki-laki',
        'Perempuan'
      ]
    };

    var genderChart = new Chart(document.getElementById('genderChart'), {
      type: 'doughnut',
      data: genderData
    });
  });
</script>
@endpush