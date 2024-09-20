<!-- resources/views/partials/footer.blade.php -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>About Anime World</h3>
                <p>Anime World adalah situs terbaik untuk menonton dan mengeksplorasi anime favorit Anda.</p>
            </div>

            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('list') }}">Anime List</a></li>
                    <li><a href="{{ route('anime.nonton.index') }}">streaming?</a></li>
                    {{-- <li><a href="{{ route('contact') }}">Contact Us</a></li> --}}
                </ul>
            </div>

            <div class="footer-section social">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><img src="{{ asset('css/icon/facebook.jpeg') }}" alt="img"></a>
                    <a href="#"><img src="{{ asset('css/icon/twiter.jpeg') }}" alt="img"></a>
                    <a href="#"><img src="{{ asset('css/icon/instagram.jpg') }}" alt="img"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2024 Anime World | Designed by You
        </div>
    </div>
</footer>
