@extends('layouts.master')

@section('container')

<section style="margin-top: 100px">
  <div class="pt-2 pb-2 mt-4">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body px-4 py-4">
                <h2 class="text-uppercase text-center mb-4">Daftar</h2>
  
                <form action="/register" method="post">
                  @csrf
                  <div class="form-floating mb-4">
                    <input type="text" name="name" id="name" class="form-control form-control-md @error('name') is-invalid @enderror" placeholder="Nama Lengkap" required value="{{ old('name') }}"/>
                    <label class="form-label" for="name">Nama Lengkap</label>
                    @error('name')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                  </div>
                  
                  <div class="form-floating mb-4">
                    <input type="text" name="username" id="username" class="form-control form-control-md @error('username') is-invalid @enderror" placeholder="Username" required value="{{ old('username') }}"/>
                    <label class="form-label" for="username">Username</label>
                    @error('username')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                  </div>
  
                  <div class="form-floating mb-4">
                    <input type="email" name="email" id="email" class="form-control form-control-md @error('email') is-invalid @enderror" placeholder="Email" required value="{{ old('email') }}"/>
                    <label class="form-label" for="email">Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                  </div>
  
                  <div class="row">
                    <div class="col form-floating mb-4">
                      <input type="password" name="password" id="password" class="form-control form-control-md @error('password') is-invalid @enderror" placeholder="Password" required/>
                      <label class="form-label" for="password">Password</label>
                      @error('password')
                        <div class="invalid-feedback">
                          <strong>{{ $message }}</strong>
                        </div>
                      @enderror
                    </div>
                    <div class="col form-floating mb-4">
                      <input type="password" name="repassword" id="repassword" class="form-control form-control-md @error('password') is-invalid @enderror" placeholder="Password" required/>
                      <label class="form-label" for="repassword">Ulangi password</label>
                      @error('password')
                        <div class="invalid-feedback">
                          <strong>{{ $message }}</strong>
                        </div>
                      @enderror
                    </div>
                  </div>
  
                  <button type="submit" class="d-block mx-auto btn btn-dark">Daftar</button>
                </form>
                <p class="text-center text-muted mt-5 mb-0">Sudah punya akun? <a href="/login"
                  class="text-body"><u>Masuk</u></a>
                </p>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection