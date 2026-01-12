@extends('master')
@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
</head>
<body>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Layanan</h2>
       <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-header">
            Layanan
            <a class="btn btn-success" href="/layanan/create" data-bs-target="tambah">Tambah</a>
        </div>
        <div class="card-body">
        <table id="myTable" class="table table-hover table-bordered " style="width:100%">
            <thead>
                <tr class="text-center">
                    <td scope="col">No</td>
                    <th scope="col">Layanan</th>
                    <th scope="col">Harga Per Kg</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <tbody class="text-center">
                @foreach ($Layanans as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$item->nama_layanan}}</td>
                    <td>Rp{{ $item->harga_per_kg }}/kg</td>
                    <td><a class="btn btn-warning" href="/layanan/edit/{{ $item->id_layanan}}">Edit</a>
                    <a class="btn btn-danger" href="/layanan/delete/{{ $item->id_layanan }}">Hapus</a></td>
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
</html>
@endsection