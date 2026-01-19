@extends('master')
@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">Beranda</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">Jumlah Layanan</p>
                <p class="stat-cards-info__num">{{ $jumlayanan }}</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">Transaksi Baru</p>
                <p class="stat-cards-info__num">{{ $jumtrans }}</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">Sedang Diproses</p>
                <p class="stat-cards-info__num">{{ $sedproses }}</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">Belum Dibayar</p>
                <p class="stat-cards-info__num">{{ $belbay }}</p>
              </div>
            </article>
          </div>
        </div>
        <main class="main users chart-page" id="skip-target">
        <h2 class="main-title">Transaksi Terbaru</h2>
        <div class="card">
          <div class="card-header">Transaksi Terbaru</div>
          <div class="card-body">
        <table id="myTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Layanan</th>
                    <th>Berat</th>
                    <th>Tanggal Transaksi</th>
                    <th>Pembayaran</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($transbaru as $item )
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $item -> nama_pelanggan }}</td>
                    <td>{{ $item -> layanan -> nama_layanan }}</td>
                    <td>{{ $item -> berat }}kg</td>
                    <td>{{ date('d-m-Y', strtotime($item -> waktu_transaksi))}}</td>
                    <td>{{ $item -> keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
        </div>

        </main>
</main>
</body>
@yield('scripts')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</html>
@endsection