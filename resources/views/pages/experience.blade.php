@extends('layouts.app')

@section('title', 'Riwayat Pengalaman — Khaerul Oktafiansyah')

@section('content')
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Jejak Profesional</span>
            <h1 class="section-title">Riwayat Pengalaman</h1>
            <p class="section-desc">
                Pengalaman kerja praktek, magang industri, rekayasa aplikasi Android, perancangan antarmuka pengguna (UI), dan pengajaran materi teknis.
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="timeline">
            @foreach($experiences as $exp)
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 0.35rem;">
                        <span class="timeline-period">{{ $exp['period'] }}</span>
                        <span class="badge badge-emerald">{{ $exp['type'] }}</span>
                    </div>

                    <h2 class="timeline-title">{{ $exp['role'] }}</h2>
                    <h3 class="timeline-company">{{ $exp['company'] }} &bull; <span style="font-size: 0.9rem; color: var(--text-muted); font-weight: normal;">{{ $exp['location'] }}</span></h3>

                    <p style="color: var(--text-secondary); margin-bottom: 1.25rem; font-size: 0.975rem; line-height: 1.65;">
                        {{ $exp['description'] }}
                    </p>

                    <h4 style="font-size: 0.9rem; text-transform: uppercase; color: var(--text-muted); letter-spacing: 0.5px; margin-bottom: 0.75rem;">
                        Tanggung Jawab & Pencapaian Terukur:
                    </h4>

                    <ul class="timeline-list">
                        @foreach($exp['achievements'] as $ach)
                        <li>{{ $ach }}</li>
                        @endforeach
                    </ul>

                    <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; padding-top: 1rem; border-top: 1px solid var(--border-subtle);">
                        @foreach($exp['tech_stack'] as $t)
                        <span class="badge badge-indigo">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('cv') }}" class="btn btn-primary">
                Lihat Format Resume Lengkap (CV) &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
