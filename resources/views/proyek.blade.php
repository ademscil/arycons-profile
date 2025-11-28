@extends('layouts.main')

@section('content')
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-3">
        <div>
            <p class="section-title mb-2">Portofolio</p>
            <h1 class="mb-2">Riwayat Proyek</h1>
            <p class="text-muted mb-0">Ringkasan proyek dengan detail klien dan nilai kontrak.</p>
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
                        <tr>
                            <td>Supervisi Pembangunan Kantor Kejari Pangkalpinang</td>
                            <td>Pangkalpinang</td>
                            <td><span class="badge bg-primary-subtle text-primary">2023</span></td>
                            <td>Dinas PUPR Kota Pangkalpinang</td>
                            <td>Rp 181.584.900</td>
                        </tr>
                        <tr>
                            <td>DED Kantor Satpol PP Kota Pangkalpinang</td>
                            <td>Pangkalpinang</td>
                            <td><span class="badge bg-primary-subtle text-primary">2023</span></td>
                            <td>Satpol PP Kota Pangkalpinang</td>
                            <td>Rp 99.927.975</td>
                        </tr>
                        <tr>
                            <td>Review DED Kolong Nyatoh / Kolam Retensi Linggarjati Hulu</td>
                            <td>Pangkalpinang</td>
                            <td><span class="badge bg-primary-subtle text-primary">2022</span></td>
                            <td>Dinas PUPR Kota Pangkalpinang</td>
                            <td>Rp 288.514.000</td>
                        </tr>
                        <tr>
                            <td>Belanja Modal Konsultansi Perencanaan Bangunan Kesehatan</td>
                            <td>Kab. Bangka</td>
                            <td><span class="badge bg-primary-subtle text-primary">2021</span></td>
                            <td>RSUD Dr. (H.C) Ir. Soekarno Bangka Belitung</td>
                            <td>Rp 194.700.000</td>
                        </tr>
                        <tr>
                            <td>Penyusunan Masterplan RTH Kelapa Kampit &amp; Manggar</td>
                            <td>Belitung Timur</td>
                            <td><span class="badge bg-primary-subtle text-primary">2021</span></td>
                            <td>Dinas PUPR Kab. Belitung Timur</td>
                            <td>Rp 98.312.500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
