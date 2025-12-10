<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public function beranda(): View
    {
        return view('beranda');
    }

    public function tentang(): View
    {
        return view('tentang');
    }

    public function izinUsaha(): View
    {
        return view('izin-usaha');
    }

    public function pengalaman(): View
    {
        return view('pengalaman');
    }

    public function strukturOrganisasi(): View
    {
        return view('struktur-organisasi');
    }

    public function proyek(Request $request): View
    {
        // TODO: Lengkapi jika ada proyek lain di luar daftar ini. Pastikan tidak ada duplikasi nama.
        $projects = collect([
            [
                'nama' => 'Perencanaan Pembangunan Gedung Serbaguna Asrama Haji',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2021,
                'klien' => 'Kanwil Kementerian Agama Kep. Bangka Belitung',
                'nilai' => 'Rp 678.772.000',
            ],
            [
                'nama' => 'Konsultasi Supervisi KWS. MBR Pangkalpinang, Bangka Tengah, Bangka Selatan',
                'lokasi' => 'Pangkalpinang, Bangka Tengah, Bangka Selatan',
                'tahun' => 2015,
                'klien' => 'Satker Pengembangan Air Minum & Sanitasi Dinas PU Prov. Kep. Babel',
                'nilai' => 'Rp 488.928.000',
            ],
            [
                'nama' => 'Master Plan Kawasan Pasar Ratu Tunggal',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2020,
                'klien' => 'Dinas Koperasi, UMKM, dan Perdagangan Kota Pangkalpinang',
                'nilai' => 'Rp 372.680.000',
            ],
            [
                'nama' => 'Penyusunan DED Drainase Lingkungan Permukiman Kab. Belitung',
                'lokasi' => 'Belitung',
                'tahun' => 2016,
                'klien' => 'Satker Pengembangan Sistem PLP Bangka Belitung',
                'nilai' => 'Rp 338.849.500',
            ],
            [
                'nama' => 'Penyusunan DED Drainase Lingkungan Permukiman Kab. Belitung Timur',
                'lokasi' => 'Belitung Timur',
                'tahun' => 2016,
                'klien' => 'Satker Pengembangan Sistem PLP Bangka Belitung',
                'nilai' => 'Rp 335.610.000',
            ],
            [
                'nama' => 'Studi Kelayakan Gedung Fakultas Kedokteran UBB',
                'lokasi' => 'Air Anyir',
                'tahun' => 2021,
                'klien' => 'RSUD Dr. (H.C) Ir. Soekarno Bangka Belitung',
                'nilai' => 'Rp 296.175.000',
            ],
            [
                'nama' => 'Belanja Jasa Konsultansi Perencanaan Bangunan Kesehatan',
                'lokasi' => 'Air Anyir',
                'tahun' => 2021,
                'klien' => 'RSUD Dr. (H.C) Ir. Soekarno Bangka Belitung',
                'nilai' => 'Rp 194.700.000',
            ],
            [
                'nama' => 'Pengawasan/Supervisi Peningkatan Kualitas Permukiman Kumuh KWS. Puput',
                'lokasi' => 'Bangka Barat',
                'tahun' => 2016,
                'klien' => 'Satker Pengembangan Kawasan Permukiman I Prov. Kep. Babel',
                'nilai' => 'Rp 198.814.000',
            ],
            [
                'nama' => 'Perencanaan Renovasi Gedung Kanwil Kemenkumham Kep. Babel',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2020,
                'klien' => 'Kementerian Hukum dan HAM Pangkalpinang',
                'nilai' => 'Rp 176.247.500',
            ],
            [
                'nama' => 'Supervisi Pembangunan Kantor Kejari Pangkalpinang',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2023,
                'klien' => 'Dinas PUPR Kota Pangkalpinang',
                'nilai' => 'Rp 181.584.900',
            ],
            [
                'nama' => 'Perluasan Gedung Kantor Layanan SKIPM Pontianak',
                'lokasi' => 'Pontianak',
                'tahun' => 2018,
                'klien' => 'SKIPM Kelas I Pontianak',
                'nilai' => 'Rp 116.490.000',
            ],
            [
                'nama' => 'Supervisi Peningkatan Kawasan Perkotaan Kabupaten Belitung',
                'lokasi' => 'Belitung',
                'tahun' => 2017,
                'klien' => 'Satker Penataan Bangunan & Lingkungan Prov. Kep. Babel',
                'nilai' => 'Rp 136.565.000',
            ],
            [
                'nama' => 'Supervisi Pembangunan RTH Alun-Alun Koba',
                'lokasi' => 'Bangka Tengah',
                'tahun' => 2017,
                'klien' => 'Satker Penataan Bangunan & Lingkungan Prov. Kep. Babel',
                'nilai' => 'Rp 142.131.000',
            ],
            [
                'nama' => 'Supervisi SPAM IKK Merawang',
                'lokasi' => 'Merawang',
                'tahun' => 2017,
                'klien' => 'Satker Pengembangan SPAM Provinsi Bangka Belitung',
                'nilai' => 'Rp 256.300.000',
            ],
            [
                'nama' => 'Supervisi Renovasi Gedung Bedah Sentral RSUD Beltim',
                'lokasi' => 'Belitung Timur',
                'tahun' => 2017,
                'klien' => 'RSUD Kabupaten Belitung Timur',
                'nilai' => 'Rp 158.972.000',
            ],
            [
                'nama' => 'DED Kantor Satpol PP Kota Pangkalpinang',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2023,
                'klien' => 'Satpol PP Kota Pangkalpinang',
                'nilai' => 'Rp 99.927.000',
            ],
            [
                'nama' => 'Pengawasan/Supervisi Konstruksi Prasarana Air Baku Kolong Menjelang',
                'lokasi' => 'Bangka Barat',
                'tahun' => 2015,
                'klien' => 'Satker Penyediaan Air Baku Bangka Belitung',
                'nilai' => 'Rp 114.421.000',
            ],
            [
                'nama' => 'Konsultan Bantuan Perencanaan Teknis',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2023,
                'klien' => 'Dinas PUPR Kota Pangkalpinang',
                'nilai' => 'Rp 99.875.000',
            ],
            [
                'nama' => 'Perencanaan Konstruksi Renovasi Fasad Gedung Kantor',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2023,
                'klien' => 'Loka Monitor Spektrum Frekuensi Radio Pangkalpinang',
                'nilai' => 'Rp 99.757.000',
            ],
            [
                'nama' => 'Perencanaan Rehabilitasi/Renovasi Kantor Imigrasi Kelas I TPI Pangkalpinang',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2020,
                'klien' => 'Kementerian Hukum dan HAM Pangkalpinang',
                'nilai' => 'Rp 98.890.000',
            ],
            [
                'nama' => 'Perencanaan Pembangunan Gedung Laboratorium',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2004,
                'klien' => 'Dinas Kelautan dan Perikanan Provinsi Bangka Belitung',
                'nilai' => 'Rp 97.000.000',
            ],
            [
                'nama' => 'FS Pasar Kerabut',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2022,
                'klien' => 'Dinas Koperasi, UMKM, dan Perdagangan Kota Pangkalpinang',
                'nilai' => 'Rp 79.920.000',
            ],
            [
                'nama' => 'Standar Sanitasi Kota Pangkalpinang',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2022,
                'klien' => 'Dinas PUPR Kota Pangkalpinang',
                'nilai' => 'Rp 99.925.000',
            ],
            [
                'nama' => 'Survei Kondisi Jalan Kota Pangkalpinang',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2024,
                'klien' => 'Dinas PUPR Kota Pangkalpinang',
                'nilai' => 'Rp 99.833.350',
            ],
            [
                'nama' => 'Database Jembatan Kabupaten Bangka',
                'lokasi' => 'Bangka',
                'tahun' => 2024,
                'klien' => 'Dinas PUPR Kabupaten Bangka',
                'nilai' => 'Rp 99.253.980',
            ],
            [
                'nama' => 'Konsultan DED TPA Nurul Hidayah Air Itam',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2024,
                'klien' => 'Dinas PUPR Kota Pangkalpinang',
                'nilai' => 'Rp 74.885.000',
            ],
            [
                'nama' => 'Perencanaan Gedung Kantor SMAN 3 Toboali (Ruang Guru, Kepala Sekolah, TU)',
                'lokasi' => 'Toboali, Bangka Selatan',
                'tahun' => 2024,
                'klien' => 'Cabdin Wilayah III Dinas Pendidikan Prov. Kep. Babel',
                'nilai' => 'Rp 64.273.440',
            ],
            [
                'nama' => 'Perencanaan Gedung Balai Nikah & Manasik Haji KUA Toboali',
                'lokasi' => 'Bangka Selatan',
                'tahun' => 2021,
                'klien' => 'Kantor Kementerian Agama Kab. Bangka Selatan',
                'nilai' => 'Rp 49.912.500',
            ],
            [
                'nama' => 'Jasa Konsultasi Perencanaan Peningkatan Gedung Kantor',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2017,
                'klien' => 'Dinas Penanaman Modal dan PTSP Prov. Kep. Babel',
                'nilai' => 'Rp 49.225.000',
            ],
            [
                'nama' => 'Pengadaan Jasa Konsultan Perencana (DED)',
                'lokasi' => 'Pangkalpinang',
                'tahun' => 2016,
                'klien' => 'Dinas Pendidikan Prov. Bangka Belitung',
                'nilai' => 'Rp 44.627.000',
            ],
        ])->map(function (array $item) {
            $numeric = (int) preg_replace('/[^0-9]/', '', $item['nilai']);
            return $item + ['nilai_numeric' => $numeric];
        });

        $sorted = $projects->sortByDesc('nilai_numeric')->values();

        $perPage = 10;
        $currentPage = $request->integer('page', 1);
        $pageItems = $sorted->forPage($currentPage, $perPage)->values();

        $paginator = new LengthAwarePaginator(
            $pageItems,
            $sorted->count(),
            $perPage,
            $currentPage,
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ]
        );

        return view('proyek', ['projects' => $paginator]);
    }

    public function kontak(): View
    {
        return view('kontak');
    }
}
