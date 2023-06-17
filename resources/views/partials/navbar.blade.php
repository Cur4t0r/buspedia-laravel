{{-- nav bar --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light text-dark border-bottom border-bottom-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="favicon.png" alt="logo" width="60" height="48" class="d-inline-block align-text-center">
      Buspedia
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ url("/order") }}>Pesan</a>
            </li>
            <li class="nav-item">
              <a id="order-histories" class="nav-link" href="/histories">Cek Pesanan</a>
            </li>
          </ul>

          <ul ul class="navbar-nav">
            @auth
            <li class="nav-item dropdown d-block justify-content-center align-self-center">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="user.png" style="width: 32px" alt="user">
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li><a class="dropdown-item" href="/profile">Profil</a></li>
                <li><a class="dropdown-item" href="/settings">Pengaturan</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Keluar</button>
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item d-block justify-content-center align-self-center">
              <span class="nav-link" href="#">
                {{ auth()->user()->name }}
              </span>
            </li>
            @else
              <li class="nav-item">
                <a id="login" href="/login" class="btn btn-outline-dark mr-3">Masuk</a>
              </li>
              <li>
                <a id="register" href="/register" class="btn btn-outline-dark bg-dark text-light">Daftar</a>
              </li>
            @endauth
          </ul>

        </div>
    </div>
</nav>
{{-- end navbar --}}
