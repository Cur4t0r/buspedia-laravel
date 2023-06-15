@extends('layouts.master')

@section('container')
<div class="container" style="margin-top: 100px">
  <h1>Pesan Tiket</h1>
  <form action="/order" method="post">
    @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
      </div>
      {{-- row departure & destination --}}
      <div class="row mb-3">
        <div class="col">
          <label for="start" class="form-label recquire">Titik Keberangkatan</label>
          <select class="form-select" name="start" id="start">
            <option selected>Pilih titik keberangkatan</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Lampung">Lampung</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Bali">Bali</option>
            <option value="Cirebon">Cirebon</option>
            <option value="Bandung">Bandung</option>
            <option value="Palembang">Palembang</option>
            <!-- Tambahkan opsi lain sesuai kebutuhan -->
          </select>
        </div>
        <div class="col">
          <label for="finish" class="form-label recquire">Tujuan Keberangkatan</label>
          <select class="form-select" name="finish" id="finish">
            <option selected>Pilih tujuan keberangkatan</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Lampung">Lampung</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Bali">Bali</option>
            <option value="Cirebon">Cirebon</option>
            <option value="Bandung">Bandung</option>
            <option value="Palembang">Palembang</option>
            <!-- Tambahkan opsi lain sesuai kebutuhan -->
          </select>
        </div>
      </div>
      {{-- END row departure & destination --}}
      {{-- row date & time --}}
      <div class="row mb-3">
        <div class="col">
          <label for="date" class="form-label">Tanggal</label>
          <input type="date" name="date" class="form-control" id="date">
        </div>
        <div class="col">
          <label for="time" class="form-label">Jam</label>
          <input type="time" name="time" class="form-control" id="time">
        </div>
      </div>
      {{-- END row date & time --}}
      {{-- row bus name & capacity --}}
      <div class="row mb-3">
        <div class="col">
          <label for="bus" class="form-label">Pilih Bus</label>
          <select class="form-select" name="bus" id="bus">
            <option selected>Pilih bus</option>
            <option value="PO SAN">PO SAN</option>
            <option value="PO Handoyo">PO Handoyo</option>
            <option value="PO Bintang Utama Putra">PO Bintang Utama Putra</option>
            <option value="PO Penantian Utama">PO Penantian Utama</option>
            <option value="PO NPM">PO NPM</option>
          </select>
        </div>
        <div class="col">
          <label for="jumlah" class="form-label">Jumlah Kursi</label>
          <input type="number" class="form-control" name="total_seat" id="jumlah" placeholder="Jumlah">
        </div>
      </div>
      {{-- END row bus name & capacity --}}
      <button type="submit" class="btn btn-dark">Pesan</button>
  </form>
</div>
@endsection
