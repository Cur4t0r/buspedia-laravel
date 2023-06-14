@extends('dashboard.layouts.main')

@section('container')
<div class="mt-2 mb-4">
  <h2 class="text-white pb-2">Welcome back, {{ auth()->user()->name }}</h2>
  <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.</h5>
</div>

<div class="row row-card-no-pd">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-head-row">
          <h4 class="card-title">Users Geolocation</h4>
          <div class="card-tools">
            <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
            <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
            <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
          </div>
        </div>
        <p class="card-category">Map of the distribution of users around the world</p>
      </div>
    </div>
  </div>
</div>
@endsection