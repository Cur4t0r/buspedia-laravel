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
        </tr>
      </thead>
      <tbody>
        @foreach ($histories as $order)
        <tr>
          <td>{{ auth()->$order()->id }}</td>
          <td>
            <a href="/histories/{{ $history->slug }}" class="text-dark text-decoration-none"><strong> {{ auth()->$order()->name }} </strong></a>
          </td>
          <td>{{ auth()->$order()->start }}</td>
          <td>{{ auth()->$order()->finish }}</td>
          <td class="text-center">{{ auth()->$order()->total_seat }}</td>
        </tr>
        @endforeach
      </tbody>  
    </table>
    <div class="d-flex justify-content-end">
      {{ $histories->links() }}
    </div>
  </div>
@endsection