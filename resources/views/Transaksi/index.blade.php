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
                <a class="btn btn-success" href="/transaksi/create">Tambah</a>
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
                @foreach ($transaksis as $item)
                <tr>
                    <td>{{ $loop -> iteration}}</td>
                    <td>{{ date('d-m-Y',strtotime($item -> waktu_transaksi)) }}</td>
                    <td>{{ $item -> nama_pelanggan }}</td>
                    <td>{{ $item ->  layanan -> nama_layanan }}</td>
                    <td>{{ $item -> berat }}kg</td>
                    <td>Rp.{{ number_format($item -> layanan -> harga_per_kg, 0,',',',') }}</td>
                    <td>Rp.{{ number_format($item -> layanan -> harga_per_kg * $item -> berat,0,',',',') }}</td>
                    <td>{{ $item -> keterangan }}</td>
                    <td>{{ $item -> pembayaran }}</td>
                    <td><a class="btn btn-warning" href="/transaksi/edit/{{ $item -> id_transaksi }}">Ubah</a>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" class="btn btn-danger" href="/transaksi/destroy/{{ $item -> id_transaksi}}">Hapus</a>
                    <a class="btn btn-warning" href="/transaksi/print/{{ $item -> id_transaksi }}">Print</a>
                </td>
                </tr>
                @endforeach
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
<script>
    function Hapus(){
       
    }
</script>
</html>
@endsection