@extends('layouts.master')

@section('container')
<div class="container" style="margin-top: 100px">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-2">
        <h3 class="text-center">Pembayaran</h3>
        <div class="card">
          <div class="card-body">
            <div class="text-center mb-4">
              <img src="qris.jpg" alt="qris" class="img-fluid" style="width: 70%">
            </div>
            <p class="text-center">Scan QR Code untuk melakukan pembayaran</p>
            <div class="text-center mt-4">
              <button class="btn btn-outline-dark bg-dark mr-3"><a href="/histories" class="text-decoration-none text-white">Konfirmasi Pembayaran</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection


  