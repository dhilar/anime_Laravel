<!-- resources/views/anime_nonton/show.blade.php -->

<section class="anime-streaming">
    <div class="container">
        <div class="anime-header">
            <h1>{{ $animeNonton->title }}</h1>
            <img src="{{ asset('' . $animeNonton->image) }}" alt="{{ $animeNonton->title }}" class="anime-thumbnail">
        </div>
        <p class="anime-description">{{ $animeNonton->description }}</p>
        <div class="video-player">
            <video width="100%" controls>
                <source src="{{ asset('storage/' . $animeNonton->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>

<!-- Tambahkan custom CSS di bagian head atau file terpisah -->
<style>
.anime-streaming {
    padding: 50px 0;
    background-color: #f9f9f9;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 8px;
}

.anime-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
}

.anime-header h1 {
    font-size: 36px;
    color: #333;
    margin: 0;
}

.anime-thumbnail {
    max-width: 300px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.anime-description {
    font-size: 18px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.video-player {
    margin-top: 30px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

video {
    border-radius: 8px;
}
</style>
