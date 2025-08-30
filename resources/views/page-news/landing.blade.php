<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeritaKini - Portal Berita Terkini Indonesia</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #BBDCE5;
            --secondary-color: #10B981;
            --accent-color: #0EA5E9;
            --dark-gray: #475569;
            --light-gray: #F1F5F9;
            --white: #FFFFFF;
            --border-color: #E2E8F0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            background-color: var(--white);
        }

        /* Custom Navbar Styles */
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary-color) 0%, rgba(187, 220, 229, 0.9) 100%);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar-custom.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--dark-gray) !important;
            text-decoration: none;
        }

        .navbar-nav .nav-link {
            color: var(--dark-gray) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: var(--secondary-color);
            color: var(--white) !important;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
        }

        .btn-custom {
            background: var(--secondary-color);
            color: var(--white);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-custom:hover {
            background: #0D9488;
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
        }

        /* News Cards */
        .news-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
            height: 100%;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-card:hover img {
            transform: scale(1.05);
        }

        .news-card-body {
            padding: 1.5rem;
        }

        .news-category {
            background: var(--primary-color);
            color: var(--dark-gray);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .news-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-gray);
            margin-bottom: 0.8rem;
            line-height: 1.4;
        }

        .news-excerpt {
            color: #64748B;
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        .news-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.85rem;
            color: #94A3B8;
        }

        /* Featured News */
        .featured-news {
            background: linear-gradient(135deg, var(--light-gray) 0%, var(--white) 100%);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .featured-news img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .featured-content {
            padding: 2rem;
        }

        .featured-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark-gray);
            margin-bottom: 1rem;
        }

        /* Trending Section */
        .trending-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            background: var(--white);
            border-radius: 10px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 4px solid var(--secondary-color);
        }

        .trending-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .trending-number {
            background: var(--secondary-color);
            color: var(--white);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 1rem;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--dark-gray) 0%, #334155 100%);
            color: var(--white);
            padding: 3rem 0 1rem;
        }

        .footer h5 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .footer a {
            color: #CBD5E1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-color);
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: var(--dark-gray);
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: var(--secondary-color);
            color: var(--white);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .featured-title {
                font-size: 1.5rem;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: var(--white);
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2"></i>BeritaKini</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nasional">Nasional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#internasional">Internasional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ekonomi">Ekonomi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#teknologi">Teknologi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#olahraga">Olahraga</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content fade-in-up">
                        <h1 class="hero-title">Berita Terkini & Terpercaya</h1>
                        <p class="hero-subtitle">Dapatkan informasi terbaru dari seluruh Indonesia dan dunia. Berita
                            akurat, cepat, dan terpercaya untuk Anda.</p>
                        <a href="#berita" class="btn-custom">
                            <i class="bi bi-arrow-down-circle me-2"></i>Baca Berita
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="/placeholder.svg?height=400&width=500" alt="News Illustration"
                            class="img-fluid rounded-3 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured News -->
    <section id="berita" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold mb-3">Berita Utama</h2>
                    <p class="lead text-muted">Berita terpenting hari ini</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="featured-news">
                        <img src="/placeholder.svg?height=300&width=800" alt="Berita Utama">
                        <div class="featured-content">
                            <span class="news-category">Politik</span>
                            <h3 class="featured-title">Pemerintah Luncurkan Program Digitalisasi UMKM Nasional</h3>
                            <p class="news-excerpt">Program ambisius pemerintah untuk mendorong transformasi digital
                                UMKM di seluruh Indonesia telah resmi diluncurkan. Program ini diharapkan dapat
                                meningkatkan daya saing ekonomi nasional di era digital.</p>
                            <div class="news-meta">
                                <span><i class="bi bi-person me-1"></i>Admin BeritaKini</span>
                                <span><i class="bi bi-clock me-1"></i>2 jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4 class="fw-bold mb-3">Trending Hari Ini</h4>

                    <div class="trending-item">
                        <div class="trending-number">1</div>
                        <div>
                            <h6 class="mb-1">Ekonomi Indonesia Tumbuh 5.2%</h6>
                            <small class="text-muted">1 jam yang lalu</small>
                        </div>
                    </div>

                    <div class="trending-item">
                        <div class="trending-number">2</div>
                        <div>
                            <h6 class="mb-1">Teknologi AI Terbaru dari Startup Lokal</h6>
                            <small class="text-muted">3 jam yang lalu</small>
                        </div>
                    </div>

                    <div class="trending-item">
                        <div class="trending-number">3</div>
                        <div>
                            <h6 class="mb-1">Timnas Indonesia Menang Telak</h6>
                            <small class="text-muted">5 jam yang lalu</small>
                        </div>
                    </div>

                    <div class="trending-item">
                        <div class="trending-number">4</div>
                        <div>
                            <h6 class="mb-1">Cuaca Ekstrem di Beberapa Daerah</h6>
                            <small class="text-muted">6 jam yang lalu</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold mb-3">Berita Terbaru</h2>
                    <p class="lead text-muted">Update berita terkini dari berbagai kategori</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">
                        <img src="/placeholder.svg?height=200&width=400" alt="Teknologi">
                        <div class="news-card-body">
                            <span class="news-category">Teknologi</span>
                            <h5 class="news-title">Startup Indonesia Raih Pendanaan $50 Juta</h5>
                            <p class="news-excerpt">Perusahaan teknologi finansial asal Indonesia berhasil meraih
                                pendanaan seri B senilai $50 juta dari investor internasional.</p>
                            <div class="news-meta">
                                <span><i class="bi bi-eye me-1"></i>1.2k</span>
                                <span><i class="bi bi-clock me-1"></i>4 jam lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">
                        <img src="/placeholder.svg?height=200&width=400" alt="Olahraga">
                        <div class="news-card-body">
                            <span class="news-category">Olahraga</span>
                            <h5 class="news-title">Timnas U-23 Lolos ke Final SEA Games</h5>
                            <p class="news-excerpt">Prestasi membanggakan timnas U-23 Indonesia yang berhasil
                                mengalahkan Thailand dengan skor 2-1 di semifinal.</p>
                            <div class="news-meta">
                                <span><i class="bi bi-eye me-1"></i>2.5k</span>
                                <span><i class="bi bi-clock me-1"></i>6 jam lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">
                        <img src="/placeholder.svg?height=200&width=400" alt="Ekonomi">
                        <div class="news-card-body">
                            <span class="news-category">Ekonomi</span>
                            <h5 class="news-title">IHSG Menguat di Atas Level 7.000</h5>
                            <p class="news-excerpt">Indeks Harga Saham Gabungan (IHSG) ditutup menguat 1.2% ke level
                                7.085 didorong sentimen positif dari sektor perbankan.</p>
                            <div class="news-meta">
                                <span><i class="bi bi-eye me-1"></i>890</span>
                                <span><i class="bi bi-clock me-1"></i>8 jam lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">
                        <img src="/placeholder.svg?height=200&width=400" alt="Budaya">
                        <div class="news-card-body">
                            <span class="news-category">Budaya</span>
                            <h5 class="news-title">Festival Budaya Nusantara Digelar di Jakarta</h5>
                            <p class="news-excerpt">Pameran budaya terbesar tahun ini menampilkan keragaman seni dan
                                tradisi dari 34 provinsi di Indonesia.</p>
                            <div class="news-meta">
                                <span><i class="bi bi-eye me-1"></i>1.8k</span>
                                <span><i class="bi bi-clock me-1"></i>10 jam lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">
                        <img src="/placeholder.svg?height=200&width=400" alt="Lingkungan">
                        <div class="news-card-body">
                            <span class="news-category">Lingkungan</span>
                            <h5 class="news-title">Program Energi Terbarukan Capai Target 23%</h5>
                            <p class="news-excerpt">Indonesia berhasil mencapai target bauran energi terbarukan 23%
                                lebih cepat dari jadwal yang telah ditetapkan.</p>
                            <div class="news-meta">
                                <span><i class="bi bi-eye me-1"></i>1.1k</span>
                                <span><i class="bi bi-clock me-1"></i>12 jam lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">
                        <img src="/placeholder.svg?height=200&width=400" alt="Pendidikan">
                        <div class="news-card-body">
                            <span class="news-category">Pendidikan</span>
                            <h5 class="news-title">Digitalisasi Sekolah Mencapai 75% Nasional</h5>
                            <p class="news-excerpt">Program digitalisasi pendidikan pemerintah telah mencapai 75%
                                sekolah di seluruh Indonesia dengan fasilitas internet dan perangkat digital.</p>
                            <div class="news-meta">
                                <span><i class="bi bi-eye me-1"></i>950</span>
                                <span><i class="bi bi-clock me-1"></i>14 jam lalu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <button class="btn-custom" id="loadMoreBtn">
                    <span class="btn-text">Muat Berita Lainnya</span>
                    <span class="loading d-none"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><i class="bi bi-newspaper me-2"></i>BeritaKini</h5>
                    <p>Portal berita terpercaya yang menyajikan informasi terkini dari Indonesia dan dunia dengan akurat
                        dan objektif.</p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Kategori</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Nasional</a></li>
                        <li><a href="#">Internasional</a></li>
                        <li><a href="#">Ekonomi</a></li>
                        <li><a href="#">Teknologi</a></li>
                        <li><a href="#">Olahraga</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">RSS Feed</a></li>
                        <li><a href="#">Mobile App</a></li>
                        <li><a href="#">Arsip Berita</a></li>
                        <li><a href="#">Live TV</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Perusahaan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Advertorial</a></li>
                        <li><a href="#">Kemitraan</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Kode Etik</a></li>
                        <li><a href="#">DMCA</a></li>
                    </ul>
                </div>
            </div>

            <hr class="my-4" style="border-color: #64748B;">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 BeritaKini. Seluruh hak cipta dilindungi.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> untuk Indonesia</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Load more news functionality
        document.getElementById('loadMoreBtn').addEventListener('click', function() {
            const btn = this;
            const btnText = btn.querySelector('.btn-text');
            const loading = btn.querySelector('.loading');

            // Show loading state
            btnText.classList.add('d-none');
            loading.classList.remove('d-none');
            btn.disabled = true;

            // Simulate loading delay
            setTimeout(() => {
                // Hide loading state
                btnText.classList.remove('d-none');
                loading.classList.add('d-none');
                btn.disabled = false;

                // Show success message
                btn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Berita Dimuat!';
                btn.style.background = 'var(--secondary-color)';

                // Reset button after 2 seconds
                setTimeout(() => {
                    btn.innerHTML =
                        '<span class="btn-text">Muat Berita Lainnya</span><span class="loading d-none"></span>';
                    btn.style.background = 'var(--secondary-color)';
                }, 2000);
            }, 1500);
        });

        // Newsletter form submission
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;

            if (email) {
                // Show success message
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;

                submitBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Berhasil!';
                submitBtn.style.background = '#059669';

                // Reset form and button
                setTimeout(() => {
                    this.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = 'var(--secondary-color)';
                }, 3000);
            }
        });

        // Add fade-in animation to news cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        // Observe all news cards
        document.querySelectorAll('.news-card').forEach(card => {
            observer.observe(card);
        });

        // Add click tracking for news cards
        document.querySelectorAll('.news-card').forEach(card => {
            card.addEventListener('click', function() {
                // Add click effect
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);

                // In a real application, you would navigate to the full article
                console.log('Navigating to article:', this.querySelector('.news-title').textContent);
            });
        });

        // Add hover effect to trending items
        document.querySelectorAll('.trending-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'var(--light-gray)';
            });

            item.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'var(--white)';
            });
        });

        // Initialize tooltips if needed
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Add search functionality (placeholder)
        function initSearch() {
            // This would be connected to a real search API
            console.log('Search functionality would be implemented here');
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            console.log('BeritaKini website loaded successfully!');

            // Add any initialization code here
            initSearch();
        });
    </script>
</body>

</html>
