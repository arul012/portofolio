# Portofolio Web Profesional — Khaerul Oktafiansyah

Website portofolio profesional berbasis **PHP Laravel** dengan antarmuka modern, sistem tema **Dark & Light Mode**, visualisasi data interaktif Tugas Akhir (**Pemodelan Prediksi Harga Saham BBCA** menggunakan Chart.js), filter katalog proyek, resume digital, dan formulir kontak anti-spam.

Dilengkapi dengan **Artisan Static Exporter** dan **GitHub Actions CI/CD** agar dapat di-hosting secara **100% GRATIS di GitHub Pages**.

---

## 👨‍💻 Profil Singkat
- **Nama:** Khaerul Oktafiansyah
- **Pendidikan:** S1 Teknik Informatika — Universitas Pamulang (IPK: **3.77 / 4.00**)
- **Kompetensi:** **BNSP Junior Data Analyst** & **BNSP Junior Mobile Programmer** (Kominfo VSGA)
- **Keahlian Utama:** Machine Learning, Time Series Forecasting, Python, SQL, Java (Android), PHP (Laravel), Tableau, Power BI.
- **Tugas Akhir / Skripsi:** *Pemodelan Prediksi Harga Saham PT Bank Central Asia Tbk (BBCA) Menggunakan Machine Learning* (MAPE: **1.72%**, R²: **0.968**).

---

## 🌟 Fitur Utama Website
1. **Halaman Beranda (`/`)**: Hero section dengan foto avatar, status *Available for Hire*, tagline profil, counter statistik kuantitatif, cuplikan Skripsi BBCA, dan proyek pilihan.
2. **Halaman Tentang (`/about`)**: Ringkasan visi karir, riwayat pendidikan formal, skill matrix (bahasa pemrograman, tools, keahlian data), dan sertifikasi kompetensi resmi.
3. **Halaman Proyek (`/projects`)**: Katalog proyek dengan filter kategori interaktif (*Semua*, *Tugas Akhir*, *Magang*, *Personal*) tanpa refresh halaman.
4. **Halaman Tugas Akhir (`/thesis`)**: Halaman khusus yang membedah tujuan penelitian, alur komputasi data science end-to-end, metrik evaluasi (MAE, RMSE, MAPE, R²), dan **grafik interaktif Chart.js** (Aktual vs Prediksi).
5. **Halaman Pengalaman (`/experience`)**: Garis waktu (*timeline*) riwayat kerja praktek dan magang di PT. Petra Sejahtera Abadi dan PT. Java Genius All Technology.
6. **Halaman CV (`/cv`)**: Lembar resume digital yang rapi, dilengkapi tombol *Print to PDF* yang dioptimasi khusus untuk cetak/unduh.
7. **Halaman Kontak (`/contact`)**: Saluran kontak langsung (Email, WhatsApp, LinkedIn, GitHub) dan formulir pengiriman pesan dengan proteksi anti-spam *honeypot*.
8. **Dual Theme Engine**: Beralih antara Dark Mode dan Light Mode dalam satu klik, tersimpan di `localStorage` tanpa kedipan (*zero-FOUC*).

---

## 🚀 Panduan Menjalankan di Komputer Lokal (Localhost)

### 1. Prasyarat
- PHP 8.2 atau lebih baru
- Composer 2.x
- Git

### 2. Langkah Instalasi
```bash
# Masuk ke direktori proyek
cd portofolio_website

# Salin konfigurasi environment
cp .env.example .env

# Pasang dependensi PHP (jika belum)
composer install

# Generate application key
php artisan key:generate

# Jalankan server lokal Laravel
php artisan serve
```

Buka browser Anda dan kunjungi: **`http://localhost:8000`**

---

## 🌐 Cara Build & Hosting GRATIS di GitHub Pages

