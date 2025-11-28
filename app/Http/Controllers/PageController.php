<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

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

    public function proyek(): View
    {
        return view('proyek');
    }

    public function kontak(): View
    {
        return view('kontak');
    }
}
