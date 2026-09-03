# Product Requirement Document (PRD)
## Personal Portfolio Website — Khaerul Oktafiansyah

**Version:** 1.0.0  
**Author:** Khaerul Oktafiansyah  
**Role:** Final-Year Computer Science Student (Teknik Informatika) & Certified BNSP Junior Data Analyst  
**Institution:** Universitas Pamulang (IPK: 3.77 / 4.00)  
**Target Environment:** PHP 8.2+ / Laravel Framework + Static Export for GitHub Pages  

---

## 1. Executive Summary & Vision

### 1.1 Objective
Mengonversi portofolio berbasis PDF menjadi aplikasi web portofolio profesional, elegan, berkinerja tinggi, dan terstruktur berbasis **PHP Laravel**. Website ini dirancang untuk menampilkan kompetensi di bidang **Data Analytics / Machine Learning** serta **Software & Mobile Development**, dengan sorotan khusus pada proyek Tugas Akhir (Pemodelan Prediksi Harga Saham BBCA).

### 1.2 Core Target Audiences
1. **Tech Recruiters & HR Specialists**: Membutuhkan pemindaian cepat atas profil, riwayat pendidikan, IPK, keahlian teknis, sertifikasi resmi (BNSP/Kominfo), dan akses unduh CV PDF instan.
2. **Data Science / Engineering Leads & Hiring Managers**: Membutuhkan validasi kemampuan berpikir komputasional, alur metodologi data pada Tugas Akhir, kode sumber di GitHub, dan arsitektur proyek nyata.
3. **Dosen Penguji & Akademisi**: Memeriksa kelengkapan dokumentasi Tugas Akhir, hasil evaluasi model, dan kontribusi riset.

---

## 2. Technical Stack & Architectural Constraints

### 2.1 Technology Matrix
| Layer | Technology | Justification / Notes |
| :--- | :--- | :--- |
| **Backend / Framework** | PHP 8.2+ / Laravel 11/12 | Kerangka kerja MVC standar industri, templating Blade modular, routing terstruktur. |
| **Data Architecture** | Dedicated Service Repository (`PortfolioData.php`) | Menyimpan data terstruktur (Profil, Pengalaman, Proyek, Skripsi) dalam format data PHP/JSON murni tanpa ketergantungan koneksi MySQL yang berat, memungkinkan eksekusi ultra-cepat dan ekspor statis instan. |
| **Frontend Layout & Styling** | Vanilla CSS Modern Design System | Desain kustom elegan, glassmorphism, variabel CSS untuk Light/Dark mode, animasi mikro, tanpa dependensi framework CSS yang berat. |
| **Visualisasi Data** | Chart.js via CDN | Menampilkan grafik time-series interaktif untuk Tugas Akhir prediksi harga saham BBCA (Aktual vs Prediksi). |
| **Theme Engine** | Modern CSS (`color-scheme`) + JS `localStorage` | Zero-FOUC (Flash of Unstyled Content), mendukung preferensi sistem otomatis dan manual toggle. |
| **Anti-Spam & Contact** | Honeypot Field + Web3Forms / Formspree Fallback | Mengamankan form dari bot pengirim spam, sekaligus bekerja 100% pada deployment statis maupun dinamis. |
| **Deployment Target** | GitHub Pages (Free Hosting) | Menggunakan custom Artisan command `php artisan portfolio:export` dan GitHub Actions CI/CD. |

---

## 3. Information Architecture & Sitemap

```
/ (Home / Beranda)
├── /about (Tentang Saya, Pendidikan, Skill Matrix, Sertifikasi)
├── /projects (Katalog Proyek dengan Filter Tipe)
├── /thesis (Halaman Spesifik Tugas Akhir: Prediksi Saham BBCA + Visualisasi Data)
├── /experience (Timeline Pengalaman Kerja, Magang, & Pengajaran)
├── /cv (Tampilan Digital Resume + Tombol Unduh PDF)
└── /contact (Formulir Kontak Anti-Spam + Direct Links)
```

---

## 4. Master Data Schemas (Anti-Halusinasi / Ground Truth)

> [!CRITICAL]
> **Petunjuk Ketat untuk Model AI**: Data berikut adalah fakta resmi dari resume Khaerul Oktafiansyah. Dilarang mengubah nama instansi, angka IPK, atau mengarang proyek palsu.

### 4.1 Biodata Pribadi
- **Nama Lengkap:** Khaerul Oktafiansyah
- **Email:** `khaeruloktafiansyah04@gmail.com`
- **Telepon / WhatsApp:** `+62 815-7317-9872`
- **Lokasi:** Tangerang Selatan, Banten, Indonesia
- **LinkedIn:** `linkedin.com/in/khaerul-oktafiansyah`
- **Pendidikan Utama:**
  - **Universitas Pamulang** (Sep 2022 – Okt 2026 / Semester 8)
    - Program Studi: S1 Teknik Informatika
    - IPK: **3.77 / 4.00**
  - **SMK Negeri 1 Kedawung** (2019 – 2022)
    - Jurusan: Multimedia | Rata-rata Nilai: 83.73 / 100

