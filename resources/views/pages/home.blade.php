@extends('layouts.app')

@section('title', 'Khaerul Oktafiansyah — Lulusan TI & Junior Data Analyst')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container hero-grid">
        <!-- Hero Text Content -->
        <div class="hero-content">
            <div class="hero-status-pill">
                <span class="status-dot"></span>
                <span>Tersedia untuk Peluang Kerja & Magang</span>
            </div>

            <h1 class="hero-title">
                Halo, Saya <br>
                <span class="gradient-text">{{ $profile['name'] }}</span>
            </h1>

            <p class="hero-tagline">
                {{ $profile['hero_tagline'] }}
            </p>

            <p class="hero-bio">
                {{ $profile['bio_summary'] }}
            </p>

            <!-- Call to Actions -->
            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                    Lihat Portofolio Proyek
                </a>
                <a href="{{ route('thesis') }}" class="btn btn-indigo">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                    Tugas Akhir Saham BBCA
                </a>
                <a href="{{ route('cv') }}" class="btn btn-secondary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    Unduh CV (PDF)
                </a>
            </div>

            <!-- Quantitative Stats -->
            <div class="hero-stats-grid">
                @foreach($profile['stats'] as $stat)
                <div class="hero-stat-item">
                    <h3>{{ $stat['value'] }}</h3>
                    <p>{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Hero Visual Profile Card -->
        <div class="hero-visual">
            <div class="hero-avatar-frame">
                <div class="hero-avatar-inner">
                    <!-- Dynamic SVG Illustration Profile Avatar -->
                    <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%); color: #ffffff; padding: 2rem; text-align: center;">
                        <div style="width: 130px; height: 130px; border-radius: 50%; background: linear-gradient(135deg, #10b981, #6366f1); display: flex; align-items: center; justify-content: center; font-size: 3.5rem; font-weight: 800; margin-bottom: 1.25rem; box-shadow: 0 10px 25px rgba(16, 185, 129, 0.35);">
                            KO
                        </div>
                        <h3 style="font-size: 1.35rem; font-weight: 700; color: #ffffff; margin-bottom: 0.35rem;">Khaerul Oktafiansyah</h3>
                        <p style="font-size: 0.85rem; color: #94a3b8; margin-bottom: 0.75rem;">Universitas Pamulang &bull; IPK 3.77</p>
                        <span class="badge badge-emerald">BNSP Junior Data Analyst</span>
                    </div>
                </div>

                <!-- Floating Badges -->
                <div class="hero-float-badge float-badge-1">
                    <span style="font-size: 1.2rem;">📈</span>
                    <div>
                        <span style="font-size: 0.725rem; color: var(--text-muted); display: block;">Tugas Akhir</span>
                        <span>Prediksi Saham BBCA</span>
                    </div>
                </div>

                <div class="hero-float-badge float-badge-2">
                    <span style="font-size: 1.2rem;">📱</span>
                    <div>
                        <span style="font-size: 0.725rem; color: var(--text-muted); display: block;">Aplikasi Gudang</span>
                        <span>Android & Firebase</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Thesis Highlight Section -->
