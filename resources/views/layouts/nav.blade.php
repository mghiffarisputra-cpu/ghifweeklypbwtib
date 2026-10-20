<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- NAVBAR --}}
    <nav>
        <h3>Portofolio</h3>

        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('berita') }}">Berita</a>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <main>
    </main>

    {{-- FOOTER --}}
    <footer>
        <p>© 2026 M Ghiffari. All rights reserved.</p>
    </footer>

</body>
</html>