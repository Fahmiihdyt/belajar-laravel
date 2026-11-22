@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<h2>Daftar Buku</h2>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('books.create') }}">Tambah Buku</a>

<br><br>

@forelse ($books as $book)

    <hr style="border: 0; border-top: 1px solid #ccc; margin: 20px 0;">

    <h2>{{ $book->title }}</h2>

    <p>ID: {{ $book->id }}</p>

    <p>Penulis: {{ $book->author }}</p>

    <p>Tahun: {{ $book->year }}</p>

    <p>Stok: {{ $book->stock }}</p>

    <p>Kategori: {{ $book->category?->name ?? 'Belum ada kategori' }}</p>

    <a href="{{ route('books.show', $book->id) }}">Detail</a> |
    <a href="{{ route('books.edit', $book->id) }}">Edit</a>

    @can('delete', $book)
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
    @endcan

    <hr style="border: 0; border-top: 1px solid #eee; margin: 25px 0;">

@empty
    <p>Belum ada data buku.</p>
@endforelse

@endsection