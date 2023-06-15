@extends('layouts.master')

@section('container')
  <div class="container" style="margin-top: 100px">
    <h1>Riwayat Pesanan</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Nama Pemesan</th>
          <th>Awal</th>
          <th>Tujuan</th>
          <th class="text-center">Jumlah Kursi</th>
          <th>Tanggal</th>
          <th>Jam</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($histories as $history)
        <tr>
          <td>{{ $history->id }}</td>
          <td>
            <a href="/histories/history" class="text-dark text-decoration-none"><strong> {{ $history->name }} </strong></a>
          </td>
          <td>{{ $history->start }}</td>
          <td>{{ $history->finish }}</td>
          <td class="text-center">{{ $history->total_seat }}</td>
          <td>{{ $history->date }}</td>
          <td>{{ $history->time }}</td>
        </tr>
        @endforeach
      </tbody>  
    </table>
    <div class="d-flex justify-content-end">
    </div>
  </div>
@endsection