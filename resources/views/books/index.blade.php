@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    @foreach ($books as $book)
        <p>ID: {{ $book->id }}</p>
        <h3>{{ $book->title }}</h3>
        <p>Penulis: {{ $book->author }}</p>
        <p>Tahun: {{ $book->year }}</p>
        <p>Stok: {{ $book->stock }}</p>
    @endforeach
@endsection