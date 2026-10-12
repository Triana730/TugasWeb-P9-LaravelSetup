<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Halaman Home</h1>
    <p>Halo, nama saya {{ $nama }}.</p>

    <h3>Hobi saya:</h3>
    <ul>
        @foreach ($hobi as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <a href="/">Home</a> | <a href="/about">About</a> | <a href="/contact">Contact</a>
</body>
</html>