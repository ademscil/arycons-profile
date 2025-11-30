@extends('layouts.main')

@section('content')
    <!-- TODO: Ganti teks beranda dengan profil singkat asli CV. Arycon's -->
    <div class="p-5 mb-5 rounded-4 shadow-sm hero-card">
        <div class="row align-items-center gy-4">
            <div class="col-lg-7 position-relative">
                <span class="badge bg-primary-subtle text-primary mb-3">Konsultan Konstruksi</span>
                <h1 class="display-5 fw-bold mb-3">CV. Arycon's</h1>
                <p class="fs-5 text-muted mb-4">Konsultan konstruksi dan manajemen proyek berbasis di Pangkalpinang sejak 2004.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-primary btn-lg px-4" href="{{ route('tentang') }}">Lihat Profil</a>
                    <a class="btn btn-outline-primary btn-lg px-4" href="{{ route('kontak') }}">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="card border-0 shadow-sm card-hover h-100">
                            <div class="card-body">
                                <div class="text-primary fs-3 mb-2"><i class="bi bi-building-gear"></i></div>
                                <p class="mb-1 fw-semibold">Konstruksi &amp; Engineering</p>
                                <p class="text-muted small mb-0">Aktivitas arsitektur, keinsinyuran, dan konsultasi teknis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0 shadow-sm card-hover h-100">
                            <div class="card-body">
                                <div class="text-success fs-3 mb-2"><i class="bi bi-diagram-3"></i></div>
                                <p class="mb-1 fw-semibold">Pengawasan Proyek</p>
                                <p class="text-muted small mb-0">Kontrol mutu &amp; jadwal yang disiplin di lapangan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0 shadow-sm card-hover h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="text-warning fs-3 me-3"><i class="bi bi-clipboard2-check"></i></div>
                                <div>
                                    <p class="mb-1 fw-semibold">Manajemen Proyek</p>
                                    <p class="text-muted small mb-0">Koordinasi menyeluruh dari perencanaan hingga serah terima.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body">
                    <p class="section-title mb-2">Keunggulan</p>
                    <h5 class="card-title">Pendekatan Berbasis Data</h5>
                    <p class="card-text text-muted">Analisis teknis dan laporan progres yang transparan untuk setiap tahapan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body">
                    <p class="section-title mb-2">Kolaborasi</p>
                    <h5 class="card-title">Tim Multidisiplin</h5>
                    <p class="card-text text-muted">Arsitek, insinyur, dan manajer proyek yang terkoordinasi dengan baik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body">
                    <p class="section-title mb-2">Kualitas</p>
                    <h5 class="card-title">Standar Keselamatan</h5>
                    <p class="card-text text-muted">Praktik terbaik K3L diterapkan pada setiap pekerjaan lapangan.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
