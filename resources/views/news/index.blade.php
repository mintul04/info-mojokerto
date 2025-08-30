@extends('templates.main')
@section('main')
    <div class="container">
        <h3>Table Data Berita</h3>
        <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">+ Tambah</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>konten</th>
                    <th>Waktu</th>
                    <th>gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori->nama ?? '/' }}</td>
                        <td>{{ $item->konten }}</td>
                        <td>{{ $item->waktu }}</td>
                        <td><img class="img-fluid" style="width: 200px" src="{{ asset('uploads/news/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}"></td>
                        <td>
                            <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline">
                                @csrf @method('DELETE')
                                <a class="btn btn-warning" href="{{ route('news.edit', $item->id) }}">Edit</a>
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
