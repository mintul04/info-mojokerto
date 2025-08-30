@extends('templates.main')

@section('main')
<div class="container">
    <h3>Edit Kategori Berita</h3>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama" id="nama" class="form-control" required value="{{ $kategori->nama }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
