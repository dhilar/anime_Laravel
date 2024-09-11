<script src="{{ asset('js/readMore.js') }}"></script>

<section class="anime-highlights">
    <div class="container">
        <h2>Anime Highlights</h2>
        <div class="anime-list">
            <div class="anime-item">
                <img src="{{ asset('css/images/anime-1.jpg') }}" alt="Anime 1">
                <h3><a href="#">High card</a></h3>
                <p class="anime-desc">
                    High card adalah anime yang menceritakan seorang Mc bernama 
                    <span class="short-desc">...</span>
                    <span class="full-desc" style="display:none;">Finn yang masuk ke dalam dunia kartu sihir.</span>
                    <a href="javascript:void(0);" class="read-more">Baca Selengkapnya</a>
                </p>
                <a href="{{ route('anime.nonton.index') }}" class="watch-now-btn">Tonton?</a>

            </div>
            <div class="anime-item">
                <img src="{{ asset('css/images/anime-2.jpeg') }}" alt="Anime 2">
                <h3><a href="#">Charllote</a></h3>
                <p class="anime-desc">
                    Ini adalah anime tentang remaja yang memiliki kekuatan khusus 
                    <span class="short-desc">...</span>
                    <span class="full-desc" style="display:none;">dengan cerita penuh intrik dan konflik.</span>
                    <a href="javascript:void(0);" class="read-more">Baca Selengkapnya</a>
                </p>
                <a href="{{ url('/streaming/charllote') }}" class="watch-now-btn">Tonton?</a>
            </div>
            <div class="anime-item">
                <img src="{{ asset('css/images/anime-3.jpeg') }}" alt="Anime 3">
                <h3><a href="#">Horimiya</a></h3>
                <p class="anime-desc">
                    Anime tentang persahabatan dan cinta
                    <span class="short-desc">...</span>
                    <span class="full-desc" style="display:none;">yang berkembang antara dua orang remaja dengan latar belakang berbeda.</span>
                    <a href="javascript:void(0);" class="read-more">Baca Selengkapnya</a>
                </p>
                <a href="{{ url('/streaming/horimiya') }}" class="watch-now-btn">Tonton?</a>
            </div>
        </div>
    </div>
</section>