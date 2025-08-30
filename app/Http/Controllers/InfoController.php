<?php

namespace App\Http\Controllers;

use App\Models\News; // pastikan model News ada
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        // Ambil semua berita terbaru
        $news = News::with('kategori')->latest()->get();
        return view('page-news.landing', compact('news'));
    }
}
