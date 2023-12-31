  <div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="white">
      <a href="/" class="logo">
        <img src="favicon.png" alt="navbar brand" class="navbar-brand" width="60px"/>Buspedia
      </a>
      <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="icon-menu"></i>
        </span>
      </button>
      <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="icon-menu"></i>
        </button>
      </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
      <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
          <li class="nav-item dropdown hidden-caret">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
              <div class="avatar-sm">
                <img src="user2.png" alt="..." class="avatar-img rounded-circle" />
              </div>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
              <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg"><img src="user.png" alt="image profile" class="avatar-img rounded" /></div>
                    <div class="u-text">
                      <h4>{{ auth()->user()->name }}</h4>
                      <p class="text-muted">{{ auth()->user()->email }}</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/profile">Profil</a>
                  <a class="dropdown-item" href="/settings">Pengaturan Akun</a>
                  <div class="dropdown-divider"></div>
                  <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">Keluar</button>
                  </form>
                </li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
  </div>