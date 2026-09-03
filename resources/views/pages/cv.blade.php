@extends('layouts.app')

@section('title', 'Curriculum Vitae — Khaerul Oktafiansyah')

@section('content')
<section class="section" style="padding-bottom: 2rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2rem;">
            <span class="section-tag">Resume Digital</span>
            <h1 class="section-title">Curriculum Vitae</h1>
            <p class="section-desc">
                Ringkasan komprehensif profil, kompetensi teknis, sertifikasi profesi, dan rekam jejak pengalaman kerja.
            </p>

            <div style="display: flex; justify-content: center; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap;">
                <button onclick="window.print()" class="btn btn-primary" type="button">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                    Cetak / Simpan Sebagai PDF
                </button>
                <a href="mailto:{{ $profile['email'] }}?subject=Permintaan%20CV%20PDF%20Khaerul%20Oktafiansyah" class="btn btn-secondary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    Kirim CV via Email
                </a>
            </div>
        </div>

        <!-- Resume Paper Box -->
        <div class="card" id="resume-sheet" style="max-width: 900px; margin: 0 auto; padding: 3rem; background: var(--bg-surface); border: 1px solid var(--border-subtle); box-shadow: var(--card-shadow);">
            
            <!-- Resume Header -->
            <div style="border-bottom: 2px solid var(--border-subtle); padding-bottom: 1.75rem; margin-bottom: 2rem;">
                <h2 style="font-size: 2.2rem; font-weight: 800; letter-spacing: -0.02em; margin-bottom: 0.25rem;">
                    {{ strtoupper($profile['name']) }}
                </h2>
                <p style="font-size: 1.05rem; font-weight: 600; color: var(--emerald-primary); margin-bottom: 0.75rem;">
                    {{ $profile['role'] }}
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 1.25rem; font-size: 0.875rem; color: var(--text-secondary);">
                    <span>📧 <a href="mailto:{{ $profile['email'] }}" style="color: var(--text-primary);">{{ $profile['email'] }}</a></span>
                    <span>📞 {{ $profile['phone'] }}</span>
                    <span>📍 {{ $profile['location'] }}</span>
                    <span>🔗 <a href="{{ $profile['linkedin'] }}" target="_blank" style="color: var(--indigo-primary);">LinkedIn</a></span>
                    <span>🐙 <a href="{{ $profile['github'] }}" target="_blank" style="color: var(--indigo-primary);">GitHub</a></span>
                </div>
            </div>

            <!-- PROFIL -->
            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.15rem; text-transform: uppercase; color: var(--emerald-primary); border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.35rem; margin-bottom: 0.85rem; letter-spacing: 0.5px;">
                    Profil Ringkas
                </h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.75;">
                    {{ $profile['bio_summary'] }}
                </p>
            </div>

            <!-- PENDIDIKAN -->
            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.15rem; text-transform: uppercase; color: var(--emerald-primary); border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.35rem; margin-bottom: 0.85rem; letter-spacing: 0.5px;">
                    Pendidikan
                </h3>
                @foreach($education as $edu)
                <div style="margin-bottom: 1.25rem;">
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-size: 1rem;">
                        <span>{{ $edu['institution'] }}</span>
                        <span style="color: var(--text-muted); font-size: 0.9rem;">{{ $edu['period'] }}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--indigo-primary); font-weight: 600; margin-bottom: 0.35rem;">
                        <span>{{ $edu['degree'] }}</span>
                        <span style="color: var(--text-primary);">IPK: {{ $edu['gpa'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- PENGALAMAN KERJA / MAGANG -->
            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.15rem; text-transform: uppercase; color: var(--emerald-primary); border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.35rem; margin-bottom: 0.85rem; letter-spacing: 0.5px;">
                    Pengalaman Kerja & Magang
                </h3>
                @foreach($experience as $exp)
                <div style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-size: 1.05rem;">
                        <span>{{ $exp['company'] }}</span>
                        <span style="color: var(--text-muted); font-size: 0.875rem;">{{ $exp['period'] }}</span>
                    </div>
                    <div style="font-size: 0.95rem; font-weight: 600; color: var(--indigo-primary); margin-bottom: 0.5rem;">
                        {{ $exp['role'] }}
                    </div>
                    <ul style="list-style: disc; margin-left: 1.25rem; font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6;">
                        @foreach($exp['achievements'] as $ach)
                        <li>{{ $ach }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>

            <!-- PROYEK UTAMA -->
            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.15rem; text-transform: uppercase; color: var(--emerald-primary); border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.35rem; margin-bottom: 0.85rem; letter-spacing: 0.5px;">
                    Aktivitas & Proyek Terpilih
                </h3>
                @foreach(array_slice($projects, 0, 3) as $proj)
                <div style="margin-bottom: 1.25rem;">
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-size: 1rem;">
                        <span>&bull; {{ $proj['title'] }}</span>
                        <span style="color: var(--text-muted); font-size: 0.85rem;">{{ $proj['period'] }}</span>
                    </div>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); margin-left: 1rem; line-height: 1.6;">
                        {{ $proj['summary'] }}
                    </p>
                </div>
                @endforeach
            </div>

            <!-- SERTIFIKASI RESMI -->
            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.15rem; text-transform: uppercase; color: var(--emerald-primary); border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.35rem; margin-bottom: 0.85rem; letter-spacing: 0.5px;">
                    Sertifikat Pelatihan & Profesi
                </h3>
                @foreach($certifications as $c)
                <div style="margin-bottom: 0.85rem; display: flex; justify-content: space-between; align-items: baseline;">
                    <div>
                        <strong style="font-size: 0.95rem;">{{ $c['title'] }}</strong> &bull;
                        <span style="font-size: 0.85rem; color: var(--text-secondary);">{{ $c['issuer'] }}</span>
                    </div>
                    <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600;">{{ $c['date'] }}</span>
                </div>
                @endforeach
            </div>

            <!-- KEMAMPUAN TEKNIS & BAHASA -->
            <div>
                <h3 style="font-size: 1.15rem; text-transform: uppercase; color: var(--emerald-primary); border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.35rem; margin-bottom: 0.85rem; letter-spacing: 0.5px;">
                    Kemampuan & Keahlian
                </h3>
                <div style="font-size: 0.9rem; line-height: 1.8; color: var(--text-secondary);">
                    <div>
                        <strong style="color: var(--text-primary);">Bahasa:</strong> Bahasa Indonesia (Native), Bahasa Inggris (Menengah).
                    </div>
                    <div>
                        <strong style="color: var(--text-primary);">Bahasa Pemrograman & Query:</strong> Python, SQL (MySQL, PostgreSQL), Java, PHP (Laravel).
                    </div>
                    <div>
                        <strong style="color: var(--text-primary);">Tools & Platform:</strong> Google Colab, Tableau, Power BI, Spreadsheet / Excel, Firebase, Android Studio, Figma.
                    </div>
                    <div>
                        <strong style="color: var(--text-primary);">Keahlian Data:</strong> Data Cleaning, Exploratory Data Analysis (EDA), Predictive Modeling, Time Series Analysis, Data Validation.
                    </div>
                    <div>
                        <strong style="color: var(--text-primary);">Soft Skills:</strong> Problem Solving, Berpikir Analitis, Ketelitian Detail, Komunikasi Data.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
@media print {
    /* Hide non-printable UI elements */
    .navbar, .footer, .btn, .section-header, .theme-toggle-btn {
        display: none !important;
    }
    body {
        background: #ffffff !important;
        color: #000000 !important;
    }
    #resume-sheet {
        box-shadow: none !important;
        border: none !important;
        padding: 0 !important;
        max-width: 100% !important;
    }
}
</style>
@endpush
@endsection
