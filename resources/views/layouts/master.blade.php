<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buspedia | {{ $title }}</title>
     {{--  --}}
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="favicon.png" sizes="320x320">
</head>
<body>

    @include('partials.navbar')

    <div class="container">
      @yield('container')
    </div>

    {{-- start footer --}}
    <footer class=" footer bg-light text-center text-lg-start">
      <div class="container">
        <hr class="footer-divider">
        <div class="row py-4">
            <div class="col-lg-8 mb-2 mb-lg-0 text-lg-left small">
                &copy; 2023 Buspedia
                <span class="px-1 text-muted">|</span>
                Buspedia adalah proyek akhir kelompok 4 kelas Arpanet Studi Independen Chairos Academy
            </div>
        </div>
      </div>
    </footer>
    {{-- end footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
