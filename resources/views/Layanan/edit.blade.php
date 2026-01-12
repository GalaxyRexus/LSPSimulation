@extends('master')
@section('isi')
<main class="main users chart-page" id="skip-target">
    <div class="container">
<h2 class="main-title">Ubah Layanan {{ $layanan->nama_layanan }}</h2>
<article class="sign-up">
    <form class="sign-up-form form" action="/layanan/update/{{ $layanan -> id_layanan }}" method="POST">
        @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Nama Layanan</p>
        <input class="form-input" name="nama_layanan" type="text" placeholder="Enter your name"  required value="{{ $layanan -> nama_layanan }}">
      </label>
      <div class="input-group mb-3">
      <label class="form-label-wrapper">
        <p class="form-label">Harga</p>
        <input class="form-input" name="harga_per_kg" type="number" placeholder="Masukkan Harga" required value="{{ $layanan -> harga_per_kg }}">
      </label>
      </div>
      <button type="submit" class="form-btn primary-default-btn transparent-btn">Update</button>
    </form>
  </article>
</main>
</div>
@endsection