```php
@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title ?? 'Daftar Buku' }}</h2>
    <p>{{ $description ?? 'Data buku perpustakaan' }}</p>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <p>
        <a href="{{ route('books.create') }}">Tambah Buku</a>
    </p>

    @forelse ($books as $book)
        <hr>

        <p>ID: {{ $book->id }}</p>
        <h3>{{ $book->title }}</h3>
        <p>Penulis: {{ $book->author }}</p>
        <p>Tahun: {{ $book->year }}</p>
        <p>Stok: {{ $book->stock }}</p>

        <a href="{{ route('books.show', $book->id) }}">Detail</a> |
        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

        <form action="{{ route('books.destroy', $book->id) }}"
              method="POST"
              style="display: inline;">
            @csrf
            @method('DELETE')

            <button type="submit"
                    onclick="return confirm('Yakin ingin menghapus buku ini?')">
                Hapus
            </button>
        </form>

    @empty
        <p>Belum ada data buku.</p>
    @endforelse
@endsection
```