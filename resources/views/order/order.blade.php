@extends('layouts.master')

@section('container')
<div class="container" style="margin-top: 100px">
  <h1>Pesan Tiket</h1>
  <form>
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
      </div>
      {{-- row departure & destination --}}
      <div class="row mb-3">
        <div class="col">
          <label for="departure" class="form-label recquire">Titik Keberangkatan</label>
          <select class="form-select" id="departure">
            <option selected>Pilih titik keberangkatan</option>
            <option value="1">Jakarta</option>
            <option value="2">Lampung</option>
            <option value="3">Surabaya</option>
            <option value="4">Bali</option>
            <option value="5">Cirebon</option>
            <option value="6">Bandung</option>
            <option value="7">Palembang</option>
            <!-- Tambahkan opsi lain sesuai kebutuhan -->
          </select>
        </div>
        <div class="col">
          <label for="destination" class="form-label recquire">Tujuan Keberangkatan</label>
          <select class="form-select" id="destination">
            <option selected>Pilih tujuan keberangkatan</option>
            <option value="1">Jakarta</option>
            <option value="2">Lampung</option>
            <option value="3">Surabaya</option>
            <option value="4">Bali</option>
            <option value="5">Cirebon</option>
            <option value="6">Bandung</option>
            <option value="7">Palembang</option>
            <!-- Tambahkan opsi lain sesuai kebutuhan -->
          </select>
        </div>
      </div>
      {{-- END row departure & destination --}}
      {{-- row date & time --}}
      <div class="row mb-3">
        <div class="col">
          <label for="date" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date">
        </div>
        <div class="col">
          <label for="time" class="form-label">Jam</label>
          <input type="time" class="form-control" id="time">
        </div>
      </div>
      {{-- END row date & time --}}
      {{-- row bus name & capacity --}}
      <div class="row mb-3">
        <div class="col">
          <label for="bus" class="form-label">Jumlah Kursi</label>
          <select class="form-select" id="bus">
            <option selected>Pilih bus</option>
            <option value="1">PO SAN</option>
            <option value="2">PO Handoyo</option>
            <option value="3">PO Bintang Utama Putra</option>
            <option value="4">PO Penantian Utama</option>
            <option value="5">PO NPM</option>
          </select>
        </div>
        <div class="col">
          <label for="jumlah" class="form-label">Jumlah Kursi</label>
          <input type="number" class="form-control" id="jumlah" placeholder="Jumlah">
        </div>
      </div>
      {{-- END row bus name & capacity --}}
      <button type="submit" class="btn btn-dark">Pesan</button>
  </form>
  <div id="notification" class="notification hidden"></div>
</div>



@endsection
