@extends('layouts.master')

@section('container')
{{-- Carousel --}}
<section id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="Slide 1" style="height: 550px">
      <div class="carousel-caption">
        <p>Kami berfokus pada pengembangan kemitraan dengan agen perjalanan dan mitra bisnis lainnya guna memperluas jangkauan pemasaran dan meningkatkan penjualan tiket bus.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="Slide 2" style="height: 550px">
      <div class="carousel-caption">
        <p>Perjalanan jarak jauh dengan bus sering kali menjadi pilihan bagi wisatawan budget yang ingin menjelajahi berbagai tempat dengan biaya yang lebih terjangkau.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="Slide 3" style="height: 550px">
      <div class="carousel-caption">
        <p>Kami menyediakan layanan transportasi umum yang penting dalam menghubungkan berbagai bagian kota dan memudahkan mobilitas penduduk.</p>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>
{{-- End Carousel --}}

{{-- Card Bus --}}
<div class="id mt-3">
  <div class="container">
    <div class="row text-center">
      <div class="col mb-3">
        <h2>Telusuri Kemewahan Perjalanan dengan Pelayanan Terbaik</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 mb-3">
        <div class="card">
          <a href="/order"><img src="img/card1.jpg" class="d-block w-100 card-img-top" alt="card1" style="height: 120px"></a>
          <div class="card-body">
            <p class="card-text"><a href="/order" class="text-dark text-decoration-none">PO Fajar Riau Wisata</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card">
          <a href="/order"><img src="img/card2.jpg" class="d-block w-100 card-img-top" alt="card2" style="height: 120px"></a>
          <div class="card-body">
            <p class="card-text"><a href="/order" class="text-dark text-decoration-none">PO Handoyo</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card">
          <a href="/order"><img src="img/card3.jpg" class="d-block w-100 card-img-top" alt="card3" style="height: 120px"></a>
          <div class="card-body">
            <p class="card-text"><a href="/order" class="text-dark text-decoration-none">PO SAN</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card">
          <a href="/order"><img src="img/card4.jpg" class="d-block w-100 card-img-top" alt="card4" style="height: 120px"></a>
          <div class="card-body">
            <p class="card-text"><a href="/order" class="text-dark text-decoration-none">PO Bintang Utara</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card">
          <a href="/order"><img src="img/card5.jpg" class="d-block w-100 card-img-top" alt="card5" style="height: 120px"></a>
          <div class="card-body">
            <p class="card-text"><a href="/order" class="text-dark text-decoration-none">PO Putra Pelangi</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card">
          <a href="/order"><img src="img/card6.jpg" class="d-block w-100 card-img-top" alt="card6" style="height: 120px"></a>
          <div class="card-body">
            <p class="card-text"><a href="/order" class="text-dark text-decoration-none">PO NPM</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Card --}}

{{-- To regist --}}
<section class="registration-cta optimize-a border-bottom border-bottom-dark" >
  <div class="container" style="background-color: #15202b">
    <div class="dcd-bg-main-blue dcd-bold-shadow text-center text-light p-5">
      <h2 class="font-weight-500 mb-3">Tunggu apa lagi?</h2>
      <p>Perjalanan Aman dan Nyaman Bersama Kami</p>
      <a href="/register" class="btn dcd-btn bg-white text-dark remove-style-link mt-3 gtm-reg-btn-a">Buat Akun</a>
    </div>
  </div>
</section>
{{-- End To regist --}}
    
<!-- Grid container -->
<hr class=" container footer-divider">
<div class="container p-4">
  <div class="row">
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <p>
        Temukan berbagai layanan transportasi bus terbaik untuk perjalanan Anda. 
        Nikmati kenyamanan, keamanan, dan kehandalan bersama kami.
      </p>
    </div>
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <p>
        Temukan berbagai tujuan perjalanan yang ditawarkan oleh layanan transportasi bus kami.
        Jadikan perjalanan Anda lebih mudah dan menyenangkan dengan pilihan terbaik.
      </p>
    </div>
  </div>
</div>
<!-- Grid container -->
@endsection