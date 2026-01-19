@extends('master')
@section('isi')
<main class="main users chart-page" id="skip-target">
    <div class="container">
<h2 class="main-title">Ubah Transaksi {{ $transaksi->nama_pelanggan }}</h2>
<article class="sign-up">
    <form class="sign-up-form form" action="{{ route('transaksi.store') }}" method="POST">
        @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Waktu Transaksi</p>
        <input class="form-input" name="waktu_transaksi" type="date" placeholder="Tanggal"  required{{ $transaksi -> waktu_transaksi }}>
      </label>
      <div class="input-group mb-3">
      <label class="form-label-wrapper">
        <p class="form-label">Nama Pelanggan</p>
        <input class="form-input" name="nama_pelanggan" type="text" placeholder="Masukkan Nama Pelanggan" required value="{{ $transaksi -> nama_pelanggan }}">
      </label>
      <label class="mb-3 form-label-wrapper">
        <p class="form-label">Layanan</p>
        <select class="form-input" name="id_layanan" type="text" required>
          <option selected disabled>Pilih Layanan</option>
          @foreach ($layanans as $item)
          <option value="{{ $item->id_layanan }}"
          @if($item -> id_layanan = $transaksi -> id_layanan) selected
          @endif>{{ $item -> nama_layanan }}</option>
          @endforeach
          <option>Haia</option>
        </select>
      </label>
      <label class="mb-3 form-label-wrapper">
        <p class="form-label">Berat</p>
        <input class="form-input" name="berat" type="number" placeholder="Masukkan Berat" required value="{{ $transaksi -> berat }}">
      </label>
      <label class="mb-3 form-label-wrapper">
        <p class="form-label">Keterangan</p>
        <select class="form-input" name="keterangan" type="text" placeholder="Keterangan" required>
          <option selected disabled>Keterangan Transaksi</option>
          <option>Proses</option>
          <option>Selesai</option>
        </select>
      </label>
      <label class="mb-3 form-label-wrapper">
        <p class="form-label">Pembayaran</p>
        <select class="form-input" name="pembayaran" type="text" placeholder="Pembayaran" required>
          <option selected disabled>Keterangan Pembayaran</option>
          <option>Belum Bayar</option>
          <option>Lunas</option>
        </select>
      </label>
      </div>
      <button type="submit" class="form-btn primary-default-btn transparent-btn">Sign in</button>
    </form>
  </article>
    </div>
</main>
@endsection