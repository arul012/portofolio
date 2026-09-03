@extends('layouts.app')

@section('title', 'Hubungi Saya — Khaerul Oktafiansyah')

@section('content')
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Komunikasi & Kolaborasi</span>
            <h1 class="section-title">Hubungi Saya</h1>
            <p class="section-desc">
                Apakah Anda memiliki lowongan posisi, proyek data analytics, atau ingin berdiskusi mengenai riset machine learning? Jangan ragu untuk mengirim pesan.
            </p>
        </div>

        <!-- Notification Alerts -->
        @if(session('success'))
        <div style="max-width: 900px; margin: 0 auto 2rem; padding: 1rem 1.5rem; background: rgba(16, 185, 129, 0.15); border: 1px solid var(--emerald-primary); border-radius: var(--radius-md); color: var(--emerald-primary); font-weight: 600;">
            ✓ {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div style="max-width: 900px; margin: 0 auto 2rem; padding: 1rem 1.5rem; background: rgba(239, 68, 68, 0.15); border: 1px solid #ef4444; border-radius: var(--radius-md); color: #ef4444; font-weight: 600;">
            ✕ {{ session('error') }}
        </div>
        @endif

        <div class="contact-grid">
            <!-- Left: Direct Contact Information -->
            <div>
                <h2 style="font-size: 1.65rem; margin-bottom: 1.25rem;">Saluran Komunikasi Langsung</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem; line-height: 1.7;">
                    Anda dapat menghubungi saya secara instan melalui kontak di bawah ini. Saya biasanya merespons dalam waktu kurang dari 24 jam.
                </p>

                <!-- Contact Item 1: Email -->
                <a href="mailto:{{ $profile['email'] }}" class="contact-card-item">
                    <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div>
                        <span style="font-size: 0.8rem; color: var(--text-muted); display: block; text-transform: uppercase;">Email Utama</span>
                        <strong style="color: var(--text-primary); font-size: 0.95rem;">{{ $profile['email'] }}</strong>
                    </div>
                </a>

                <!-- Contact Item 2: WhatsApp -->
                <a href="{{ $profile['whatsapp_link'] }}" target="_blank" rel="noopener noreferrer" class="contact-card-item">
                    <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                    </div>
                    <div>
                        <span style="font-size: 0.8rem; color: var(--text-muted); display: block; text-transform: uppercase;">WhatsApp / Telepon</span>
                        <strong style="color: var(--text-primary); font-size: 0.95rem;">{{ $profile['phone'] }}</strong>
                    </div>
                </a>

                <!-- Contact Item 3: LinkedIn -->
                <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="contact-card-item">
                    <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </div>
                    <div>
                        <span style="font-size: 0.8rem; color: var(--text-muted); display: block; text-transform: uppercase;">Jejaring Profesional</span>
                        <strong style="color: var(--text-primary); font-size: 0.95rem;">linkedin.com/in/khaerul-oktafiansyah</strong>
                    </div>
                </a>

                <!-- Contact Item 4: GitHub -->
                <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="contact-card-item">
                    <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                        </svg>
                    </div>
                    <div>
                        <span style="font-size: 0.8rem; color: var(--text-muted); display: block; text-transform: uppercase;">Source Code Repository</span>
                        <strong style="color: var(--text-primary); font-size: 0.95rem;">github.com/arul012</strong>
                    </div>
                </a>

                <!-- Contact Item 5: Location -->
                <div class="contact-card-item">
                    <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div>
                        <span style="font-size: 0.8rem; color: var(--text-muted); display: block; text-transform: uppercase;">Lokasi Tinggal</span>
                        <strong style="color: var(--text-primary); font-size: 0.95rem;">{{ $profile['location'] }}</strong>
                    </div>
                </div>
            </div>

            <!-- Right: Interactive Contact Form with Anti-Spam Protection -->
            <div class="card">
                <h3 style="font-size: 1.45rem; margin-bottom: 0.5rem;">Kirim Pesan Langsung</h3>
                <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 1.75rem;">
                    Formulir ini dilengkapi proteksi anti-spam honeypot dan validasi data.
                </p>

                <form action="{{ route('contact.send') }}" method="POST" id="contact-form">
                    @csrf

                    <!-- Honeypot Anti-Spam Field (Hidden from real users, bots will fill it) -->
                    <div style="display: none !important;" aria-hidden="true">
                        <label for="_gotcha">Jangan isi field ini:</label>
                        <input type="text" name="_gotcha" id="_gotcha" tabindex="-1" autocomplete="off">
                    </div>

                    <!-- Input: Name -->
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Lengkap *</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
                    </div>

                    <!-- Input: Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">Alamat Email *</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="nama@email.com" required>
                    </div>

                    <!-- Input: Subject -->
                    <div class="form-group">
                        <label for="subject" class="form-label">Subjek Pesan *</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Contoh: Tawaran Pekerjaan Junior Data Analyst" required>
                    </div>

                    <!-- Input: Message -->
                    <div class="form-group">
                        <label for="message" class="form-label">Isi Pesan *</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Tuliskan pesan, rincian tawaran, atau pertanyaan Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
