
<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
</head>
<body>

<h1>Library System</h1>

<nav>
    <a href="/dashboard">Dashboard</a> |
    <a href="/books">Books</a> |
    <a href="/categories">Categories</a> |
    <a href="/members">Members</a>
</nav>

<hr>

<h2>Detail Buku</h2>

<p>ID: {{ $book->id }}</p>

<p>Judul Buku: {{ $book->title }}</p>

<p>Penulis: {{ $book->author }}</p>

<p>Tahun Terbit: {{ $book->year }}</p>

<p>Stok: {{ $book->stock }}</p>

<hr style="border: 0; border-top: 1px solid #eee; margin: 25px 0;">

<a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a> |
<a href="{{ route('books.edit', $book->id) }}">Edit Buku</a>

</body>
</html>
