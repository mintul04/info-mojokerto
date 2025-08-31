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
</style>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ Route('landing') }}"><i class="bi bi-newspaper me-2"></i>Info Mojokerto</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('semua-berita') }}">Semua</a>
                </li>
                @foreach ($navKategori->take(5) as $item)
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('per-kategori', $item->id) }}">{{ $item->nama }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