GitHub Pages secara default hanya dapat melayani file statis (HTML, CSS, JS) dan tidak dapat mengeksekusi PHP secara langsung. Namun, proyek ini telah dilengkapi dengan **Artisan Static Exporter** yang secara otomatis mengkompilasi seluruh route Blade menjadi static HTML dengan tautan relatif yang sempurna!

### Metode A: Otomatisasi Penuh via GitHub Actions (Sangat Disarankan)

Proyek ini telah menyertakan berkas alur kerja [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml).

1. **Buat Repository Baru di GitHub**:
   - Masuk ke akun GitHub Anda dan buat repository baru (misal: `portofolio` atau `portofolio-khaerul`).
2. **Push Kode ke GitHub**:
   ```bash
   git init
   git add .
   git commit -m "feat: inisialisasi portofolio laravel Khaerul Oktafiansyah"
   git branch -M main
   git remote add origin https://github.com/USERNAME/NAMA-REPO.git
   git push -u origin main
   ```
3. **Konfigurasi GitHub Pages**:
   - Masuk ke halaman repository Anda di GitHub.
   - Buka tab **Settings** &rarr; menu **Pages** (di sidebar kiri).
   - Di bagian **Build and deployment**:
     - *Source*: Pilih **Deploy from a branch**.
     - *Branch*: Pilih branch **`gh-pages`** dan folder **`/ (root)`**.
     - Klik **Save**.
4. **Selesai!**
   Setiap kali Anda melakukan `git push` ke branch `main`, GitHub Actions akan otomatis merakit Laravel, meng-export static HTML, dan merilisnya ke alamat:
   `https://USERNAME.github.io/NAMA-REPO/`

---

### Metode B: Build Manual dari Komputer Lokal

Jika ingin meng-export secara manual:
```bash
# 1. Jalankan perintah export static
php artisan portfolio:export

# 2. Seluruh file HTML, CSS, JS, dan aset siap saji akan tercipta di folder dist/
```
Anda cukup mengunggah isi folder `dist/` ke branch `gh-pages` repository GitHub Anda.

---

## 📂 Struktur Direktori Proyek

```
portofolio_website/
├── app/
│   ├── Console/Commands/
│   │   └── ExportStaticCommand.php   # Artisan command kompilasi ke static HTML
│   ├── Http/Controllers/
│   │   └── PortfolioController.php   # Controller yang mengatur seluruh 7 rute
│   └── Services/
│       └── PortfolioData.php         # Master data profil, proyek, skripsi & skill
├── .github/
│   └── workflows/
│       └── deploy.yml                # CI/CD otomatisasi build ke GitHub Pages
├── public/
│   ├── css/
│   │   └── style.css                 # Sistem desain modern, variabel dark/light mode
│   └── js/
│       └── app.js                    # Logika switch tema, filter proyek & Chart.js
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php             # Master layout Blade dengan anti-FOUC script
│   ├── components/
│   │   ├── navbar.blade.php          # Header sticky responsif & theme toggle
│   │   └── footer.blade.php          # Footer navigasi & kontak
│   └── pages/
│       ├── home.blade.php            # Halaman Beranda
│       ├── about.blade.php           # Halaman Tentang Saya & Skill Matrix
│       ├── projects.blade.php        # Halaman Katalog Proyek
│       ├── thesis.blade.php          # Halaman Khusus Skripsi Prediksi Saham BBCA
│       ├── experience.blade.php      # Halaman Timeline Pengalaman Kerja
│       ├── cv.blade.php              # Halaman CV & Tombol Cetak PDF
│       └── contact.blade.php         # Halaman Kontak Anti-Spam
├── routes/
│   └── web.php                       # Definisi rute web
├── PRD.md                            # Product Requirement Document (Anti-Halusinasi)
└── README.md                         # Dokumentasi teknis proyek
```

---

## 📄 Lisensi
Dilisensikan di bawah [MIT License](LICENSE). Dibuat dengan penuh dedikasi oleh **Khaerul Oktafiansyah**.
