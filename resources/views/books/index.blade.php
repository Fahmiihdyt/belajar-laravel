<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('books.create') }}">Tambah Buku</a>
    <br><br>

    @forelse ($books as $book)
        <hr>

        <p>ID: {{ $book->id }}</p>

        <h2>{{ $book->title }}</h2>

        <p>Penulis: {{ $book->author }}</p>

        <p>Tahun: {{ $book->year }}</p>

        <p>Stok: {{ $book->stock }}</p>

        <p>Kategori: {{ $book->category?->name ?? 'Belum ada kategori' }}</p>

        <a href="{{ route('books.show', $book->id) }}">Detail</a> |
        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')

            <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')">
                Hapus
            </button>
        </form>

        <br><br>
    @empty
        <p>Belum ada data buku.</p>
    @endforelse

</body>
</html>
```