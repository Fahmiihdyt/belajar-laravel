
@extends('layouts.app')

@section('title', 'Data Peminjaman')

@section('content')
    <h2>Data Peminjaman</h2>

    <a href="{{ route('borrowings.create') }}">Tambah Peminjaman</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
    <p>{{ session('error') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Petugas</th>
                <th>Tanggal Pinjam</th>
                <th>Batas Pengembalian</th>
                <th>Daftar Buku</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse($borrowings as $borrowing)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $borrowing->member->name }}</td>
                    <td>{{ $borrowing->user->name }}</td>
                    <td>{{ $borrowing->borrowing_date }}</td>
                    <td>{{ $borrowing->due_date }}</td>
                    <td>
                        @foreach($borrowing->details as $detail)
                            {{ $detail->book->title }}
                            ({{ $detail->quantity }})
                            <br>
                        @endforeach
                    </td>
                    <td>
                        {{ $borrowing->status }}

                        @if($borrowing->status == 'borrowed')
                            <form action="{{ route('borrowings.return', $borrowing->id) }}" method="POST">
                                @csrf

                                <button type="submit"
                                    onclick="return confirm('Yakin ingin mengembalikan buku ini?')">
                                    Kembalikan Buku
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data peminjaman.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
