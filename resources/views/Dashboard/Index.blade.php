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
                <p class="stat-cards-info__num">5</p>
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
                <p class="stat-cards-info__num">3</p>
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
                <p class="stat-cards-info__num">2</p>
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
                <p class="stat-cards-info__title">1</p>
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
                <tr>
                    <td>1</td>
                    <td>Ahmad</td>
                    <td>Cuci Kering</td>
                    <td>2 kg</td>
                    <td>2024-06-01</td>
                    <td>Belum Bayar</td>
                </tr>
                <tr>
                     <td>2</td>
                    <td>Maulani</td>
                    <td>Cuci Kering</td>
                    <td>4 kg</td>
                    <td>2024-07-01</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Budi</td>
                    <td>Cuci Kering</td>
                    <td>2024-06-03</td>
                    <td>Belum Dibayar</td>
                    <td>Rp 60.000</td>
                </tr>
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