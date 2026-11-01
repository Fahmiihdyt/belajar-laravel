
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>

<h1>Library System</h1>

<nav style="display: flex; align-items: center; gap: 20px;">
    <a href="/dashboard">Dashboard</a>
    <a href="/books">Books</a>
    <a href="/categories">Categories</a>
    <a href="/members">Members</a>
</nav>

<hr style="border: 0; border-top: 1px solid #ddd; margin: 15px 0 25px;">

<h2>Daftar Buku</h2>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

<br>

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

    <hr style="border: 0; border-top: 1px solid #eee; margin: 25px 0;">

@empty
    <p>Belum ada data buku.</p>
@endforelse

</body>
</html>
