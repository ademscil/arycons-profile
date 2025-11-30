<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV. Arycon's</title>
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" type="image/png" sizes="256x256" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="256x256" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #f4f6fb 0%, #eef2ff 50%, #f7f9ff 100%);
            min-height: 100vh;
        }
        .navbar {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(8px);
        }
        .nav-link.active {
            color: #0d6efd !important;
        }
        .nav-link {
            transition: color 0.2s ease, transform 0.2s ease;
        }
        .nav-link:hover {
            transform: translateY(-1px);
        }
        .hero-card {
            position: relative;
            overflow: hidden;
            background: radial-gradient(circle at 10% 20%, rgba(13,110,253,0.12), transparent 35%), radial-gradient(circle at 90% 10%, rgba(32,201,151,0.12), transparent 30%), #ffffff;
            border: 1px solid rgba(13, 110, 253, 0.08);
        }
        .hero-card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(13,110,253,0.08), transparent 40%);
            pointer-events: none;
        }
        .section-title {
            letter-spacing: 0.04em;
            text-transform: uppercase;
            font-weight: 600;
            color: #0d6efd;
            font-size: 0.9rem;
        }
        .card {
            border: 1px solid rgba(0, 0, 0, 0.04);
        }
        .card-hover {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        .avatar-lg {
            width: 82px;
            height: 82px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid #ddd;
        }
        footer {
            background: #ffffff;
        }
    </style>
</head>
@php
    $currentRoute = Route::currentRouteName();
@endphp
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('beranda') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo CV. Arycon's" class="me-2" style="height: 32px;">
                <span class="fw-semibold">CV. Arycon's</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute === 'beranda' ? 'active fw-semibold' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute === 'tentang' ? 'active fw-semibold' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute === 'izin.usaha' ? 'active fw-semibold' : '' }}" href="{{ route('izin.usaha') }}">Izin Usaha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute === 'pengalaman' ? 'active fw-semibold' : '' }}" href="{{ route('pengalaman') }}">Pengalaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute === 'struktur.organisasi' ? 'active fw-semibold' : '' }}" href="{{ route('struktur.organisasi') }}">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute === 'proyek' ? 'active fw-semibold' : '' }}" href="{{ route('proyek') }}">Riwayat Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute === 'kontak' ? 'active fw-semibold' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="bg-white border-top py-3">
        <div class="container text-center">
            © {{ date('Y') }} CV. Arycon's. Seluruh hak cipta dilindungi.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
