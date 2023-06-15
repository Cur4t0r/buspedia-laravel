@extends('layouts.master')

@section('container')
<section class="container d-flex justify-content-center">
    <div class="col-7" style="margin-top: 100px">
        <div class="card">
            <div class="card-header">
                <a href="/histories" class="btn btn-dark">Kembali</a>
            </div>
            <div class="card-body">
                <p class="card-text">Order ID : {{ $history->id }} </p>
                <p class="card-text">Nama : {{ $history->name }} </p>
                <p class="card-text">Asal : {{ $history->start }}</p>
                <p class="card-text">Tujuan : {{ $history->finish }} </p>
                <p class="card-text">Jumlah Kursi : {{ $history->total_seat }}</p>
                <p class="card-text">Tanggal keberangkatan : {{ $history->date }} </p>
                <p class="card-text">Jam keberangkatan : {{ $history->time }} </p>
            </div>
        </div>
    </div>
</section>
@endsection