<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-col">
                <a href="{{ route('home') }}" class="nav-brand" style="margin-bottom: 1.25rem;">
                    <div class="nav-brand-logo">KO</div>
                    <span>Khaerul Oktafiansyah</span>
                </a>
                <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 1.5rem; max-width: 360px;">
                    Lulusan S1 Teknik Informatika Universitas Pamulang dan pemegang sertifikasi BNSP Junior Data Analyst. Berfokus pada transformasi data menjadi keputusan strategis.
                </p>
                <div style="display: flex; gap: 0.75rem;">
                    <a href="https://linkedin.com/in/khaerul-oktafiansyah" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-secondary" aria-label="LinkedIn">
                        LinkedIn
                    </a>
                    <a href="https://github.com/arul012" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-secondary" aria-label="GitHub">
                        GitHub
                    </a>
                    <a href="https://wa.me/6281573179872" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-secondary" aria-label="WhatsApp">
                        WhatsApp
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4 style="font-size: 1.1rem; margin-bottom: 1.25rem;">Navigasi Halaman</h4>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.925rem; color: var(--text-secondary);">
                    <li><a href="{{ route('home') }}" style="hover:color: var(--emerald-primary);">Beranda</a></li>
                    <li><a href="{{ route('about') }}">Tentang Saya</a></li>
                    <li><a href="{{ route('projects') }}">Katalog Proyek</a></li>
                    <li><a href="{{ route('thesis') }}">Tugas Akhir (BBCA)</a></li>
                    <li><a href="{{ route('experience') }}">Riwayat Pengalaman</a></li>
                    <li><a href="{{ route('cv') }}">Curriculum Vitae</a></li>
                    <li><a href="{{ route('contact') }}">Hubungi Saya</a></li>
                </ul>
            </div>

            <!-- Direct Contact -->
            <div class="footer-col">
                <h4 style="font-size: 1.1rem; margin-bottom: 1.25rem;">Informasi Kontak</h4>
                <div style="display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.925rem; color: var(--text-secondary);">
                    <div>
                        <span style="font-weight: 600; color: var(--text-primary); display: block;">Email:</span>
                        <a href="mailto:khaeruloktafiansyah04@gmail.com" style="color: var(--emerald-primary);">khaeruloktafiansyah04@gmail.com</a>
                    </div>
                    <div>
                        <span style="font-weight: 600; color: var(--text-primary); display: block;">Telepon / WA:</span>
                        <span>+62 815-7317-9872</span>
                    </div>
                    <div>
                        <span style="font-weight: 600; color: var(--text-primary); display: block;">Lokasi Domisili:</span>
                        <span>Tangerang Selatan, Banten, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 1rem;">
                <p>&copy; {{ date('Y') }} Khaerul Oktafiansyah. Seluruh hak cipta dilindungi.</p>
                <p style="font-size: 0.85rem;">
                    Dibuat dengan <strong style="color: var(--indigo-primary);">Laravel PHP</strong> &bull; Siap Hosting di <strong style="color: var(--emerald-primary);">GitHub Pages</strong>
                </p>
            </div>
        </div>
    </div>
</footer>
