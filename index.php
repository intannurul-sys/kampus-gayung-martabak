<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampus Gayung Martabak - Unggul, Kreatif & Inovatif</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts: Inter & Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        /* Variabel Skema Warna Institusi Pendidikan (Navy & Emas) */
        :root {
            --navy-primary: #0f2544;
            --navy-dark: #09172b;
            --navy-light: #1a3a68;
            --gold-primary: #f59e0b;
            --gold-hover: #d97706;
            --gold-soft: #fef3c7;
            --bg-light: #f8fafc;
            --text-dark: #1e293b;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            background-color: #ffffff;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, .navbar-brand {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Kustomisasi Warna & Tombol */
        .bg-navy {
            background-color: var(--navy-primary) !important;
        }
        .bg-navy-dark {
            background-color: var(--navy-dark) !important;
        }
        .text-navy {
            color: var(--navy-primary) !important;
        }
        .text-gold {
            color: var(--gold-primary) !important;
        }
        .bg-gold-soft {
            background-color: var(--gold-soft) !important;
        }

        .btn-gold {
            background-color: var(--gold-primary);
            color: #09172b;
            font-weight: 700;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-gold:hover {
            background-color: var(--gold-hover);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(245, 158, 11, 0.35);
        }

        .btn-navy {
            background-color: var(--navy-primary);
            color: #ffffff;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-navy:hover {
            background-color: var(--navy-light);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Navbar Styling */
        .navbar {
            transition: all 0.3s ease;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        }
        .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85) !important;
            padding: 0.5rem 1rem !important;
            transition: color 0.2s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--gold-primary) !important;
        }

        /* Hero Section dengan Gambar Latar Unsplash */
        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(9, 23, 43, 0.90) 0%, rgba(15, 37, 68, 0.78) 100%),
                        url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            min-height: 88vh;
            display: flex;
            align-items: center;
            color: #ffffff;
            padding-top: 80px;
        }

        .hero-badge {
            background: rgba(245, 158, 11, 0.2);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: #fcd34d;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* Kartu Statistik Floating */
        .stats-wrapper {
            margin-top: -55px;
            position: relative;
            z-index: 10;
        }
        .stat-card {
            border-radius: 16px;
            border: none;
            box-shadow: 0 10px 30px rgba(15, 37, 68, 0.08);
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }

        /* Kartu Fakultas */
        .faculty-card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.35s ease;
            height: 100%;
        }
        .faculty-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(15, 37, 68, 0.14);
        }
        .faculty-card img {
            height: 210px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .faculty-card:hover img {
            transform: scale(1.05);
        }
        .img-wrapper {
            overflow: hidden;
            position: relative;
        }

        /* Fasilitas Galeri */
        .facility-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            height: 280px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .facility-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .facility-card:hover img {
            transform: scale(1.08);
        }
        .facility-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(9, 23, 43, 0.9) 10%, rgba(9, 23, 43, 0.1) 70%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            color: #ffffff;
        }

        /* Section Divider Accent */
        .section-line {
            width: 60px;
            height: 4px;
            background-color: var(--gold-primary);
            border-radius: 2px;
        }

        /* Custom Alert Banner Portal */
        #portalBanner {
            display: none;
            background: linear-gradient(90deg, #065f46, #047857);
            color: white;
        }
    </style>
