<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anime Watch - Anime List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Anime Watch</h1>
        <nav>
          <ul>
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('list') }}">Anime List</a></li>
            <li><a href="{{ url('informasi') }}">Informasi</a></li>
            <li><a href="{{ url('kontak') }}">Kontak</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section class="anime-list-section">
        <div class="container">
          <h2>Anime List</h2>
          <div class="anime-list">
            @foreach($animes as $anime)
            <div class="anime-item">
              <img src="{{ asset($anime->image) }}" alt="{{ $anime->title }}" />
              <h3>{{ $anime->title }}</h3>
              <p>{{ $anime->description }}</p>
              <button class="watch-now-btn" onclick="window.location='{{ route('anime.nonton.index') }}'">Tonton?</button>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
