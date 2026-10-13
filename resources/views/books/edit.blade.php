```php
<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul Buku</label><br>
        <input type="text" name="title" value="{{ old('title', $book->title) }}"><br><br>

        <label>Penulis</label><br>
        <input type="text" name="author" value="{{ old('author', $book->author) }}"><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="year" value="{{ old('year', $book->year) }}"><br><br>

        <label>Stok</label><br>
        <input type="number" name="stock" value="{{ old('stock', $book->stock) }}"><br><br>

        <button type="submit">Update Buku</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
</body>
</html>
```