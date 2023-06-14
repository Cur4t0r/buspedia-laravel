@extends('layouts.master')

@section('container')

<section style="margin-top: 100px">
  <div class="pt-2 pb-2 mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container min-vh-50">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-6 col-xl-5">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-4">
                <h2 class="text-uppercase text-center mb-4">Masuk</h2>
  
                @if (session('registration_success'))
                  <div class="alert alert-success mb-4">
                    {{ session('registration_success') }}
                  </div>
                @endif
                
                @if (session('login_error'))
                  <div class="alert alert-danger mb-4">
                    {{ session('login_error') }}
                  </div>
                @endif
                <form action="/login" method="POST">
                  @csrf
                  <div class="form-floating mb-4">
                    <input type="text" name="username" id="username"  class="form-control form-control-md @error('username') is-invalid @enderror" placeholder="Username" required value="{{ old('username') }}"/>
                    <label class="form-label" for="username">Username</label>
                    @error('username')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                  </div>
  
                  <div class="form-floating mb-4">
                    <input type="password" name="password" id="password" class="form-control form-control-md" placeholder="Password" required/>
                    <label class="form-label" for="password">Password</label>
                  </div>
  
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">Masuk</button>
                  </div>
  
                  <p class="text-center text-muted mt-5 mb-0">Belum punya akun? <a href="/register"
                      class="text-body"><u>Daftar disini</u></a>
                  </p>
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection