
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library System')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }

        header h1 {
            margin-bottom: 15px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            color: #333;
            text-decoration: none;
        }

        nav a:hover {
            color: #2563eb;
            text-decoration: underline;
        }

        nav form {
            margin-left: auto;
        }

        nav button {
            padding: 6px 12px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }

        nav button:hover {
            background-color: #f2f2f2;
        }

        header hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin-top: 18px;
        }

        main {
            margin-top: 25px;
        }

        footer {
            margin-top: 35px;
            border-top: 1px solid #eee;
            padding-top: 10px;
            color: #777;
        }
    </style>
</head>
<body>

    <header>
        <h1>Library System</h1>

        <nav>
            <a href="/dashboard">Dashboard</a>
            <a href="/books">Books</a>
            <a href="/categories">Categories</a>
            <a href="/members">Members</a>
            <a href="{{ route('borrowings.index') }}">Peminjaman</a>
            @can('manage-users')
                <a href='/users'>Users</a>
            @endcan

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>

        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Library System</p>
    </footer>

</body>
</html>
