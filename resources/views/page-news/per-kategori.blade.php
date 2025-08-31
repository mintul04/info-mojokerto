<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Mojokerto - {{ $kategori->nama }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('bootstrap/bootstrap.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('assets/extensions/bootstrap-icons/font/bootstrap-icons.min.css') }}">
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
            background-color: var(--light-gray);
        }

        /* Category Header Styles */
        .category-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            padding: 4rem 0 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .category-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .category-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--white);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .category-subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            position: relative;
            z-index: 2;
        }

        .breadcrumb-custom {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 2;
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-custom .breadcrumb-item a:hover {
            color: var(--white);
        }

        .breadcrumb-custom .breadcrumb-item.active {
            color: var(--white);
            font-weight: 500;
        }

        /* News Card Styles */
        .news-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid var(--border-color);
            opacity: 0;
            transform: translateY(30px);
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .news-card.fade-in-up {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-card:hover .news-image {
            transform: scale(1.05);
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-category-badge {
            background: var(--secondary-color);
            color: var(--white);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .news-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark-gray);
            margin-bottom: 0.75rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-excerpt {
            color: #64748b;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.85rem;
            color: #94a3b8;
        }

        .news-date {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .news-views {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Sidebar Styles */
        .sidebar-card {
            background: var(--white);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border-color);
            margin-bottom: 2rem;
        }

        .sidebar-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark-gray);
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--primary-color);
        }

        .trending-item {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }

        .trending-item:hover {
            background: var(--light-gray);
            border-color: var(--border-color);
        }

        .trending-image {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .trending-content {
            flex: 1;
        }

        .trending-title {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--dark-gray);
            line-height: 1.3;
            margin-bottom: 0.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .trending-date {
            font-size: 0.8rem;
            color: #94a3b8;
        }

        /* Filter Styles */
        .filter-btn {
            background: var(--white);
            border: 2px solid var(--border-color);
            color: var(--dark-gray);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--accent-color);
            border-color: var(--accent-color);
            color: var(--white);
        }

        /* Pagination Styles */
        .pagination-custom .page-link {
            border: none;
            color: var(--dark-gray);
            padding: 0.75rem 1rem;
            margin: 0 0.25rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .pagination-custom .page-link:hover {
            background: var(--primary-color);
            color: var(--dark-gray);
        }

        .pagination-custom .page-item.active .page-link {
            background: var(--accent-color);
            color: var(--white);
        }

        /* Loading Animation */
        .loading-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .category-title {
                font-size: 2rem;
            }

            .news-card {
                margin-bottom: 1.5rem;
            }

            .trending-item {
                padding: 0.75rem;
            }
        }
    </style>
</head>

<body>
    @include('templates.partials.navbar')

    <!-- Category Header -->
    <section class="category-header mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb breadcrumb-custom mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('landing') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('semua-berita') }}">Berita</a></li>
                            <li class="breadcrumb-item active">{{ $kategori->nama }}</li>
                        </ol>
                    </nav>
                    <h1 class="category-title">{{ $kategori->nama }}</h1>
                    <p class="category-subtitle">Temukan berita terkini seputar {{ strtolower($kategori->nama) }} di Mojokerto</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Main News Content -->
            <div class="col-lg-8">
                {{-- <!-- Filter Buttons -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <button class="filter-btn active" data-filter="all">Semua</button>
                    <button class="filter-btn" data-filter="terbaru">Terbaru</button>
                    <button class="filter-btn" data-filter="populer">Populer</button>
                    <button class="filter-btn" data-filter="trending">Trending</button>
                </div> --}}

                <!-- News Grid -->
                <div class="row" id="news-container">
                    @forelse($berita as $item)
                        <div class="col-md-6 mb-4">
                            <article class="news-card" data-category="{{ $item->kategori->id }}" onclick="window.location.href='{{ route('detail-berita', $item->id) }}'">
                                <img src="{{ $item->gambar ? asset('uploads/news/' . $item->gambar) : '/placeholder.svg?height=200&width=400' }}" alt="{{ $item->judul }}" class="news-image">
                                <div class="news-content">
                                    <span class="news-category-badge">{{ $item->kategori->nama }}</span>
                                    <h3 class="news-title">{{ $item->judul }}</h3>
                                    <p class="news-excerpt">{{ Str::limit(strip_tags($item->konten), 120) }}</p>
                                    <div class="news-meta">
                                        <div class="news-date">
                                            <i class="bi bi-calendar3"></i>
                                            <span>{{ \Carbon\Carbon::parse($item->waktu)->locale('id')->translatedFormat('d F Y') }}</span>
                                        </div>
                                        <div class="news-views">
                                            <i class="bi bi-eye"></i>
                                            <span>{{ $item->views ?? rand(100, 1000) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="bi bi-newspaper" style="font-size: 4rem; color: var(--border-color);"></i>
                                <h4 class="mt-3 text-muted">Belum ada berita</h4>
                                <p class="text-muted">Berita untuk kategori ini belum tersedia.</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if ($berita->hasPages())
                    <nav aria-label="News pagination" class="mt-5">
                        <ul class="pagination pagination-custom justify-content-center">
                            {{ $berita->links() }}
                        </ul>
                    </nav>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Trending News -->
                <div class="sidebar-card">
                    <h4 class="sidebar-title">
                        <i class="bi bi-fire text-danger me-2"></i>
                        Berita Trending
                    </h4>
                    <div class="trending-list">
                        @foreach ($berita->take(5) as $item)
                            <div class="trending-item">
                                <img src="{{ asset('uploads/news/' . $item->gambar) }}" alt="Trending News {{ $item->gambar }}" class="trending-image">
                                <div class="trending-content">
                                    <h6 class="trending-title">Berita Trending {{ $loop->iteration }} - {{ Str::limit($item->judul, 50) }}</h6>
                                    <div class="trending-date">{{ \Carbon\Carbon::parse($item->waktu)->locale('id')->translatedFormat('d F Y') }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Categories -->
                <div class="sidebar-card">
                    <h4 class="sidebar-title">
                        <i class="bi bi-grid-3x3-gap me-2"></i>
                        Kategori Lainnya
                    </h4>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach ($navKategori->take(5) as $item)
                            <a href="{{ Route('per-kategori', $item->id) }}" class="filter-btn text-decoration-none">{{ $item->nama }}</a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('templates.partials.footer')

    <!-- Bootstrap 5 JS -->
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (navbar && window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else if (navbar) {
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

        // Filter functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');
                filterNews(filter);
            });
        });

        function filterNews(filter) {
            const newsCards = document.querySelectorAll('.news-card');

            newsCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    if (filter === 'all') {
                        card.style.display = 'block';
                    } else {
                        // In a real application, you would filter based on actual data
                        // For demo purposes, we'll show/hide randomly
                        const shouldShow = Math.random() > 0.3;
                        card.style.display = shouldShow ? 'block' : 'none';
                    }

                    setTimeout(() => {
                        if (card.style.display !== 'none') {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }
                    }, 100);
                }, 200);
            });
        }

        // Add click tracking for news cards
        document.querySelectorAll('.news-card').forEach(card => {
            card.addEventListener('click', function(e) {
                // Add click effect
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Add hover effect to trending items
        document.querySelectorAll('.trending-item').forEach(item => {
            item.addEventListener('click', function() {
                // In a real application, navigate to the article
                console.log('Navigating to trending article:', this.querySelector('.trending-title').textContent);
            });
        });

        // Newsletter form submission
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;

            // Show success message
            const button = this.querySelector('button');
            const originalHTML = button.innerHTML;
            button.innerHTML = '<i class="bi bi-check-circle"></i>';
            button.disabled = true;

            setTimeout(() => {
                button.innerHTML = originalHTML;
                button.disabled = false;
                this.reset();
            }, 2000);

            console.log('Newsletter subscription for:', email);
        });

        // Initialize tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Loading animation for dynamic content
        function showLoadingSkeleton() {
            const container = document.getElementById('news-container');
            container.innerHTML = '';

            for (let i = 0; i < 6; i++) {
                const skeletonCard = document.createElement('div');
                skeletonCard.className = 'col-md-6 mb-4';
                skeletonCard.innerHTML = `
                    <div class="news-card">
                        <div class="loading-skeleton" style="height: 200px;"></div>
                        <div class="news-content">
                            <div class="loading-skeleton" style="height: 20px; width: 80px; margin-bottom: 1rem; border-radius: 10px;"></div>
                            <div class="loading-skeleton" style="height: 24px; margin-bottom: 0.75rem; border-radius: 4px;"></div>
                            <div class="loading-skeleton" style="height: 16px; margin-bottom: 0.5rem; border-radius: 4px;"></div>
                            <div class="loading-skeleton" style="height: 16px; width: 70%; margin-bottom: 1rem; border-radius: 4px;"></div>
                            <div style="display: flex; justify-content: space-between;">
                                <div class="loading-skeleton" style="height: 14px; width: 100px; border-radius: 4px;"></div>
                                <div class="loading-skeleton" style="height: 14px; width: 60px; border-radius: 4px;"></div>
                            </div>
                        </div>
                    </div>
                `;
                container.appendChild(skeletonCard);
            }
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            console.log('News category page loaded successfully!');

            // Trigger initial animation for visible cards
            setTimeout(() => {
                document.querySelectorAll('.news-card').forEach(card => {
                    card.classList.add('fade-in-up');
                });
            }, 100);
        });

        // Add search functionality (if needed)
        function searchNews(query) {
            // This would be connected to a real search API
            console.log('Searching for:', query);
            showLoadingSkeleton();

            // Simulate API call
            setTimeout(() => {
                // Reload actual content
                location.reload();
            }, 1500);
        }
    </script>
</body>

</html>
