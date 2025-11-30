@extends('layouts.main')

@section('content')
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
        <div>
            <p class="section-title mb-2">Tim Inti</p>
            <h1 class="mb-2">Struktur Organisasi</h1>
            <p class="text-muted mb-0">Struktur organisasi sederhana CV. Arycon's.</p>
        </div>
        <div class="badge bg-primary text-white fs-6 py-2 px-3">Kolaboratif &amp; Adaptif</div>
    </div>
    <p class="text-muted">Berdasarkan akta perubahan 27-08-2019, perseroan diurus oleh satu pesero pengurus.</p>
    <div class="row g-3">
        <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="card-body">
                    <div class="mb-3">
                        <img src="{{ asset('images/profile/heriady_profile.jpeg') }}" alt="Foto Direktur Utama" class="rounded-circle border" style="width: 88px; height: 88px; object-fit: cover; object-position: center 35%;">
                    </div>
                    <div class="text-primary fs-3 mb-2"><i class="bi bi-person-badge"></i></div>
                    <h5 class="card-title text-uppercase text-muted small mb-1">Direktur Utama</h5>
                    <p class="card-text fw-semibold mb-0">Heriady, ST</p>
                    <p class="text-muted small mb-0">Pengurus / Direktur</p>
                    <button class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalDirektur">Lihat detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="card-body">
                    <div class="mb-3 d-flex justify-content-center">
                        <div style="width:88px;height:88px;border-radius:50%;overflow:hidden;border:1px solid #ddd;">
                            <img src="{{ asset('images/profile/raidin_profile.jpeg') }}" alt="Foto Pesero Komanditer" style="width:100%;height:100%;object-fit:cover;object-position:center 45%;">
                        </div>
                    </div>
                    <div class="text-success fs-3 mb-2"><i class="bi bi-people"></i></div>
                    <h5 class="card-title text-uppercase text-muted small mb-1">Pesero Komanditer</h5>
                    <p class="card-text fw-semibold mb-0">Raidin Warmansyah</p>
                    <p class="text-muted small mb-0">Pendamping kebijakan</p>
                    <button class="btn btn-outline-success btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalPesero">Lihat detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="card-body">
                    <div class="mb-3 d-flex justify-content-center">
                        <div style="width:88px;height:88px;border-radius:50%;overflow:hidden;border:1px solid #ddd;">
                            <img src="{{ asset('images/profile-placeholder.svg') }}" alt="Foto Staf Teknik" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                        </div>
                    </div>
                    <div class="text-warning fs-3 mb-2"><i class="bi bi-gear"></i></div>
                    <h5 class="card-title text-uppercase text-muted small mb-1">Staf Teknik</h5>
                    <p class="text-muted small mb-0">Klik untuk melihat daftar anggota.</p>
                    <button class="btn btn-outline-warning btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalStafTeknik">Lihat detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="card-body">
                    <div class="mb-3 d-flex justify-content-center">
                        <div style="width:88px;height:88px;border-radius:50%;overflow:hidden;border:1px solid #ddd;">
                            <img src="{{ asset('images/profile/eko_profile.jpeg') }}" alt="Foto Manajer/Administrasi" style="width:100%;height:100%;object-fit:cover;object-position:center 45%;">
                        </div>
                    </div>
                    <div class="text-info fs-3 mb-2"><i class="bi bi-clipboard-check"></i></div>
                    <h5 class="card-title text-uppercase text-muted small mb-1">Manajer/Administrasi</h5>
                    <p class="card-text fw-semibold mb-0">Eko Widigdo, SE</p>
                    <p class="text-muted small mb-0">Administrasi Tender</p>
                    <button class="btn btn-outline-info btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalManajer">Lihat detail</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="modalDirektur" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Direktur Utama</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-semibold mb-1">Heriady, ST</p>
                    <p class="text-muted mb-3">Pengurus / Direktur</p>
                    <p class="mb-0 small text-muted">Memimpin CV. Arycon's dan mengawasi operasional konstruksi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPesero" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pesero Komanditer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-semibold mb-1">Raidin Warmansyah</p>
                    <p class="text-muted mb-3">Pendamping kebijakan</p>
                    <p class="mb-0 small text-muted">Fokus pada arah kebijakan dan dukungan strategis perusahaan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalStafTeknik" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Staf Teknik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted small mb-2">Anggota tim:</p>
                    <ul class="mb-2">
                        <li>Heriady, ST</li>
                        <li>Raidin Warmansyah</li>
                    </ul>
                    <p class="text-muted small mb-0">Tambah anggota lain sesuai kebutuhan proyek.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalManajer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Manajer/Administrasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-semibold mb-1">Eko Widigdo, SE</p>
                    <p class="text-muted mb-3">Administrasi Tender</p>
                    <p class="mb-0 small text-muted">Menangani administrasi tender dan koordinasi dokumen perusahaan.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
