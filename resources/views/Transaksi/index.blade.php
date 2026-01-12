@extends('master')
@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Transaksi</h2>
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-header">
                Transaksi
                 </div>
                 
                 <div class="card-body">
        <table id="myTable" class="table table-hover table-bordered " style="width:100%">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Layanan</th>
                    <th>Beratnya</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah Bayar</th>
                    <th>Keterangan</th>
                    <th>Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td>11-2-2024</td>
                    <td>Warsito</td>
                    <td>Cuci Saja</td>
                    <td>5 kg</td>
                    <td>3.000</td>
                    <td>15.000</td>
                    <td>Selesai</td>
                    <td>Lunas</td>
                    <td><a class="btn btn-warning">Ubah</a> <a class="btn btn-danger">Hapus</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12-2-2024</td>
                    <td>Warsini</td>
                    <td>Cuci Setrika</td>
                    <td>10 kg</td>
                    <td>5.000</td>
                    <td>50.000</td>
                    <td>Proses</td>
                    <td>Belum Bayar <a class="btn btn-success">Bayar</a></td>
                    <td><a class="btn btn-warning">Ubah</a> <a class="btn btn-danger">Hapus</a></td>
                </tr>
            </tbody>
        </table>
       </div>

        </div>

        </div>
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