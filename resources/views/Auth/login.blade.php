
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
</head>
<body>

    <h1>Login Sistem Perpustakaan</h1>

    <br>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="email">Email:</label>
            <br>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                style="margin-top: 5px; padding: 6px; width: 220px;"
            >
        </div>

        <div style="margin-bottom: 20px;">
            <label for="password">Password:</label>
            <br>
            <input
                type="password"
                name="password"
                id="password"
                required
                style="margin-top: 5px; padding: 6px; width: 220px;"
            >
        </div>

        <button type="submit">Login</button>
    </form>

</body>
</html>
