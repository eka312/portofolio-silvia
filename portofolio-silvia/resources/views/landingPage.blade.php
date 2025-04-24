<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>landingpage | My Portfolio</title>
    <link href="iPortfolio-1.0.0/assets/img/portfolio.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
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

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
        }

        .hero img {
            max-width: 100%;
        }

        section {
            padding: 100px 0;
        }

        footer {
            background-color: #222;
            color: #aaa;
            padding: 30px 0;
            text-align: center;
        }

        .navbar-brand,
        .nav-link {
            color: #f4f4f4 !important;
        }

        .nav-link:hover {
            color: #A1E3F9 !important;
        }
        .hero,
        #about {
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        color: white;
        }

        #projects{
          background-color: #CBDCEB;
          
        }

        #contact{
          background-color: #CBDCEB;
        }

        #footer{
          background-color: #1c2331;
        }
        
    </style>
  </head>

  <body>
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
            <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">Tentang Saya</a></li>
            <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <h1 class="display-5 fw-bold">Halo Semua &#x1F44B;, Saya <br /><span class="text-info">Silvia Eka Widya</span></h1>
            <p class="lead">Seorang Web Developer yang senang membangun hal-hal keren di internet &#10024;</p>
          </div>
          <div class="col-md-6 text-center mt-4 mt-md-0">
            <img src="{{ asset('sandhikagalih.github.io-main/img/foto2.png') }}" alt="Foto Silvia" class="img-fluid rounded-circle border border-5" />
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-0" >
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
              <h2 class="fw-bold">Tentang Saya</h2>
              <p class="text-info">Sedikit cerita tentang siapa saya dan kenapa saya suka coding &#128516;</p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="sandhikagalih.github.io-main/img/foto3.jpg" alt="Coding" class="img-fluid rounded shadow" />
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <p class="fs-5">
              Saya adalah seorang web developer yang menyukai dunia teknologi dan senang memecahkan masalah dengan logika serta kreativitas.
              Fokus saya adalah membangun website modern dan user-friendly dengan HTML, CSS, JavaScript, dan framework seperti Bootstrap & Laravel.
              </p>
              <ul class="list-unstyled mt-4">
                <li><i class="fas fa-check-circle text-info me-2"></i>Berpengalaman di Frontend & Backend</li>
                <li><i class="fas fa-check-circle text-info me-2"></i>Senang belajar hal baru</li>
                <li><i class="fas fa-check-circle text-info me-2"></i>Terbiasa kerja tim & proyek real</li>
              </ul>
            </div>
          </div>
        </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#CBDCEB"
            fill-opacity="2"
            d="M0,96L48,122.7C96,149,192,203,288,192C384,181,480,107,576,80C672,53,768,75,864,101.3C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
      </svg>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-0 text-dark">
        <div class="container">
            <div class="row text-center mb-5">
            <div class="col">
                <h2 class="fw-bold">Project Saya</h2>
                <p class=" text-secondary">Beberapa proyek seru yang pernah saya buat</p>
            </div>
            </div>
            <div class="row g-4">
              @foreach( $projek as $item )
                <div class="col-md-4">
                  <div class="card shadow h-100">
                    <!-- Menampilkan gambar projek -->
                    <img src="{{ asset('image_projek/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" />

                    <div class="card-body">
                      <h5 class="card-title">{{ $item->judul }}</h5>
                      <p class="card-text">{{ $item->deskripsi }}</p>
                      @if($item->demo_url)
                        <a href="{{ $item->demo_url }}" class="btn btn-primary" target="_blank">Demo</a>
                      @else
                        <button class="btn btn-secondary" disabled>tidak tersedia</button>
                      @endif
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#1c2331"
          fill-opacity="10"
          d="M0,128L30,149.3C60,171,120,213,180,224C240,235,300,213,360,192C420,171,480,149,540,160C600,171,660,213,720,197.3C780,181,840,107,900,101.3C960,96,1020,160,1080,197.3C1140,235,1200,245,1260,234.7C1320,224,1380,192,1410,176L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Footer Start -->
    <footer id="footer" class="pt-0 pb-3 text-white ">
      <div class="container ">
        <div class="row mx-auto text-start">
          <div class="col-md-3 mb-3">
            <h2 class="h4 fw-bold ">Silvia Eka Widya</h2>
            <h3 class="h5 fw-bold">Hubungi Saya</h3>
            <p>fue312@gmail.com</p>
            <p>JLN. DUSUN SUMBERARUM RT 2 RW 12 SUMBERARUM Kel. Tegalasri Kec. Wlingi</p>
            <p>Blitar</p>
          </div>

          <div class="col-md-2 mb-2">
            <h3 class="h5 fw-semibold ">Kategori Tulisan</h3>
            <ul class="list-unstyled ">
              <li><a href="#" class=" text-decoration-none text-white d-block mb-2">Programming</a></li>
              <li><a href="#" class=" text-decoration-none text-white d-block mb-2">projects</a></li>
              <li><a href="#" class=" text-decoration-none text-white d-block mb-2">Gaya Hidup</a></li>
            </ul>
          </div>

          <div class="col-md-2 mb-2">
            <h3 class="h5 fw-semibold ">Tautan</h3>
            <ul class="list-unstyled">
              <li><a href="#beranda" class=" text-decoration-none text-white d-block mb-2">Beranda</a></li>
              <li><a href="#about" class=" text-decoration-none text-white d-block mb-2">Tentang Saya</a></li>
              <li><a href="#projects" class=" text-decoration-none text-white d-block mb-2">projects</a></li>
              <li><a href="#contact" class=" text-decoration-none text-white d-block mb-2">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-2 mb-2">
            <h3 class="h5 fw-semibold">Skill & Tools</h3>
            <ul class="list-unstyled">
              <li>HTML, CSS, JS</li>
              <li>Bootstrap</li>
              <li>Laravel</li>
              <li>Figma, Canva</li>
            </ul>
          </div>

          <div class="col-md-3 mb-3">
            <h3 class="h5 fw-semibold">Hobi & Minat</h3>
            <ul class="list-unstyled">
              <li>Membaca Webtoon</li>
              <li>Menggambar</li>
              <li>Ngoding di malam hari</li>
              <li>Menonton Anime,Animasi</li>
              <li>Mentranslate Komik</li>
            </ul>
          </div>
        </div>
        
        <hr class="border border-light mt-4">
        <div class="text-center">
          <!-- Youtube -->
          <a href="https://www.youtube.com/@itz_fue" target="_blank" class="btn btn-outline-light btn-sm rounded-circle p-2 me-2">
            <i class="fa-brands fa-youtube fa-xl"></i>
          </a>
          <!-- Instagram -->
          <a href="https://www.instagram.com/silviaeka312/" target="_blank" class="btn btn-outline-light btn-sm rounded-circle p-2 me-2">
            <i class="fa-brands fa-instagram fa-xl"></i>
          </a>
          <!-- WhatsApp-->
          <a href="https://wa.me/6285932512828 " target="_blank" class="btn btn-outline-light btn-sm rounded-circle p-2 me-2">
            <i class="fa-brands fa-whatsapp fa-xl"></i>
          </a>
          <!-- gmail -->
          <a href="#contact" class="btn btn-outline-light btn-sm rounded-circle p-2">
            <i class="fa-solid fa-envelope-open-text fa-xl"></i>
          </a>
        </div>
      </div>
      <p class="text-center text-white pt-3">
        Dibuat dengan <span class="text-danger">&#x2764;</span> oleh 
        <a href="https://wa.me/6285932512828" target="_blank" class="fw-bold text-primary text-decoration-none">Silvia Eka Widya</a>, menggunakan 
        <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank" class="fw-bold text-info text-decoration-none">Bootstrap</a>.
      </p>
    </footer>
    <!-- Footer End -->



    <!-- Script Scroll Navbar -->
    <script>
      window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('scrolled', window.scrollY > 50);
      });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
