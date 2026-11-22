
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Library System Dashboard</h2>
    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>

    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
        <li>Jumlah Anggota: {{ $totalMembers }}</li>
        <li>Jumlah Peminjaman: {{ $totalBorrowings }}</li>
    </ul>
@endsection
