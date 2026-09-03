@extends('layouts.app')

@section('title', 'Tentang Saya — Khaerul Oktafiansyah')

@section('content')
<!-- Header Banner -->
<section class="section" style="padding-bottom: 2rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2rem;">
            <span class="section-tag">Profil Profesional</span>
            <h1 class="section-title">Tentang Saya</h1>
            <p class="section-desc">
                Mengenal lebih dekat latar belakang akademis, keahlian data, minat riset komputasi, dan sertifikasi resmi.
            </p>
        </div>
    </div>
</section>

<!-- Bio & Education Section -->
<section class="section" style="padding-top: 1rem;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: start; margin-bottom: 4rem;">
            <!-- Left: Bio & Vision -->
            <div>
                <h2 style="font-size: 1.85rem; margin-bottom: 1.25rem;">
                    Menghubungkan <span class="gradient-text">Data Mentah</span> Menjadi <span class="gradient-indigo">Keputusan Strategis</span>
                </h2>
                <p style="color: var(--text-secondary); margin-bottom: 1.25rem; font-size: 1.05rem; line-height: 1.75;">
                    Saya adalah mahasiswa tingkat akhir program studi <strong>Teknik Informatika di Universitas Pamulang</strong> dengan IPK <strong>3.77 / 4.00</strong> dan telah memegang sertifikasi kompetensi nasional <strong>BNSP Junior Data Analyst</strong>.
                </p>
                <p style="color: var(--text-secondary); margin-bottom: 1.25rem; font-size: 1rem; line-height: 1.75;">
                    Perjalanan saya di dunia teknologi berfokus pada dua pilar utama: <strong>Data Analytics & Machine Learning</strong> serta <strong>Software & Mobile Development</strong>. Pada proyek Tugas Akhir, saya merancang dan melatih model prediktif time-series menggunakan Python dan Google Colab untuk memprediksi harga saham PT Bank Central Asia Tbk (BBCA), dengan tingkat presisi tinggi (MAPE &lt; 2%).
                </p>
                <p style="color: var(--text-secondary); margin-bottom: 2rem; font-size: 1rem; line-height: 1.75;">
                    Selain kompetensi komputasi, saya memiliki pengalaman kerja praktek nyata dalam mengembangkan sistem digital <em>stock opname</em> inventaris gudang berbasis Android & Firebase di PT. Petra Sejahtera Abadi, serta perancangan antarmuka pengguna sistem UMKM di PT. Java Genius All Technology.
                </p>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="https://linkedin.com/in/khaerul-oktafiansyah" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                        Profil LinkedIn &rarr;
                    </a>
                    <a href="https://github.com/arul012" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        GitHub Repository &rarr;
                    </a>
                    <a href="{{ route('cv') }}" class="btn btn-indigo">
                        Unduh Resume Lengkap
                    </a>
                </div>
            </div>

            <!-- Right: Fast Info Card -->
            <div class="card">
                <h3 style="font-size: 1.25rem; margin-bottom: 1.25rem; border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.75rem;">
                    Data Ringkas
                </h3>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem; font-size: 0.95rem;">
                    <li>
                        <span style="color: var(--text-muted); font-size: 0.8rem; display: block; text-transform: uppercase;">Nama Lengkap</span>
                        <strong style="color: var(--text-primary);">Khaerul Oktafiansyah</strong>
                    </li>
                    <li>
                        <span style="color: var(--text-muted); font-size: 0.8rem; display: block; text-transform: uppercase;">Pendidikan Terakhir</span>
                        <strong style="color: var(--text-primary);">S1 Teknik Informatika — Universitas Pamulang (IPK 3.77)</strong>
                    </li>
                    <li>
                        <span style="color: var(--text-muted); font-size: 0.8rem; display: block; text-transform: uppercase;">Sertifikasi Utama</span>
                        <strong style="color: var(--emerald-primary);">BNSP Junior Data Analyst (2025)</strong>
                    </li>
                    <li>
                        <span style="color: var(--text-muted); font-size: 0.8rem; display: block; text-transform: uppercase;">Minat Karir</span>
                        <span>Junior Data Analyst, Machine Learning Enthusiast, Software/Android Developer</span>
                    </li>
                    <li>
                        <span style="color: var(--text-muted); font-size: 0.8rem; display: block; text-transform: uppercase;">Domisili</span>
                        <span>Tangerang Selatan, Banten, Indonesia</span>
                    </li>
                    <li>
                        <span style="color: var(--text-muted); font-size: 0.8rem; display: block; text-transform: uppercase;">Status Ketersediaan</span>
                        <span class="badge badge-emerald">Siap Bekerja Segera (Open to Work)</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Riwayat Pendidikan -->
        <div style="margin-bottom: 4.5rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                <span class="section-tag">Jejak Akademis</span>
                <h2 class="section-title">Riwayat Pendidikan</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                @foreach($education as $edu)
                <div class="card" style="border-left: 4px solid var(--emerald-primary);">
                    <span class="badge badge-emerald" style="margin-bottom: 0.75rem;">{{ $edu['period'] }}</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 0.35rem;">{{ $edu['institution'] }}</h3>
                    <p style="font-weight: 600; color: var(--indigo-primary); font-size: 1rem; margin-bottom: 0.5rem;">
                        {{ $edu['degree'] }}
                    </p>
                    <p style="font-size: 0.9rem; font-weight: 700; color: var(--text-primary); margin-bottom: 1rem;">
                        Prestasi: {{ $edu['gpa'] }} &bull; Status: {{ $edu['status'] }}
                    </p>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.9rem; color: var(--text-secondary);">
                        @foreach($edu['highlights'] as $hl)
                        <li style="position: relative; padding-left: 1.25rem;">
                            <span style="position: absolute; left: 0; color: var(--emerald-primary);">&bull;</span>
                            {{ $hl }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Skills Matrix -->
        <div style="margin-bottom: 4.5rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                <span class="section-tag">Keahlian & Kompetensi</span>
                <h2 class="section-title">Skill Matrix</h2>
                <p class="section-desc">Instrumen dan bahasa pemrograman yang saya gunakan dalam analisis data dan rekayasa perangkat lunak.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <!-- Programming & Query -->
                <div class="card">
                    <h3 style="font-size: 1.2rem; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span>💻</span> Bahasa Pemrograman & Query
                    </h3>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        @foreach($skills['Programming & Query'] as $item)
                        <div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.35rem;">
                                <span>{{ $item['name'] }}</span>
                                <span style="color: var(--emerald-primary);">{{ $item['percent'] }}%</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: var(--bg-surface-elevated); border-radius: 999px; overflow: hidden;">
                                <div style="width: {{ $item['percent'] }}%; height: 100%; background: linear-gradient(90deg, var(--emerald-primary), var(--indigo-primary)); border-radius: 999px;"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tools & Platform Data -->
                <div class="card">
                    <h3 style="font-size: 1.2rem; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span>📊</span> Tools & Platform Analisis Data
                    </h3>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        @foreach($skills['Data Analytics & BI'] as $item)
                        <div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.35rem;">
                                <span>{{ $item['name'] }}</span>
                                <span style="color: var(--indigo-primary);">{{ $item['percent'] }}%</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: var(--bg-surface-elevated); border-radius: 999px; overflow: hidden;">
                                <div style="width: {{ $item['percent'] }}%; height: 100%; background: linear-gradient(90deg, var(--indigo-primary), #38bdf8); border-radius: 999px;"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Keahlian Data & Soft Skills -->
                <div class="card">
                    <h3 style="font-size: 1.2rem; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span>🧠</span> Keahlian Data & Soft Skills
                    </h3>
                    <div style="margin-bottom: 1.25rem;">
                        <h4 style="font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase; margin-bottom: 0.65rem;">Data Expertise</h4>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem;">
                            @foreach($skills['Data Science Competencies'] as $dsc)
                            <span class="badge badge-emerald">{{ $dsc['name'] }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4 style="font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase; margin-bottom: 0.65rem;">Interpersonal & Soft Skills</h4>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem;">
                            @foreach($skills['Soft Skills'] as $soft)
                            <span class="badge badge-indigo">{{ $soft }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sertifikat Pelatihan Resmi -->
        <div>
            <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                <span class="section-tag">Pengakuan Kompetensi</span>
                <h2 class="section-title">Sertifikat Pelatihan & Profesi</h2>
                <p class="section-desc">Sertifikasi kompetensi resmi dari Badan Nasional Sertifikasi Profesi (BNSP), Kominfo, dan Dicoding Indonesia.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem;">
                @foreach($certifications as $cert)
                <div class="card">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.75rem;">
                        <span class="badge badge-emerald">{{ $cert['badge'] }}</span>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">{{ $cert['date'] }}</span>
                    </div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.35rem;">{{ $cert['title'] }}</h3>
                    <p style="font-size: 0.85rem; font-weight: 600; color: var(--indigo-primary); margin-bottom: 0.75rem;">
                        {{ $cert['issuer'] }}
                    </p>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6;">
                        {{ $cert['description'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
