<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News; // pastikan model News ada
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        // Ambil semua berita terbaru
        $news = News::with('kategori')->latest()->get();
        return view('page-news.landing', [
            'news' => $news,
        ]);
    }

    public function perKategori($id)
    {
        $kategori = Category::where('id', $id)->firstOrFail();
        $berita = $kategori->berita()->latest()->paginate(9);

        return view('page-news.per-kategori', [
            'kategori' => $kategori,
            'berita' => $berita,
        ]);
    }

    public function semuaBerita()
    {
        $berita = News::with('kategori')->latest()->paginate(9);
        return view('page-news.semua-berita', [
            'berita' => $berita,
        ]);
    }

    public function detailBerita($id)
    {
        $berita = News::with('kategori')->findOrFail($id);

        return view('page-news.detail-berita', [
            'berita' => $berita,
            'terkait' => News::where('id_category', $berita->id_category)
                ->where('id', '!=', $berita->id)
                ->latest()->take(3)->get(),
        ]);
    }
}
