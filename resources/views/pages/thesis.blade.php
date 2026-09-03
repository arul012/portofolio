@extends('layouts.app')

@section('title', 'Tugas Akhir: Prediksi Harga Saham BBCA — Khaerul Oktafiansyah')

@section('content')
<!-- Hidden element containing JSON data for Chart.js -->
<script id="thesis-chart-data" type="application/json">
    {!! json_encode($thesis['chart_data']) !!}
</script>

<!-- Header Section -->
<section class="section" style="padding-bottom: 2rem;">
    <div class="container">
        <div class="section-header" style="max-width: 850px;">
            <span class="section-tag">Skripsi & Riset Akademik</span>
            <h1 class="section-title" style="font-size: 2.5rem; line-height: 1.25;">
                {{ $thesis['title'] }}
            </h1>
            <p class="section-desc">
                {{ $thesis['advisor'] }} &bull; Periode: {{ $thesis['period'] }}
            </p>
        </div>
    </div>
</section>

<!-- Abstract & Executive Overview -->
<section class="section" style="padding-top: 1rem; padding-bottom: 3rem;">
    <div class="container">
        <div class="thesis-hero-card">
            <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--emerald-primary);">
                Abstrak & Latar Belakang Riset
            </h2>
            <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.8; margin-bottom: 2rem;">
                {{ $thesis['abstract'] }}
            </p>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ $thesis['colab_link'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                    Buka Google Colab Notebook
                </a>
                <a href="#visualisasi" class="btn btn-indigo">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                    Lihat Grafik Prediksi
                </a>
                <a href="{{ route('contact') }}" class="btn btn-secondary">
                    Ajukan Diskusi / Paper
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Research Objectives -->
<section class="section" style="background: var(--bg-surface-elevated); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header" style="text-align: left; margin-bottom: 2.5rem;">
            <span class="section-tag">Tujuan Penelitian</span>
            <h2 class="section-title">Sasaran Utama Riset</h2>
            <p class="section-desc">Target komputasional dan pemodelan prediktif yang dicapai dalam penyusunan tugas akhir.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
            @foreach($thesis['objectives'] as $index => $obj)
            <div class="card" style="position: relative; overflow: hidden;">
                <span style="font-size: 2.5rem; font-weight: 800; color: rgba(16, 185, 129, 0.15); position: absolute; top: 10px; right: 15px;">
                    0{{ $index + 1 }}
                </span>
                <h3 style="font-size: 1.1rem; margin-bottom: 0.75rem; color: var(--text-primary); position: relative;">
                    Fokus {{ $index + 1 }}
                </h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; position: relative;">
                    {{ $obj }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Methodology Pipeline Stepper -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Alur Komputasi</span>
            <h2 class="section-title">Metodologi Data Science End-to-End</h2>
            <p class="section-desc">Tahapan sistematis pemrosesan data historis dari akuisisi hingga evaluasi akurasi model.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 1.5rem;">
            @foreach($thesis['methodology'] as $step)
            <div class="card" style="border-top: 4px solid var(--emerald-primary);">
                <div style="width: 2.5rem; height: 2.5rem; border-radius: var(--radius-sm); background: rgba(16, 185, 129, 0.15); color: var(--emerald-primary); font-weight: 800; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; font-family: var(--font-heading);">
                    {{ $step['step'] }}
                </div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;">{{ $step['name'] }}</h3>
                <p style="font-size: 0.875rem; color: var(--text-secondary); line-height: 1.6;">
                    {{ $step['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Interactive Visualization Section -->
<section class="section" id="visualisasi" style="background: var(--bg-surface-elevated); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Visualisasi Interaktif</span>
            <h2 class="section-title">Hasil Prediksi Harga Saham BBCA</h2>
            <p class="section-desc">Perbandingan time series antara harga penutupan aktual (Close Price) vs hasil inferensi model Machine Learning pada 30 sampel pengujian.</p>
        </div>

        <!-- Chart Container Card -->
        <div class="chart-container-card">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid var(--border-subtle);">
                <div>
                    <h3 style="font-size: 1.25rem;">Tren Harga Saham BBCA (Aktual vs Prediksi)</h3>
                    <p style="font-size: 0.85rem; color: var(--text-muted);">Satuan: Rupiah (IDR) &bull; Horizon Waktu: Time Series Daily</p>
                </div>
                <div style="display: flex; gap: 0.5rem;">
                    <span class="badge badge-emerald">Aktual: Hijau</span>
                    <span class="badge badge-indigo">Prediksi ML: Ungu Putus-putus</span>
                </div>
            </div>

            <!-- Canvas for Chart.js -->
            <div class="chart-wrapper">
                <canvas id="bbcaChart"></canvas>
            </div>
        </div>

        <!-- Quantitative Evaluation Metrics Grid -->
        <div class="section-header" style="margin-top: 4rem; margin-bottom: 2rem;">
            <span class="section-tag">Tolok Ukur Evaluasi</span>
            <h3 class="section-title" style="font-size: 1.85rem;">Hasil Evaluasi Kinerja Model</h3>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
            @foreach($thesis['evaluation_metrics'] as $metric)
            <div class="card metric-box" style="text-align: left; background: var(--bg-surface);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                    <span style="font-size: 0.8rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">
                        Metrik Akurasi
                    </span>
                    <span class="badge badge-emerald">Terverifikasi</span>
                </div>
                <h4 style="font-size: 2.2rem; margin-bottom: 0.25rem; color: var(--emerald-primary);">
                    {{ $metric['value'] }}
                </h4>
                <p style="font-size: 0.95rem; font-weight: 700; color: var(--text-primary); margin-bottom: 0.35rem;">
                    {{ $metric['metric'] }}
                </p>
                <span style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.5;">
                    {{ $metric['desc'] }}
                </span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Paper & Presentation Links -->
<section class="section">
    <div class="container" style="max-width: 800px; text-align: center;">
        <span class="section-tag">Dokumentasi Ilmiah</span>
        <h2 class="section-title" style="margin-top: 0.5rem;">Laporan Skripsi & Materi Paparan</h2>
        <p class="section-desc" style="margin-bottom: 2.5rem;">
            Dokumen skripsi lengkap, draft naskah publikasi, dan slide presentasi sidang tugas akhir dapat diakses untuk keperluan verifikasi akademik.
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem;">
            <div class="card" style="text-align: center; padding: 2rem 1.5rem;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">📄</div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;">Laporan Skripsi</h3>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 1.25rem;">Format PDF Dokumen Lengkap</p>
                <a href="{{ route('cv') }}" class="btn btn-sm btn-primary">Unduh Naskah</a>
            </div>

            <div class="card" style="text-align: center; padding: 2rem 1.5rem;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">📊</div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;">Slide Presentasi</h3>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 1.25rem;">Slide Sidang Tugas Akhir</p>
                <a href="{{ route('cv') }}" class="btn btn-sm btn-secondary">Lihat Paparan</a>
            </div>

            <div class="card" style="text-align: center; padding: 2rem 1.5rem;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">💻</div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.5rem;">Google Colab</h3>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 1.25rem;">Jupyter Notebook Code</p>
                <a href="{{ $thesis['colab_link'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-indigo">Buka Kode</a>
            </div>
        </div>
    </div>
</section>
@endsection
