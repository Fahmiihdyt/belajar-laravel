<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan';

        $books = [
                
            ['judul' => 'Pemrograman PHP', 'penulis' => 'Eko Kurniawan', 'tahun' => 2023],
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Budi Santoso', 'tahun' => 2024],
            ['judul' => 'Basis Data', 'penulis' => 'Andi Susanto', 'tahun' => 2022],
            ['judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Citra Lestari', 'tahun' => 2023],
            ['judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Dewi Anggraini', 'tahun' => 2025]
        ];

        $stock = 5;

        return view('books.index', compact('title', 'description', 'books', 'stock'));
    }

        public function show($id)
    {
        return view('books.show', compact('id'));
    }
}