</head>
<body>

    <!-- Banner Status Login (Muncul setelah user berhasil login) -->
    <div id="portalBanner" class="py-2 px-3 text-center small">
        <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
            <span>
                <i class="bi bi-check-circle-fill text-warning me-1"></i>
                Selamat datang kembali di <strong>SIAKAD Kampus Gayung Martabak</strong>, <span id="bannerUserName" class="fw-bold text-warning"></span> (<span id="bannerUserRole"></span>).
            </span>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-warning fw-semibold py-0 px-2" data-bs-toggle="modal" data-bs-target="#dashboardModal">
                    <i class="bi bi-speedometer2 me-1"></i>Buka Dashboard Mini
                </button>
                <button class="btn btn-sm btn-outline-light py-0 px-2" onclick="logoutPortal()">
                    Keluar
                </button>
            </div>
        </div>
    </div>

    <!-- 1. NAVBAR RESPONSIF -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-navy sticky-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#beranda">
                <div class="bg-warning text-dark rounded-3 d-flex align-items-center justify-content-center fw-bold" style="width: 42px; height: 42px;">
                    <i class="bi bi-mortarboard-fill fs-4"></i>
                </div>
                <div class="lh-1">
                    <span class="d-block fw-bold fs-5 tracking-tight">GAYUNG MARTABAK</span>
                    <small class="text-gold fw-semibold" style="font-size: 0.72rem; letter-spacing: 1.5px;">UNIVERSITAS UNGGUL</small>
                </div>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarKampus" aria-controls="navbarKampus" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarKampus">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fakultas">Fakultas & Prodi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>

                <!-- Area Tombol Login / Profil Pengguna -->
                <div id="navAuthArea" class="d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-gold rounded-pill px-4 py-2 d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Login Portal</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <header id="beranda" class="hero-section">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge hero-badge rounded-pill px-3 py-2 mb-3">
                        <i class="bi bi-stars me-1"></i> Penerimaan Mahasiswa Baru TA 2026/2027 Telah Dibuka
                    </span>
                    <h1 class="display-4 fw-extrabold mb-3 lh-sm">
                        Mencetak Pemimpin Masa Depan di <span class="text-gold">Kampus Gayung Martabak</span>
                    </h1>
                    <p class="lead text-light opacity-90 mb-4 pe-lg-5">
                        Institusi pendidikan tinggi modern yang memadukan keunggulan riset teknologi, kewirausahaan kreatif, dan pelestarian kearifan lokal Nusantara untuk bersaing di kancah global.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#kontak" class="btn btn-gold btn-lg rounded-pill px-4 py-3 shadow">
                            <i class="bi bi-pencil-square me-2"></i>Daftar Sekarang
                        </a>
                        <a href="#fakultas" class="btn btn-outline-light btn-lg rounded-pill px-4 py-3">
                            <i class="bi bi-compass me-2"></i>Jelajahi Prodi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- STATISTIK SINGKAT (FLOATING CARDS) -->
    <section class="stats-wrapper pb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="card stat-card bg-white p-4 text-center h-100">
                        <div class="text-gold fs-1 mb-2"><i class="bi bi-people-fill"></i></div>
                        <h3 class="fw-bold text-navy mb-1">14.500+</h3>
                        <p class="text-muted small mb-0 fw-medium">Mahasiswa Aktif</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card bg-white p-4 text-center h-100">
                        <div class="text-gold fs-1 mb-2"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h3 class="fw-bold text-navy mb-1">28 Prodi</h3>
                        <p class="text-muted small mb-0 fw-medium">Program Studi Terakreditasi</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card bg-white p-4 text-center h-100">
                        <div class="text-gold fs-1 mb-2"><i class="bi bi-person-workspace"></i></div>
                        <h3 class="fw-bold text-navy mb-1">620+</h3>
                        <p class="text-muted small mb-0 fw-medium">Dosen & Peneliti Berkualitas</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card bg-white p-4 text-center h-100">
                        <div class="text-gold fs-1 mb-2"><i class="bi bi-award-fill"></i></div>
                        <h3 class="fw-bold text-navy mb-1">Unggul (A)</h3>
                        <p class="text-muted small mb-0 fw-medium">Akreditasi Institusi BAN-PT</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SECTION TENTANG KAMI / KEUNGGULAN KAMPUS -->
    <section id="tentang" class="py-5 my-3">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=900&q=80" 
                             onerror="this.src='https://placehold.co/800x550/0f2544/ffffff?text=Aktivitas+Mahasiswa+Gayung+Martabak'"
                             alt="Mahasiswa Berdiskusi di Kampus" 
                             class="img-fluid rounded-4 shadow-lg w-100" style="object-fit: cover; height: 430px;">
                        <div class="bg-navy text-white p-4 rounded-4 shadow position-absolute bottom-0 end-0 m-3 d-none d-sm-block" style="max-width: 240px;">
                            <div class="d-flex align-items-center gap-3">
                                <span class="display-5 fw-bold text-gold">25+</span>
                                <span class="small lh-sm">Tahun Mengabdi untuk Pendidikan Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="text-uppercase text-gold fw-bold small tracking-wider">Tentang Kampus Kami</span>
                    <h2 class="fw-bold text-navy mt-1 mb-3">Tradisi Akademik Kuat dengan Jiwa Inovasi & Kreativitas</h2>
                    <div class="section-line mb-4"></div>
                    <p class="text-secondary mb-4">
                        <strong>Universitas Gayung Martabak</strong> didirikan dengan filosofi "Menggayung Ilmu Sedalam-dalamnya, Meracik Karya Sebijak-bijaknya". Seperti filosofi nama kami, kami menampung beragam potensi mahasiswa dan mengolahnya menjadi talenta siap kerja yang berkarakter kuat.
                    </p>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-gold fs-5"></i>
                                <div>
                                    <h6 class="fw-bold text-navy mb-1">Kurikulum Berbasis Industri</h6>
                                    <p class="small text-muted mb-0">Kolaborasi magang langsung dengan 150+ perusahaan nasional & multinasional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-gold fs-5"></i>
                                <div>
                                    <h6 class="fw-bold text-navy mb-1">Inkubator Bisnis & Startup</h6>
                                    <p class="small text-muted mb-0">Pendanaan dan mentoring khusus bagi wirausaha muda mahasiswa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-gold fs-5"></i>
                                <div>
                                    <h6 class="fw-bold text-navy mb-1">Beasiswa Prestasi & KIP</h6>
                                    <p class="small text-muted mb-0">Tersedia lebih dari 500 kuota beasiswa penuh dan parsial setiap tahun.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-gold fs-5"></i>
                                <div>
                                    <h6 class="fw-bold text-navy mb-1">Smart Campus Ecosystem</h6>
                                    <p class="small text-muted mb-0">Sistem pembelajaran digital terintegrasi berbasis SIAKAD modern.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SECTION FAKULTAS & PROGRAM STUDI -->
    <section id="fakultas" class="py-5 bg-light">
        <div class="container py-3">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <span class="text-uppercase text-gold fw-bold small">Pilihan Masa Depan</span>
                <h2 class="fw-bold text-navy mt-1">Fakultas & Program Studi Unggulan</h2>
                <div class="section-line mx-auto my-3"></div>
                <p class="text-muted">Temukan minat dan bakat Anda melalui empat fakultas unggulan yang dirancang untuk menjawab tantangan era digital dan ekonomi kreatif.</p>
            </div>

            <div class="row g-4">
                <!-- Fakultas 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card faculty-card bg-white">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=700&q=80" 
                                 onerror="this.src='https://placehold.co/600x400/0f2544/ffffff?text=Teknik+%26+Informatika'"
                                 class="card-img-top w-100" alt="Fakultas Teknik dan Informatika">
                            <span class="badge bg-navy position-absolute top-0 start-0 m-3">S1 & D4</span>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold text-navy">Fakultas Teknik & Informatika</h5>
                            <p class="card-text small text-muted mb-3">Fokus pada rekayasa perangkat lunak, kecerdasan buatan, keamanan siber, dan infrastruktur cerdas.</p>
                            <ul class="list-unstyled small text-secondary mb-4">
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Teknik Informatika</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Sistem Informasi</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Sains Data & AI</li>
                            </ul>
                            <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto fw-semibold" onclick="showProdiDetail('Fakultas Teknik & Informatika')">
                                Lihat Detail Prodi <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fakultas 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card faculty-card bg-white">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=700&q=80" 
                                 onerror="this.src='https://placehold.co/600x400/0f2544/ffffff?text=Ekonomi+%26+Bisnis'"
                                 class="card-img-top w-100" alt="Fakultas Ekonomi dan Bisnis">
                            <span class="badge bg-navy position-absolute top-0 start-0 m-3">S1 & S2</span>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold text-navy">Fakultas Ekonomi & Bisnis</h5>
                            <p class="card-text small text-muted mb-3">Mencetak analis keuangan, manajer korporasi, dan founder startup digital yang adaptif.</p>
                            <ul class="list-unstyled small text-secondary mb-4">
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Manajemen Bisnis</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Akuntansi Digital</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Bisnis Digital</li>
                            </ul>
                            <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto fw-semibold" onclick="showProdiDetail('Fakultas Ekonomi & Bisnis')">
                                Lihat Detail Prodi <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fakultas 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card faculty-card bg-white">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=700&q=80" 
                                 onerror="this.src='https://placehold.co/600x400/0f2544/ffffff?text=Ilmu+Sosial+%26+Humaniora'"
                                 class="card-img-top w-100" alt="Fakultas Ilmu Sosial dan Humaniora">
                            <span class="badge bg-navy position-absolute top-0 start-0 m-3">S1</span>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold text-navy">Fakultas Ilmu Sosial & Humaniora</h5>
                            <p class="card-text small text-muted mb-3">Mengembangkan kepekaan sosial, diplomasi publik, psikologi terapan, dan komunikasi media modern.</p>
                            <ul class="list-unstyled small text-secondary mb-4">
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Ilmu Komunikasi</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Psikologi</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Hubungan Internasional</li>
                            </ul>
                            <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto fw-semibold" onclick="showProdiDetail('Fakultas Ilmu Sosial & Humaniora')">
                                Lihat Detail Prodi <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fakultas 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card faculty-card bg-white">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=700&q=80" 
                                 onerror="this.src='https://placehold.co/600x400/0f2544/ffffff?text=Seni+%26+Kuliner+Nusantara'"
                                 class="card-img-top w-100" alt="Fakultas Seni dan Kuliner Nusantara">
                            <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-3 fw-bold">Ikonik</span>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold text-navy">Fakultas Seni & Kuliner Nusantara</h5>
                            <p class="card-text small text-muted mb-3">Program unggulan khas Kampus Gayung Martabak dalam gastronomi, tata boga modern, dan desain kreatif.</p>
                            <ul class="list-unstyled small text-secondary mb-4">
                                <li><i class="bi bi-dot text-gold fs-5"></i>D4 Seni Kuliner & Gastronomi</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Desain Komunikasi Visual</li>
                                <li><i class="bi bi-dot text-gold fs-5"></i>S1 Manajemen Pariwisata</li>
                            </ul>
                            <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto fw-semibold" onclick="showProdiDetail('Fakultas Seni & Kuliner Nusantara')">
                                Lihat Detail Prodi <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SECTION FASILITAS KAMPUS & GALERI -->
    <section id="fasilitas" class="py-5">
        <div class="container py-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
                <div>
                    <span class="text-uppercase text-gold fw-bold small">Infrastruktur Modern</span>
                    <h2 class="fw-bold text-navy mt-1 mb-0">Fasilitas Kampus & Lingkungan Belajar</h2>
                    <div class="section-line mt-3"></div>
                </div>
                <p class="text-muted mb-0 mt-3 mt-md-0" style="max-width: 450px;">
                    Mendukung kenyamanan riset, kolaborasi kreatif, dan pengembangan minat bakat seluruh civitas akademika.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="facility-card">
                        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=800&q=80" 
                             onerror="this.src='https://placehold.co/800x500/0f2544/ffffff?text=Perpustakaan+Pusat'"
                             alt="Perpustakaan Modern">
                        <div class="facility-overlay">
                            <span class="badge bg-gold-soft text-dark w-auto align-self-start mb-2">Buka 24 Jam</span>
                            <h5 class="fw-bold mb-1">Perpustakaan Digital Pusat</h5>
                            <p class="small text-light opacity-75 mb-0">Koleksi 120.000+ buku fisik, akses jurnal internasional, dan ruang baca kedap suara.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="facility-card">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80" 
                             onerror="this.src='https://placehold.co/800x500/0f2544/ffffff?text=Laboratorium+Riset'"
                             alt="Laboratorium Riset dan Komputer">
                        <div class="facility-overlay">
                            <span class="badge bg-gold-soft text-dark w-auto align-self-start mb-2">Standar Industri</span>
                            <h5 class="fw-bold mb-1">Laboratorium Riset & AI</h5>
                            <p class="small text-light opacity-75 mb-0">Perangkat komputasi spesifikasi tinggi, studio multimedia, serta dapur praktik gastronomi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="facility-card">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" 
                             onerror="this.src='https://placehold.co/800x500/0f2544/ffffff?text=Co-Working+Space'"
                             alt="Co-working Space Mahasiswa">
                        <div class="facility-overlay">
                            <span class="badge bg-gold-soft text-dark w-auto align-self-start mb-2">Free High-Speed WiFi</span>
                            <h5 class="fw-bold mb-1">Creative Hub & Co-Working Space</h5>
                            <p class="small text-light opacity-75 mb-0">Area diskusi kolaboratif terbuka dengan kafe kampus dan ruang presentasi startup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION BERITA & PENGUMUMAN -->
    <section id="berita" class="py-5 bg-light">
        <div class="container py-3">
            <div class="text-center mx-auto mb-5" style="max-width: 650px;">
                <span class="text-uppercase text-gold fw-bold small">Kabar Kampus</span>
                <h2 class="fw-bold text-navy mt-1">Berita & Agenda Akademik Terkini</h2>
                <div class="section-line mx-auto my-3"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=700&q=80" 
                             onerror="this.src='https://placehold.co/700x400/0f2544/ffffff?text=Wisuda+Sarjana'"
                             class="card-img-top" style="height: 200px; object-fit: cover;" alt="Wisuda Kampus">
                        <div class="card-body p-4">
                            <small class="text-gold fw-bold"><i class="bi bi-calendar3 me-1"></i> 10 November 2026</small>
                            <h5 class="fw-bold text-navy mt-2">Wisuda Periode II Tahun 2026: 87% Lulusan Langsung Terserap Industri</h5>
                            <p class="small text-muted mb-0">Rektor Universitas Gayung Martabak melepas 1.240 wisudawan dengan predikat membanggakan di Gedung Graha Martabak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=700&q=80" 
                             onerror="this.src='https://placehold.co/700x400/0f2544/ffffff?text=Hackathon+Nasional'"
                             class="card-img-top" style="height: 200px; object-fit: cover;" alt="Kompetisi Mahasiswa">
                        <div class="card-body p-4">
                            <small class="text-gold fw-bold"><i class="bi bi-calendar3 me-1"></i> 02 November 2026</small>
                            <h5 class="fw-bold text-navy mt-2">Tim Mahasiswa Teknik Informatika Raih Juara 1 Hackathon Nasional</h5>
                            <p class="small text-muted mb-0">Inovasi aplikasi ketahanan pangan berbasis kecerdasan buatan membawa pulang medali emas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=700&q=80" 
                             onerror="this.src='https://placehold.co/700x400/0f2544/ffffff?text=Festival+Kuliner'"
                             class="card-img-top" style="height: 200px; object-fit: cover;" alt="Festival Gastronomi">
                        <div class="card-body p-4">
                            <small class="text-gold fw-bold"><i class="bi bi-calendar3 me-1"></i> 25 Oktober 2026</small>
                            <h5 class="fw-bold text-navy mt-2">Festival Inovasi Kuliner Nusantara & Pameran Kewirausahaan</h5>
                            <p class="small text-muted mb-0">Menampilkan lebih dari 60 stan produk kuliner inovatif karya mahasiswa Fakultas Seni & Kuliner.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION PENDAFTARAN -->
    <section id="kontak" class="py-5 bg-navy text-white">
        <div class="container py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Siap Memulai Perjalanan Akademik Anda?</h2>
                    <p class="text-light opacity-75 mb-0">Konsultasikan pilihan program studi dan jalur beasiswa bersama tim admisi Kampus Gayung Martabak.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <button class="btn btn-gold btn-lg rounded-pill px-4 py-3 me-2" data-bs-toggle="modal" data-bs-target="#daftarModal">
                        <i class="bi bi-file-earmark-text me-2"></i>Formulir PMB Online
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER LENGKAP -->
    <footer class="bg-navy-dark text-light pt-5 pb-4">
        <div class="container">
            <div class="row g-4 pb-4 border-bottom border-secondary border-opacity-25">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="bg-warning text-dark rounded-3 d-flex align-items-center justify-content-center fw-bold" style="width: 38px; height: 38px;">
                            <i class="bi bi-mortarboard-fill fs-5"></i>
                        </div>
                        <span class="fw-bold fs-5 text-white">Kampus Gayung Martabak</span>
                    </div>
                    <p class="small text-light opacity-75 mb-3">
                        Universitas Gayung Martabak berkomitmen menyelenggarakan pendidikan tinggi berkualitas, inklusif, dan relevan dengan perkembangan ilmu pengetahuan serta teknologi.
                    </p>
                    <div class="d-flex gap-2">
                        <a href="#kontak" class="btn btn-outline-light btn-sm rounded-circle" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#kontak" class="btn btn-outline-light btn-sm rounded-circle" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="#kontak" class="btn btn-outline-light btn-sm rounded-circle" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#kontak" class="btn btn-outline-light btn-sm rounded-circle" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="fw-bold text-gold mb-3">Tautan Cepat</h6>
                    <ul class="list-unstyled small d-grid gap-2">
                        <li><a href="#beranda" class="text-light opacity-75 text-decoration-none">Beranda</a></li>
                        <li><a href="#tentang" class="text-light opacity-75 text-decoration-none">Profil & Visi Misi</a></li>
                        <li><a href="#fakultas" class="text-light opacity-75 text-decoration-none">Fakultas & Prodi</a></li>
                        <li><a href="#fasilitas" class="text-light opacity-75 text-decoration-none">Fasilitas Kampus</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="text-light opacity-75 text-decoration-none">Portal SIAKAD</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-3">
                    <h6 class="fw-bold text-gold mb-3">Layanan Akademik</h6>
                    <ul class="list-unstyled small d-grid gap-2">
                        <li><a href="#kontak" class="text-light opacity-75 text-decoration-none">Penerimaan Mahasiswa Baru</a></li>
                        <li><a href="#kontak" class="text-light opacity-75 text-decoration-none">Informasi Beasiswa</a></li>
                        <li><a href="#kontak" class="text-light opacity-75 text-decoration-none">E-Journal & Repositori</a></li>
                        <li><a href="#kontak" class="text-light opacity-75 text-decoration-none">Pusat Karir & Alumni</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h6 class="fw-bold text-gold mb-3">Kontak & Alamat</h6>
                    <ul class="list-unstyled small text-light opacity-75 d-grid gap-2">
                        <li class="d-flex gap-2">
                            <i class="bi bi-geo-alt-fill text-gold"></i>
                            <span>Jl. Pendidikan Cendekia No. 88, Kawasan Kampus Terpadu, Jakarta Barat 11470</span>
                        </li>
                        <li class="d-flex gap-2">
                            <i class="bi bi-telephone-fill text-gold"></i>
                            <span>(021) 555-0199 / +62 812-8800-2026</span>
                        </li>
                        <li class="d-flex gap-2">
                            <i class="bi bi-envelope-fill text-gold"></i>
                            <span>admisi@gayungmartabak.ac.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-4 d-flex flex-column flex-sm-row justify-content-between align-items-center small text-light opacity-50">
                <p class="mb-2 mb-sm-0">&copy; 2026 Universitas Gayung Martabak. Hak Cipta Dilindungi Undang-Undang.</p>
                <p class="mb-0">Dikembangkan oleh UPT Sistem Informasi Kampus</p>
            </div>
        </div>
    </footer>

    <!-- ===================================================================== -->
    <!-- 6. MODAL LOGIN PORTAL AKADEMIK (SIAKAD) INTERAKTIF                    -->
    <!-- ===================================================================== -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
                <div class="modal-header bg-navy text-white border-0 p-4">
                    <div>
                        <h5 class="modal-title fw-bold d-flex align-items-center gap-2" id="loginModalLabel">
                            <i class="bi bi-shield-lock-fill text-gold"></i>
                            Login Portal SIAKAD
                        </h5>
                        <small class="text-light opacity-75">Sistem Informasi Akademik Kampus Gayung Martabak</small>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-4">
                    <!-- Area Notifikasi Login -->
                    <div id="loginAlert" class="alert d-none small py-2" role="alert"></div>

                    <form method="POST" action="proses_login.php" id="loginForm">
    <!-- Pilihan Peran (Ubah name menjadi role) -->
    <div class="mb-3">
        <label class="form-label fw-semibold small text-navy">Masuk Sebagai</label>
        <div class="btn-group w-100" role="group" aria-label="Pilihan Peran Pengguna">
            <input type="radio" class="btn-check" name="role" id="roleMahasiswa" value="mahasiswa" checked onchange="updatePlaceholder()">
            <label class="btn btn-outline-primary fw-medium" for="roleMahasiswa">
                <i class="bi bi-mortarboard me-1"></i>Mahasiswa
            </label>

            <input type="radio" class="btn-check" name="role" id="roleDosen" value="dosen" onchange="updatePlaceholder()">
            <label class="btn btn-outline-primary fw-medium" for="roleDosen">
                <i class="bi bi-person-video3 me-1"></i>Dosen
            </label>

            <input type="radio" class="btn-check" name="role" id="roleStaf" value="admin" onchange="updatePlaceholder()">
            <label class="btn btn-outline-primary fw-medium" for="roleStaf">
                <i class="bi bi-briefcase me-1"></i>Admin/Staf
            </label>
        </div>
    </div>

    <!-- Input Username / NIM / NIDN (Tambahkan name="username") -->
    <div class="mb-3">
        <label for="userIdInput" id="userIdLabel" class="form-label fw-semibold small text-navy">Username / NIM Mahasiswa</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="bi bi-person-badge text-navy"></i></span>
            <input type="text" class="form-control" id="userIdInput" name="username" placeholder="Masukkan username atau NIM" required>
        </div>
    </div>

    <!-- Input Password (name="password") -->
    <div class="mb-3">
        <label for="userPassword" class="form-label fw-semibold small text-navy">Kata Sandi</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="bi bi-key text-navy"></i></span>
            <input type="password" class="form-control" id="userPassword" name="password" placeholder="Masukkan kata sandi" required>
            <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility()" aria-label="Tampilkan sandi">
                <i id="eyeIcon" class="bi bi-eye"></i>
            </button>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
            <label class="form-check-label small text-muted" for="rememberMe">Ingat Saya</label>
        </div>
        <a href="#" class="small text-decoration-none text-navy fw-semibold" onclick="fillDemoCredentials(event)">
            <i class="bi bi-magic me-1"></i>Isi Akun Admin DB
        </a>
    </div>

    <button type="submit" class="btn btn-gold w-100 py-2 rounded-pill fw-bold">
        <i class="bi bi-box-arrow-in-right me-1"></i> Masuk ke Portal
    </button>
