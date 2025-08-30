@extends('templates.main') {{-- pastikan layout sesuai --}}

@section('main')
<div class="container">
    <h1>Edit Berita</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
         @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required value="{{ $news->judul }}">
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi" name="konten" rows="4" required>{{ $news->konten }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="datetime-local" class="form-control" id="tanggal" name="waktu" required value="{{ $news->waktu }}">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Berita</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
        </div>
        <div class="mb-3">
            <img src="{{ asset('uploads/news/' . $news->gambar) }}" class="img-fluid" style="width: 30%; max-width: 300px;" alt="">
        </div>

        <div class="mb-3">
            <label for="id_category" class="form-label">Kategori</label>
            <select name="id_category" id="id_category" class="form-select">
                @foreach($categories as $category)
                    <option {{ $category->id == $news->id_category ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