### 4.2 Sertifikasi Resmi (Certifications)
1. **BNSP Junior Data Analyst** (Okt 2025) - Badan Nasional Sertifikasi Profesi. Uji kompetensi pengumpulan, validasi data, dan ekstraksi insight data real-case.
2. **BNSP Junior Mobile Programmer** (Juni 2023 – Juli 2023) - Program Pelatihan Kominfo VSGA (Vocational School Graduate Academy) 90 Jam Pelatihan.
3. **Dicoding Indonesia**:
   - Memulai Pemrograman dengan Java (Des 2022)
   - Memulai Pemrograman dengan C (Sep 2022)
   - Meniti Karir Sebagai Software Developer (Sep 2022)
   - Pengenalan Data pada Pemrograman (Sep 2022)
   - Pengenalan ke Logika Pemrograman (Agu 2022)

### 4.3 Riwayat Pengalaman (Experience)
1. **PT. Petra Sejahtera Abadi** (Maret 2025 – Juni 2025)
   - **Peran:** Software Developer / Anggota Tim Pengembang Aplikasi (Kerja Praktek)
   - **Tanggung Jawab & Dampak:**
     - Mengimplementasikan metode *prototype* untuk merancang dan membangun sistem *stock opname* gudang berbasis Android.
     - Mengotomatisasi pencatatan stok barang dari manual berbasis kartu stok menjadi digital terpusat dengan Firebase.
     - Menggunakan Android Studio dan Java.
2. **PT. Java Genius All Technology** (Agu 2021 – Okt 2021)
   - **Peran 1: User Interface Designer**
     - Berperan dalam tim 6 orang untuk mendesain UI/UX website, *wireframing*, dan *mockup*.
     - Menyelesaikan 37 tampilan halaman website Pembukuan & Manajemen Produksi UMKM menggunakan Figma.
   - **Peran 2: Instruktur Motion Graphic**
     - Melatih 7 siswa ekstrakurikuler multimedia di SMK Sima Bangsa dalam materi dasar motion graphic dengan Adobe After Effects.

### 4.4 Portofolio Proyek (Projects)
1. **Pemodelan Prediksi Harga Saham BBCA (Tugas Akhir / Skripsi)** (Okt 2025 – Sep 2026)
   - **Kategori:** Tugas Akhir / Machine Learning
   - **Stack:** Python, Google Colab, Scikit-Learn, TensorFlow/Keras, Pandas, Matplotlib
   - **Peran:** Lead Researcher & Data Scientist
   - **Ringkasan:** Pelatihan model Machine Learning time-series untuk memprediksi harga saham PT Bank Central Asia Tbk (BBCA) menggunakan tahapan data cleaning, feature engineering lag-price, moving averages, dan evaluasi akurasi metrik.
2. **Pengembangan Aplikasi Stock Opname Gudang Berbasis Android** (Juni 2025)
   - **Kategori:** Magang / Mobile App
   - **Stack:** Java, Android Studio, Firebase Realtime Database
   - **Peran:** Android Developer
   - **Ringkasan:** Aplikasi mobile inventaris gudang yang menggantikan kartu stok fisik, mempercepat audit stok dan meminimalisasi kehilangan barang.
3. **Aplikasi Kehadiran Siswa** (Juni 2023)
   - **Kategori:** Personal / Mobile App
   - **Stack:** Java, Android Studio, SQLite
   - **Peran:** Mobile Developer
   - **Ringkasan:** Aplikasi presensi berbasis Android dengan fungsionalitas CRUD lengkap untuk mengelola absensi kelas harian.
4. **Game Puzzle Huruf** (Juli 2023)
   - **Kategori:** Pelatihan / Game Edukasi
   - **Stack:** Java, Android Studio
   - **Ringkasan:** Permainan susun huruf interaktif untuk melatih logika dan pemecahan masalah kata.
5. **Desain UI Website Pembukuan & Manajemen UMKM** (Okt 2021)
   - **Kategori:** Magang / UI/UX Design
   - **Stack:** Figma, Prototyping
   - **Ringkasan:** Desain komprehensif 37 layar navigasi sistem manajemen keuangan dan inventaris UMKM.

---

## 5. UI/UX Design System & Specifications

### 5.1 Color Tokens
- **Theme Support:** Dual Mode (Dark Mode Default + Clean Light Mode).
- **Dark Mode Palette:**
  - Background Primary: `#0b0f19` (Deep Obsidian Slate)
  - Card / Surface: `#111827` (Rich Gray Surface with subtle border `#1f2937`)
  - Accent Primary: `#10b981` (Vibrant Emerald Data Accent)
  - Accent Secondary: `#6366f1` (Tech Indigo)
  - Text Primary: `#f9fafb`
  - Text Secondary: `#9ca3af`
- **Light Mode Palette:**
  - Background Primary: `#f8fafc` (Soft Snow White)
  - Card / Surface: `#ffffff` (Pure White with border `#e2e8f0`)
  - Accent Primary: `#059669` (Forest Emerald)
  - Accent Secondary: `#4f46e5` (Deep Indigo)
  - Text Primary: `#0f172a`
  - Text Secondary: `#475569`

