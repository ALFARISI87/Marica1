<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags buat responsive design -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS + Font Awesome buat icon keren -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    
    <!-- Judul website + favicon -->
    <title>Marica | Digital Library</title>
    <link rel="icon" href="assets/logoUrl.jpg" type="image/png">
    
    <!-- Custom CSS buat style tambahan -->
    <style>
        /* Gradient color buat background */
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        /* Efek hover card keren */
        .card-hover {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Animasi teks */
        .text-animate {
            animation: fadeIn 1.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar Keren -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark gradient-bg shadow-lg">
        <div class="container">
            <!-- Logo + Nama Brand -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="assets/logo.png" alt="logo" width="70" class="me-2">
                <span class="fw-bold">SMKN 1 Sukorejo</span>
            </a>
            
            <!-- Tombol toggle buat mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#homeSection"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutSection"><i class="fas fa-info-circle me-1"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#teamSection"><i class="fas fa-users me-1"></i> Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer"><i class="fas fa-phone me-1"></i> Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-outline-light" href="sign/link_login.html">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Bagian Pertama yang keliatan) -->
    <section id="homeSection" class="py-5 mt-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Teks Hero -->
                <div class="col-lg-6 mb-5 mb-lg-0 text-animate">
                    <h1 class="display-4 fw-bold mb-4">
                        <span class="text-primary">Baca</span> Lebih Banyak, 
                        <span class="text-success">Jadi</span> Lebih Hebat
                    </h1>
                    <p class="lead mb-4">
                        Akses ribuan buku digital berkualitas tinggi langsung dari genggamanmu. 
                        Gratis, mudah, dan bikin kamu makin pinter!
                    </p>
                    <div class="d-flex gap-3">
                        <a href="sign/link_login.html" class="btn btn-primary btn-lg px-4">
                            <i class="fas fa-rocket me-2"></i> Mulai Sekarang
                        </a>
                        <a href="#aboutSection" class="btn btn-outline-secondary btn-lg px-4">
                            <i class="fas fa-book-open me-2"></i> Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                
                <!-- Gambar Hero -->
                <div class="col-lg-6">
                    <img src="assets/logoDashboard-transformed.jpeg" alt="Hero Image" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="aboutSection" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Kenapa Pilih <span class="text-primary">Marica</span>?</h2>
                    <p class="lead text-muted">
                        Kami nggak cuma nyediain buku, tapi pengalaman baca yang bikin betah!
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Fitur 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 card-hover shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="fas fa-book fa-2x"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Koleksi Lengkap</h5>
                            <p class="text-muted">
                                Ribuan buku dari berbagai genre tersedia 24/7. Dari pelajaran sampe novel bestseller, ada semua!
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Fitur 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 card-hover shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle p-3 d-inline-block mb-3">
                                <i class="fas fa-mobile-alt fa-2x"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Bisa Di Mana Aja</h5>
                            <p class="text-muted">
                                Akses lewat HP, laptop, atau tablet. Baca pas di angkot, istirahat sekolah, atau malem-malem.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Fitur 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 card-hover shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-warning bg-opacity-10 text-warning rounded-circle p-3 d-inline-block mb-3">
                                <i class="fas fa-user-graduate fa-2x"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Bikin Pinter</h5>
                            <p class="text-muted">
                                Materi pelajaran lengkap buat bantu kamu naikin nilai. Ujian? Santai aja!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="teamSection" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Tim <span class="text-primary">Keren</span> Kami</h2>
                    <p class="lead text-muted">
                        Orang-orang jago di balik layar yang bikin CuyPerpus bisa jalan
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 card-hover shadow-sm">
                        <div class="card-body text-center p-4">
                            <img src="https://ui-avatars.com/api/?name=Mangandaralam+Sakti&background=random&size=200" 
                                 alt="Team Member" class="rounded-circle mb-3" width="120">
                            <h5 class="fw-bold mb-1">Bang Al</h5>
                            <p class="text-muted mb-3">Full Stack Developer</p>
                            <p class="text-muted">
                                Siswa SMKN 1 Sukorejo yang jago coding ini bikin semua sistem jalan lancar.
                            </p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-primary"><i class="fab fa-github fa-lg"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-instagram fa-lg"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-linkedin fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="py-5 gradient-bg text-white">
        <div class="container py-4">
            <div class="row g-4">
                <!-- Logo Footer -->
                <div class="col-lg-4">
                    <img src="assets/logoFooter.png" alt="Logo" width="200" class="mb-3">
                    <p class="mb-4">
                        Kalilin - Perpustakaan digital kekinian buat generasi muda Indonesia.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Kontak -->
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-4">Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i> 
                            JL Budi Utomo
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone me-2"></i> 
                            0881022593379
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope me-2"></i> 
                            marica@gmail.com
                        </li>
                    </ul>
                </div>
                
                <!-- Link Cepat -->
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-4">Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#homeSection" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#aboutSection" class="text-white text-decoration-none">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#teamSection" class="text-white text-decoration-none">Tim Kami</a></li>
                        <li class="mb-2"><a href="sign/link_login.html" class="text-white text-decoration-none">Login</a></li>
                        <li class="mb-2"><a href="sign/sign_up.php" class="text-white text-decoration-none">Daftar</a></li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4 opacity-25">
            
            <div class="text-center pt-2">
                <p class="mb-0">
                    &copy; 2025 Kalilin. Dibuat dengan ❤️ oleh <a href="#" class="text-white text-decoration-none">Bang AL</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script buat animasi scroll -->
    <script>
        // Smooth scroll buat navigasi
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Animasi navbar pas di-scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
                navbar.classList.add('bg-dark');
                navbar.classList.remove('gradient-bg');
            } else {
                navbar.classList.remove('shadow');
                navbar.classList.remove('bg-dark');
                navbar.classList.add('gradient-bg');
            }
        });
    </script>
</body>
</html>