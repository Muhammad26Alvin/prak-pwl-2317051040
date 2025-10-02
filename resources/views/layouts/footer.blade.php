<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-section footer-about">
            <h3 class="footer-title">Tentang Saya</h3>
            <p>
                Muhammad Alvin 2317051040 Kelas B
            </p>
        </div>

        <div class="footer-section footer-links">
            <h3 class="footer-title">Tautan Cepat</h3>
            <ul>
                <li><a href="{{ url('/profile/Muhammad Alvin/2317051040/B') }}">Tentang Saya</a></li>
                <li><a href="{{ url('/user/contact') }}">Kontak Saya</a></li>
            </ul>
        </div>

        <div class="footer-section footer-social">
            <h3 class="footer-title">Ikuti Saya</h3>
            <!-- Ganti '#' dengan link media sosial Anda -->
            <a href="{{ url('/profile/Muhammad Alvin/2317051040/B') }}" class="social-link">Instagram</a>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; {{ date('Y') }} Muhammad Alvin 2317051040 Kelas B. Semua Hak Cipta Dilindungi.
    </div>
</footer>
