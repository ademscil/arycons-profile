@extends('layouts.main')

@section('content')
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-3">
        <div>
            <p class="section-title mb-2">Portofolio</p>
            <h1 class="mb-2">Riwayat Proyek</h1>
            <p class="text-muted mb-0">Urut berdasarkan nilai kontrak terbesar. Tambahkan seluruh data proyek dari dokumen kualifikasi, pagination siap menampung.</p>
        </div>
        <div class="badge bg-success-subtle text-success fs-6 py-2 px-3">Proyek Terselesaikan</div>
    </div>
    <div class="card border-0 shadow-sm card-hover">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Proyek</th>
                            <th>Lokasi</th>
                            <th>Tahun</th>
                            <th>Pemberi Tugas / Klien</th>
                            <th>Nilai Kontrak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project['nama'] }}</td>
                                <td>{{ $project['lokasi'] }}</td>
                                <td><span class="badge bg-primary-subtle text-primary">{{ $project['tahun'] }}</span></td>
                                <td>{{ $project['klien'] }}</td>
                                <td class="text-nowrap">{{ $project['nilai'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
                {{ $projects->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    <!-- TODO: Tambahkan semua proyek dari dokumen kualifikasi agar tabel lengkap -->
@endsection
