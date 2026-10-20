```php
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label>Judul Buku</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br><br>

        <label>Penulis</label><br>
        <input type="text" name="author" value="{{ old('author') }}"><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="year" value="{{ old('year') }}"><br><br>

        <label>Stok</label><br>
        <input type="number" name="stock" value="{{ old('stock') }}"><br><br>

        <label>Kategori Buku</label><br>
        <select name="category_id" required>
            <option value="">Pilih Kategori</option>

            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @selected(old('category_id') == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br><br>

        @error('category_id')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Simpan Buku</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
</body>
</html>
```