</form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DASHBOARD MINI SETELAH BERHASIL LOGIN -->
    <div class="modal fade" id="dashboardModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
                <div class="modal-header bg-navy text-white p-4">
                    <div>
                        <h5 class="modal-title fw-bold"><i class="bi bi-grid-1x2-fill text-gold me-2"></i>Dashboard Mini SIAKAD</h5>
                        <small class="opacity-75">Kampus Gayung Martabak — Semester Ganjil 2026/2027</small>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="p-3 rounded-3 bg-light border mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div>
                            <span class="badge bg-navy mb-1" id="dashRoleBadge">Mahasiswa</span>
                            <h5 class="fw-bold text-navy mb-0" id="dashUserName">Budi Santoso</h5>
                            <small class="text-muted" id="dashUserId">ID: 202601045 | S1 Teknik Informatika</small>
                        </div>
                        <div class="text-end">
                            <span class="badge bg-success-subtle text-success border border-success px-3 py-2">Status Akademik: Aktif</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <div class="p-3 border rounded-3 text-center">
                                <small class="text-muted d-block">Indeks Prestasi (IPK)</small>
                                <span class="fs-3 fw-bold text-navy">3.86</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 border rounded-3 text-center">
                                <small class="text-muted d-block">Total SKS Ditempuh</small>
                                <span class="fs-3 fw-bold text-navy">84 SKS</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 border rounded-3 text-center">
                                <small class="text-muted d-block">Tagihan UKT</small>
                                <span class="fs-4 fw-bold text-success">Lunas</span>
                            </div>
                        </div>
                    </div>

                    <h6 class="fw-bold text-navy mt-4 mb-2">Jadwal Kuliah / Aktivitas Hari Ini</h6>
                    <div class="list-group small">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong class="text-navy">Pemrograman Web Lanjut</strong>
                                <div class="text-muted">Lab Komputer 03 • Dr. Rina Kartika, M.Kom</div>
                            </div>
                            <span class="badge bg-navy rounded-pill">09:00 - 11:30</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong class="text-navy">Kewirausahaan & Inovasi Kuliner</strong>
                                <div class="text-muted">Gedung B Lt. 2 • Chef Hendra Wijaya, M.Par</div>
                            </div>
                            <span class="badge bg-navy rounded-pill">13:00 - 15:00</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-danger btn-sm rounded-pill px-3" onclick="logoutPortal()" data-bs-dismiss="modal">
                        <i class="bi bi-box-arrow-left me-1"></i>Logout Akun
                    </button>
                    <button type="button" class="btn btn-navy btn-sm rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL FORMULIR PENDAFTARAN SINGKAT -->
    <div class="modal fade" id="daftarModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow">
                <div class="modal-header bg-navy text-white">
                    <h5 class="modal-title fw-bold"><i class="bi bi-pencil-square text-gold me-2"></i>Pendaftaran Mahasiswa Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div id="pmbAlert" class="alert alert-success d-none small"></div>
                    <form id="pmbForm">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Nama Lengkap Calon Mahasiswa</label>
                            <input type="text" class="form-control" id="pmbNama" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Nomor WhatsApp Aktif</label>
                            <input type="tel" class="form-control" id="pmbWa" placeholder="0812xxxxxxxx" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Pilihan Fakultas</label>
                            <select class="form-select" id="pmbFakultas">
                                <option>Fakultas Teknik & Informatika</option>
                                <option>Fakultas Ekonomi & Bisnis</option>
                                <option>Fakultas Ilmu Sosial & Humaniora</option>
                                <option>Fakultas Seni & Kuliner Nusantara</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-gold w-100 rounded-pill fw-bold">Kirim Data Pendaftaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript Interaktif untuk Portal Login & UI -->
    <script>
       <script>
    function updatePlaceholder() {
        const role = document.querySelector('input[name="role"]:checked').value;
        const label = document.getElementById('userIdLabel');
        const input = document.getElementById('userIdInput');

        if (role === 'mahasiswa') {
            label.textContent = 'NIM / Username Mahasiswa';
            input.placeholder = 'Contoh: 2231376366';
        } else if (role === 'dosen') {
            label.textContent = 'NIDN / Username Dosen';
            input.placeholder = 'Masukkan username dosen';
        } else {
            label.textContent = 'Username Admin / Staf';
            input.placeholder = 'Contoh: admin';
        }
    }

    function togglePasswordVisibility() {
        const pwdInput = document.getElementById('userPassword');
        const eyeIcon = document.getElementById('eyeIcon');
        if (pwdInput.type === 'password') {
            pwdInput.type = 'text';
            eyeIcon.classList.replace('bi-eye', 'bi-eye-slash');
        } else {
            pwdInput.type = 'password';
            eyeIcon.classList.replace('bi-eye-slash', 'bi-eye');
        }
    }

    function fillDemoCredentials(event) {
        event.preventDefault();
        document.getElementById('roleStaf').checked = true;
        updatePlaceholder();
        document.getElementById('userIdInput').value = 'admin';
        document.getElementById('userPassword').value = '12345';
    }

    document.getElementById('pmbForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const nama = document.getElementById('pmbNama').value;
        const fak = document.getElementById('pmbFakultas').value;
        const pmbAlert = document.getElementById('pmbAlert');
        
        pmbAlert.innerHTML = `<i class="bi bi-check-circle-fill me-1"></i> Terima kasih <strong>${nama}</strong>! Tim admisi untuk <strong>${fak}</strong> akan segera menghubungi Anda via WhatsApp.`;
        pmbAlert.classList.remove('d-none');
        this.reset();
    });

    function showProdiDetail(namaFakultas) {
        const selectFak = document.getElementById('pmbFakultas');
        selectFak.value = namaFakultas;
        document.getElementById('pmbAlert').classList.add('d-none');
        const daftarModal = new bootstrap.Modal(document.getElementById('daftarModal'));
        daftarModal.show();
    }
</script>
    </script>
</body>
</html>