### 5.2 Typography
- **Headings & Brand:** `'Outfit', sans-serif`
- **Body & Captions:** `'Plus Jakarta Sans', sans-serif`
- **Code & Tech Tags:** `'Fira Code', 'Courier New', monospace`

### 5.3 Anti-FOUC Implementation Rule
Setiap halaman wajib menyertakan script inline di dalam `<head>` sebelum stylesheet memuat:
```html
<script>
  (function() {
    const saved = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if (saved === 'dark' || (!saved && prefersDark)) {
      document.documentElement.classList.add('dark');
      document.documentElement.style.colorScheme = 'dark';
    } else {
      document.documentElement.classList.remove('dark');
      document.documentElement.style.colorScheme = 'light';
    }
  })();
</script>
```

---

## 6. Detailed Feature Specifications

### 6.1 Feature: Visualisasi Interaktif Tugas Akhir (BBCA Stock Prediction)
- **Komponen:** Canvas Chart.js interaktif.
- **Data Series:**
  1. Data Historis / Harga Aktual (Close Price) Saham BBCA.
  2. Data Hasil Prediksi Model Time-Series (Machine Learning).
- **Stat Cards:**
  - **MAE (Mean Absolute Error):** Nilai deviasi rendah (~Rp 85.40).
  - **RMSE (Root Mean Squared Error):** Mengukur dispersi galat model (~Rp 112.20).
  - **MAPE (Mean Absolute Percentage Error):** Tingkat presisi sangat tinggi (< 1.8%).
- **Interactive Action:** Toggle switch untuk melihat perbandingan tren harga 30 hari terakhir.

### 6.2 Feature: Filter Kategori Proyek
- Menggunakan JavaScript vanilla tanpa reload halaman.
- Tombol kategori: `Semua`, `Tugas Akhir`, `Magang`, `Mobile App`, `Data Science`, `UI/UX`.
- Transisi animasi fade dan re-layout yang halus.

### 6.3 Feature: Formulir Kontak & Anti-Spam
- **Honeypot Protection:** Input tersembunyi `<input type="text" name="_gotcha" style="display:none">`. Jika terisi, pengiriman dianggap bot.
- **Dual Support:** Berjalan melalui controller Laravel (`/contact/send`) saat di server PHP dinamis, dan otomatis beralih ke form endpoint Web3Forms/Formspree/Mailto saat dalam mode statis di GitHub Pages.

---

## 7. Blueprint Hosting Gratis di GitHub Pages

### 7.1 Konsep Arsitektur Static Export
GitHub Pages tidak mengeksekusi PHP runtime secara live. Oleh karena itu, kita membuat artisan command:
```bash
php artisan portfolio:export
```
**Mekanisme:**
1. Menjalankan crawler lokal ke seluruh route terdaftar (`/`, `/about`, `/projects`, `/thesis`, `/experience`, `/cv`, `/contact`).
2. Menyimpan setiap halaman hasil render Blade menjadi file statis:
   - `dist/index.html`
   - `dist/about/index.html`
   - `dist/projects/index.html`
   - `dist/thesis/index.html`
   - `dist/experience/index.html`
   - `dist/cv/index.html`
   - `dist/contact/index.html`
3. Menyalin seluruh aset publik (`css/`, `js/`, `images/`, `pdf/`) ke dalam `dist/`.
4. Membuat file `dist/.nojekyll` agar GitHub Pages tidak mengabaikan folder aset.
5. Menyediakan `dist/404.html` untuk navigasi yang mulus.

### 7.2 GitHub Actions Automated Deployment
File `.github/workflows/deploy.yml` dikonfigurasi untuk:
1. Trigger otomatis saat ada `git push origin main`.
2. Menyiapkan environment PHP 8.2 dan Node.js.
3. Menjalankan `composer install --no-dev`.
4. Menjalankan `php artisan portfolio:export`.
5. Mempublikasikan folder `dist/` ke branch `gh-pages` secara otomatis dan gratis.

---

## 8. Verification & Acceptance Criteria

| ID | Item Uji | Kriteria Sukses |
| :--- | :--- | :--- |
| **AC-01** | Routing Halaman | Semua 7 halaman utama dapat diakses tanpa error 404/500. |
| **AC-02** | Dark/Light Mode | Beralih tema dalam 1 klik, tersimpan di `localStorage`, tidak berkedip saat refresh. |
| **AC-03** | Visualisasi Skripsi | Grafik Chart.js merender garis harga aktual vs prediksi BBCA dengan tooltip interaktif. |
| **AC-04** | Filter Proyek | Filter kategori menyaring kartu proyek secara real-time tanpa refresh. |
| **AC-05** | Unduh CV | Tombol unduh CV mengarahkan ke file PDF resume. |
| **AC-06** | Form Kontak | Memiliki validasi input, honeypot anti-spam, dan integrasi fallback. |
| **AC-07** | Static Export | Perintah `php artisan portfolio:export` menghasilkan folder `dist/` lengkap dan valid. |
