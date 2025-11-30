@extends('layouts.main')

@section('content')
    <div class="mb-4">
        <p class="section-title mb-2">Profil</p>
        <h1 class="mb-3">Tentang CV. Arycon's</h1>
        <p class="text-muted">CV. Arycon's adalah konsultan konstruksi yang berdomisili di Pangkalpinang, Kepulauan Bangka Belitung. Perusahaan berdiri melalui akta 13-04-2004 (No. 14) dan diperbaharui pada 27-08-2019 (Akta No. 54) untuk memperluas bidang usaha.</p>
        <!-- TODO: Konfirmasi detail akta (nomor/tanggal/notaris) sesuai dokumen resmi -->
    </div>
    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body">
                    <h5 class="card-title">Sejarah Singkat</h5>
                    <p class="text-muted mb-0">Berawal sebagai perseroan komanditer yang fokus pada konstruksi, CV. Arycon's memperbaharui anggaran dasar pada 2019 untuk menguatkan layanan arsitektur, keinsinyuran, dan konsultasi teknis.</p>
                    <!-- TODO: Lengkapi kronologi dan milestone proyek penting CV. Arycon's -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body">
                    <h5 class="card-title">Bidang Usaha Terdaftar</h5>
                    <ul class="mb-0 text-muted">
                        <li>Konstruksi.</li>
                        <li>Aktivitas arsitektur &amp; keinsinyuran serta konsultasi teknis terkait.</li>
                        <li>Real estat.</li>
                        <li>Perdagangan eceran khusus alat tulis &amp; hasil pencetakan/penerbitan.</li>
                        <li>Perdagangan eceran khusus komputer, perangkat lunak, dan telekomunikasi.</li>
                    </ul>
                    <!-- TODO: Tambahkan kode KBLI/NIB resmi untuk tiap bidang -->
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm card-hover">
        <div class="card-body">
            <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                <div>
                    <h5 class="card-title mb-2">Visi &amp; Misi</h5>
                    <p class="text-muted mb-0">Menjadi mitra terpercaya dalam solusi konstruksi yang inovatif, aman, dan tepat waktu di Bangka Belitung dan sekitarnya.</p>
                </div>
                <div>
                    <ul class="mb-0">
                        <li>Misi: Memberikan layanan konsultansi yang efisien dari perencanaan sampai serah terima.</li>
                        <li>Misi: Mengutamakan mutu, keselamatan kerja, dan kepatuhan regulasi.</li>
                        <li>Misi: Mengembangkan kolaborasi dengan klien dan pemangku kepentingan lokal.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