<section class="section" style="background: var(--bg-surface-elevated); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Sorotan Tugas Akhir</span>
            <h2 class="section-title">Pemodelan Prediksi Harga Saham BBCA</h2>
            <p class="section-desc">Penerapan Machine Learning & Time Series Forecasting pada instrumen perbankan terkemuka di Indonesia.</p>
        </div>

        <div class="thesis-hero-card">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; align-items: center;">
                <div>
                    <span class="badge badge-emerald" style="margin-bottom: 1rem;">Okt 2025 – Sep 2026 &bull; Skripsi S1</span>
                    <h3 style="font-size: 1.65rem; margin-bottom: 1rem;">Optimasi Akurasi Prediksi dengan Feature Engineering & Validasi Metrik</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1.5rem; font-size: 0.975rem; line-height: 1.7;">
                        Mengembangkan model prediksi berbasis Python di Google Colab. Meliputi data cleaning, eksplorasi pola historis, pembuatan fitur indikator teknikal (Moving Averages, Lag Features), serta evaluasi akurasi menggunakan MAE, RMSE, dan MAPE untuk memproyeksikan pergerakan harga saham secara presisi.
                    </p>
                    
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.75rem;">
                        <span class="badge">Python</span>
                        <span class="badge">Google Colab</span>
                        <span class="badge">Scikit-Learn</span>
                        <span class="badge">Pandas</span>
                        <span class="badge">Time Series</span>
                    </div>

                    <a href="{{ route('thesis') }}" class="btn btn-primary">
                        Eksplorasi Detail Metodologi & Visualisasi Grafik &rarr;
                    </a>
                </div>

                <div>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                        @foreach(array_slice($thesis['evaluation_metrics'], 0, 4) as $metric)
                        <div class="metric-box">
                            <h4>{{ $metric['value'] }}</h4>
                            <p>{{ $metric['metric'] }}</p>
                            <span>{{ $metric['desc'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Portofolio Pilihan</span>
            <h2 class="section-title">Karya & Proyek Terpilih</h2>
            <p class="section-desc">Kombinasi analisis data prediktif, pengembangan aplikasi mobile terintegrasi, dan desain antarmuka pengguna.</p>
        </div>

        <div class="projects-grid">
            @foreach($featuredProjects as $project)
            <div class="card project-card">
                <div class="project-thumbnail">
                    <span class="project-type-chip">{{ $project['type_badge'] }}</span>
                    <!-- Decorative Canvas / Placeholder -->
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; height: 100%; color: var(--emerald-primary);">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        <span style="font-size: 0.8rem; font-weight: 600; margin-top: 0.5rem; color: var(--text-secondary);">{{ $project['category'] }}</span>
                    </div>
                </div>

                <div class="project-header">
                    <span class="project-period">{{ $project['period'] }}</span>
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <p style="font-size: 0.825rem; color: var(--indigo-primary); font-weight: 600; margin-bottom: 0.5rem;">
                        Peran: {{ $project['role'] }}
                    </p>
                </div>

                <p class="project-summary">
                    {{ $project['summary'] }}
                </p>

                <div class="project-tags">
                    @foreach($project['tech_stack'] as $tech)
                    <span class="badge">{{ $tech }}</span>
                    @endforeach
                </div>

                <div class="project-footer">
                    @if($project['has_dedicated_page'])
                    <a href="{{ route('thesis') }}" class="btn btn-sm btn-outline-emerald">
                        Halaman Khusus &rarr;
                    </a>
                    @else
                    <a href="{{ route('projects') }}" class="btn btn-sm btn-secondary">
                        Detail Proyek &rarr;
                    </a>
                    @endif

                    @if(!empty($project['repo_url']))
                    <a href="{{ $project['repo_url'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-secondary" aria-label="Lihat Repository GitHub">
                        GitHub
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ route('projects') }}" class="btn btn-primary">
                Lihat Seluruh Proyek & Filter Kategori &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="section" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(99, 102, 241, 0.1)); border-top: 1px solid var(--border-subtle);">
    <div class="container" style="text-align: center; max-width: 750px;">
        <span class="section-tag">Mari Terhubung</span>
        <h2 class="section-title" style="margin-top: 0.5rem;">Tertarik Berkolaborasi atau Merekrut?</h2>
        <p class="section-desc" style="margin-bottom: 2rem;">
            Saya siap berkontribusi penuh sebagai Junior Data Analyst atau Software Developer di perusahaan Anda.
        </p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="{{ route('contact') }}" class="btn btn-primary">
                Kirim Pesan Sekarang
            </a>
            <a href="https://wa.me/6281573179872" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                Hubungi via WhatsApp
            </a>
            <a href="{{ route('cv') }}" class="btn btn-secondary">
                Lihat & Unduh CV PDF
            </a>
        </div>
    </div>
</section>
@endsection
