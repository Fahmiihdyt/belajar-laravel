
@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
    <h2>Form Peminjaman Buku</h2>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf

        <div>
            <label>Nama Anggota</label>
            <select name="member_id" required>
                <option value="">Pilih Anggota</option>

                @foreach($members as $member)
                    <option value="{{ $member->id }}"
                        {{ old('member_id') == $member->id ? 'selected' : '' }}>
                        {{ $member->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Judul Buku</label>
            <select name="book_id" required>
                <option value="">Pilih Buku</option>

                @foreach($books as $book)
                    <option value="{{ $book->id }}"
                        {{ old('book_id') == $book->id ? 'selected' : '' }}>
                        {{ $book->title }} (Stok: {{ $book->stock }})
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Jumlah Buku</label>
            <input type="number" name="quantity"
                value="{{ old('quantity', 1) }}" min="1" required>
        </div>

        <button type="submit">Simpan Peminjaman</button>
    </form>
@endsection
