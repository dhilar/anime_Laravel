<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Website - @yield('title')</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/bg-anime.jpg') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Anime World</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/list') }}">Anime List</a></li>
                    <li><a href="{{ url('/informasi') }}">Informasi</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
