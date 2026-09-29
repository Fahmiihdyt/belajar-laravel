<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Andi',
            'year' => 2024,
            'stock' => 10,
        ]);

        Book::create([
        'title' => 'Belajar PHP Dasar',
        'author' => 'Budi',
        'year' => 2023,
        'stock' => 8,
        ]);

        Book::create([
        'title' => 'Pemrograman Web',
        'author' => 'Citra',
        'year' => 2022,
        'stock' => 12,
        ]);

        Book::create([
        'title' => 'Dasar-Dasar MySQL',
        'author' => 'Dedi',
        'year' => 2024,
        'stock' => 7,
        ]);

        Book::create([
        'title' => 'Belajar Laravel dan Eloquent',
        'author' => 'Eka',
        'year' => 2025,
        'stock' => 15,
        ]);

    }
}
