@extends('layouts.app')

@section('title', 'Katalog Proyek — Khaerul Oktafiansyah')

@section('content')
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Portofolio & Rekayasa</span>
            <h1 class="section-title">Katalog Proyek</h1>
            <p class="section-desc">
                Daftar proyek nyata mencakup pemodelan prediktif Machine Learning, aplikasi mobile Android terpusat, dan perancangan antarmuka pengguna digital.
            </p>
        </div>

        <!-- Filter Categories Tabs -->
        <div class="project-filters">
            <button class="filter-btn active" data-filter="all">Semua Proyek ({{ count($projects) }})</button>
            <button class="filter-btn" data-filter="tugas-akhir">Tugas Akhir / Skripsi</button>
            <button class="filter-btn" data-filter="magang">Magang / Kerja Praktek</button>
            <button class="filter-btn" data-filter="personal">Personal & Akademik</button>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid" id="projects-container">
            @foreach($projects as $project)
            <div class="card project-card project-card-item" data-category="{{ $project['category_slug'] }}">
                <div class="project-thumbnail">
                    <span class="project-type-chip">{{ $project['type_badge'] }}</span>
                    <!-- Thumbnail Graphic -->
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
                    <h2 class="project-title" style="font-size: 1.35rem;">{{ $project['title'] }}</h2>
                    <p style="font-size: 0.825rem; color: var(--indigo-primary); font-weight: 600; margin-bottom: 0.5rem;">
                        Peran: {{ $project['role'] }}
                    </p>
                </div>

                <p class="project-summary">
                    {{ $project['description'] }}
                </p>

                <!-- Quantitative Metrics Box if available -->
                @if(!empty($project['metrics']))
                <div style="background: var(--bg-surface-elevated); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 0.75rem 1rem; margin-bottom: 1.25rem;">
                    @foreach($project['metrics'] as $m)
                    <div style="display: flex; justify-content: space-between; font-size: 0.8rem; margin-bottom: 0.25rem;">
                        <span style="color: var(--text-secondary);">{{ $m['name'] }}:</span>
                        <strong style="color: var(--emerald-primary);">{{ $m['value'] }}</strong>
                    </div>
                    @endforeach
                </div>
                @endif

                <div class="project-tags">
                    @foreach($project['tech_stack'] as $tech)
                    <span class="badge">{{ $tech }}</span>
                    @endforeach
                </div>

                <div class="project-footer">
                    @if($project['has_dedicated_page'])
                    <a href="{{ route('thesis') }}" class="btn btn-sm btn-primary">
                        Halaman Skripsi &rarr;
                    </a>
                    @else
                    <span class="badge badge-emerald">Dokumentasi Teruji</span>
                    @endif

                    <div style="display: flex; gap: 0.5rem;">
                        @if(!empty($project['repo_url']))
                        <a href="{{ $project['repo_url'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-secondary" aria-label="GitHub Repo">
                            GitHub
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
