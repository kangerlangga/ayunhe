<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Fungsi untuk halaman dashboard
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            // 'jBs' => Beranda::where('visib_beranda', 'Tampilkan')->count(),
            // 'jBh' => Beranda::where('visib_beranda', 'Sembunyikan')->count(),
            // 'jPs' => Pegawai::where('visib_pegawai', 'Tampilkan')->count(),
            // 'jPh' => Pegawai::where('visib_pegawai', 'Sembunyikan')->count(),
            // 'jEs' => Ekstra::where('visib_ekstra', 'Tampilkan')->count(),
            // 'jEh' => Ekstra::where('visib_ekstra', 'Sembunyikan')->count(),
            // 'jGs' => Galeri::where('visib_galeri', 'Tampilkan')->count(),
            // 'jGh' => Galeri::where('visib_galeri', 'Sembunyikan')->count(),
            // 'jAs' => Artikel::where('visib_artikel', 'Tampilkan')->count(),
            // 'jAh' => Artikel::where('visib_artikel', 'Sembunyikan')->count(),
            // 'jBTs' => Berita::where('visib_berita', 'Tampilkan')->count(),
            // 'jBTh' => Berita::where('visib_berita', 'Sembunyikan')->count(),
        ];
        return view('pages.admin.dashboard', $data);
    }
}
