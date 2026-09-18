@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    @if($stock > 0)
        <p>Stok tersedia: {{ $stock }}</p>
    @else
        <p>Stok habis.</p>
    @endif

    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book['judul'] }}</strong> <br>
                Penulis: {{ $book['penulis'] }} | Tahun: {{ $book['tahun'] }}
            </li>
        @endforeach
    </ul>
@endsection