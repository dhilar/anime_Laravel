<!-- resources/views/anime_nonton/index.blade.php -->
{{-- @extends('home') --}}

{{-- @section('content') --}}
<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
  </head>

@include('layouts.navbar-section')

{{-- @include('layouts.hero-section') --}}
<link rel="stylesheet" href="css/style-nonton.css" />
  </head>
<section class="anime-list">
    <div class="container">
        <h2>Streaming Anime List</h2>
        <div class="anime-items">
            @foreach($animeNontons as $animeNonton)
            <div class="anime-item">
                <img src="{{ asset($animeNonton->image) }}" alt="{{ $animeNonton->title }}">
                <h3><a href="{{ route('anime.nonton.show', $animeNonton->slug) }}">{{ $animeNonton->title }}</a></h3>
                <p>{{ Str::limit($animeNonton->description, 100) }}</p>
                <a href="{{ route('anime.nonton.show', $animeNonton->slug) }}" class="watch-now-btn">Tonton Sekarang</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.footer-section')



{{-- @endsection --}}
