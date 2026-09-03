<nav class="navbar" id="navbar">
    <div class="container nav-container">
        <!-- Logo / Brand -->
        <a href="{{ route('home') }}" class="nav-brand" aria-label="Beranda Khaerul Oktafiansyah">
            <div class="nav-brand-logo">KO</div>
            <div class="nav-brand-text">
                <span>Khaerul O.</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <ul class="nav-menu" id="nav-menu">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    Tentang
                </a>
            </li>
            <li>
                <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">
                    Proyek
                </a>
            </li>
            <li>
                <a href="{{ route('thesis') }}" class="nav-link {{ request()->routeIs('thesis') ? 'active' : '' }}">
                    <span class="badge badge-emerald" style="padding: 0.15rem 0.4rem; font-size: 0.7rem; margin-right: 0.2rem;">TA</span>
                    Tugas Akhir
                </a>
            </li>
            <li>
                <a href="{{ route('experience') }}" class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}">
                    Pengalaman
                </a>
            </li>
            <li>
                <a href="{{ route('cv') }}" class="nav-link {{ request()->routeIs('cv') ? 'active' : '' }}">
                    CV
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Kontak
                </a>
            </li>
        </ul>

        <!-- Action Items (Theme Toggle & Mobile Menu) -->
        <div class="nav-actions">
            <!-- Theme Toggle Button -->
            <button id="theme-toggle" class="theme-toggle-btn" type="button" aria-label="Toggle Mode Gelap dan Terang" title="Ubah Tema Tampilan">
                <!-- Moon Icon (for Light Mode) -->
                <svg class="theme-icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
                <!-- Sun Icon (for Dark Mode) -->
                <svg class="theme-icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
            </button>

            <!-- Quick CV Action -->
            <a href="{{ route('cv') }}" class="btn btn-sm btn-outline-emerald d-none-sm">
                Lihat CV
            </a>

            <!-- Mobile Hamburger Button -->
            <button class="mobile-toggle-btn" id="mobile-nav-toggle" type="button" aria-label="Buka Menu Navigasi" aria-expanded="false">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</nav>
