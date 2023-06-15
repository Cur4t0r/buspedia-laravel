@extends('dashboard.layouts.main')

@section('container')
<div class="mt-2 mb-4">
  <h2 class="text-white pb-2">Halo, {{ auth()->user()->name }}</h2>
</div>

<div class="row row-card-no-pd">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-head-row">
          <h4 class="card-title">Dashboard</h4>
        </div>
        <p class="card-category">Anda berada di Halaman Dashboard</p>
      </div>
    </div>
  </div>
</div>
@endsection