<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news.index', [
            'news' => News::with('kategori')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'       => 'required',
            'id_category' => 'required',
            'konten'      => 'required',
            'waktu'       => 'required',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('uploads/news/'), $fileName);

            $validated['gambar'] = $fileName;
        }

        News::create($validated);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('news.edit', [
            'news' => News::find($id),
            'categories' => Category::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul'       => 'required',
            'id_category' => 'required',
            'konten'      => 'required',
            'waktu'       => 'required',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $news = News::find($id);

        if ($request->hasFile('gambar')) {
            $file_path = public_path('uploads/news/' . $news->gambar);
            if (file_exists($file_path)) {
               unlink($file_path);
            }
            $file = $request->file('gambar');

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('uploads/news/'), $fileName);

            $validated['gambar'] = $fileName;
        }

        News::find($id)->update($validated);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diedit.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);

        $file_path = public_path("uploads/news/" . $news->gambar);

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
    }
    
}
