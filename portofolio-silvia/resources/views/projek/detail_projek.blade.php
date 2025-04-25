<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Projek | My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- FontAwesome (untuk ikon) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            scroll-behavior: smooth;
           
        }

        .navbar.scrolled {
            background-color: rgba(15, 32, 39, 0.85) !important;
            backdrop-filter: blur(6px);
        }
        .navbar-brand,
        .nav-link {
            color: #f4f4f4 !important;
        }

        .nav-link:hover {
            color: #A1E3F9 !important;
        }

        section {
            padding: 100px 0;
        }

        .bg-section{
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        }

        footer {
            background-color: #222;
        }
    </style>
    </head>
  <body >
    <div class="bg-section">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Silvia Eka Widya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/#beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/#about">Tentang Saya</a></li>
                <li class="nav-item"><a class="nav-link" href="/#projects">Projects</a></li>
                @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" target="_blank">Login</a></li>
                @else
                <li class="nav-item"><a class="nav-link" href="/data_projek">Masuk</a></li>
                @endguest
            </ul>
            </div>
        </div>
        </nav>

    
    
        <!-- konten -->
        <section id="konten"> 
            <div class="container pt-5 text-white">
                <div class="row">
                    <div class="col-7">
                        <img src="{{ asset('image_projek/' . $projek->gambar) }}" class="img-fluid" alt="{{ $projek->judul }}">
                    </div>
                    <div class="col-5 ">
                        <h2 class="text-capitalize mb-3">{{ $projek->judul }}</h3>
                        <p class="mb-4">{{ $projek->deskripsi }}</p>
                        @if($projek->demo_url)
                            <a href="{{ $projek->demo_url }}" class="btn btn-primary btn-lg" target="_blank">Demo</a>
                        @else
                            <button class="btn btn-secondary btn-lg" disabled>tidak tersedia</button>
                        @endif
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer Start -->
        <footer id="footer" class="py-3 text-white ">
        <p class="text-center text-white pt-3">
            Dibuat dengan <span class="text-danger">&#x2764;</span> oleh 
            <a href="https://wa.me/6285932512828" target="_blank" class="fw-bold text-primary text-decoration-none">Silvia Eka Widya</a>, menggunakan 
            <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank" class="fw-bold text-info text-decoration-none">Bootstrap</a>.
        </p>
        </footer>
        <!-- Footer End -->
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>