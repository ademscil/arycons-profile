@extends('layouts.main')

@section('content')
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
        <div>
            <p class="section-title mb-2">Hubungi Kami</p>
            <h1 class="mb-2">Kontak</h1>
            <p class="text-muted mb-0">Silakan gunakan informasi berikut atau kirim pesan melalui formulir.</p>
        </div>
        <span class="badge bg-info-subtle text-info fs-6 py-2 px-3">Respons cepat di hari kerja</span>
    </div>
    <div class="row g-4 mb-4">
        <div class="col-md-5">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body">
                    <h5 class="card-title">Informasi Kontak</h5>
                    <p class="mb-2"><strong>Alamat:</strong> Jl. Menara Dalam No. 88 RT/RW 03/03, Pangkalpinang</p>
                    <p class="mb-2"><strong>Telepon:</strong> (0717) 421481 / 437425</p>
                    <p class="mb-2"><strong>Email:</strong> arycons2012@gmail.com</p>
                    <p class="mb-0"><strong>Email alternatif:</strong> heriadi_bangka@yahoo.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body">
                    <h5 class="card-title">Form Kontak</h5>
                    <form id="contactForm" onsubmit="event.preventDefault(); alert('Form ini hanya contoh. Silakan hubungi kontak resmi perusahaan.');">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com">
                            </div>
                            <div class="col-12">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tuliskan pesan Anda"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary px-4">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
