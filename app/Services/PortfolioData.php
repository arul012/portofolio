<?php

namespace App\Services;

class PortfolioData
{
    /**
     * Get Personal Information
     */
    public static function getProfile(): array
    {
        return [
            'name' => 'Khaerul Oktafiansyah',
            'nickname' => 'Arul',
            'role' => 'Junior Data Analyst & Software Developer',
            'sub_role' => 'Mahasiswa S1 Teknik Informatika (Semester Akhir)',
            'institution' => 'Universitas Pamulang',
            'gpa' => '3.77 / 4.00',
            'status' => 'Available for Full-time & Internship Opportunities',
            'email' => 'khaeruloktafiansyah04@gmail.com',
            'phone' => '+62 815-7317-9872',
            'whatsapp_link' => 'https://wa.me/6281573179872',
            'location' => 'Tangerang Selatan, Banten, Indonesia',
            'linkedin' => 'https://linkedin.com/in/khaerul-oktafiansyah',
            'github' => 'https://github.com/arul012',
            'hero_tagline' => 'Lulusan TI | Junior Data Analyst | Tugas Akhir: Model Prediksi Harga Saham BBCA',
            'bio_summary' => 'Mahasiswa tingkat akhir S1 Teknik Informatika Universitas Pamulang dan pemegang sertifikasi kompetensi BNSP Junior Data Analyst. Memiliki keahlian teruji dalam pemrosesan data, pemodelan prediktif, serta analisis statistik menggunakan Python dan Google Colab. Berhasil menyelesaikan proyek tugas akhir berbasis Machine Learning untuk memprediksi pergerakan harga saham PT Bank Central Asia Tbk (BBCA). Bersemangat dalam mentransformasi data mentah menjadi wawasan bisnis yang strategis, akurat, dan dapat dieksekusi.',
            'stats' => [
                ['value' => '3.77', 'label' => 'IPK Kelulusan (Skala 4.00)'],
                ['value' => '5+', 'label' => 'Proyek Data & Software'],
                ['value' => '7+', 'label' => 'Sertifikasi Terverifikasi'],
                ['value' => '90+', 'label' => 'Jam Pelatihan Intensif VSGA'],
            ]
        ];
    }

    /**
     * Get Education History
     */
    public static function getEducation(): array
    {
        return [
            [
                'institution' => 'Universitas Pamulang',
                'degree' => 'Sarjana (S1) - Teknik Informatika',
                'period' => 'September 2022 – Oktober 2026',
                'gpa' => '3.77 / 4.00',
                'status' => 'Semester 8 (Tahap Akhir / Skripsi Selesai)',
                'highlights' => [
                    'Fokus studi pada Rekayasa Perangkat Lunak, Data Science, dan Machine Learning.',
                    'Menyelesaikan Skripsi pemodelan prediktif time-series saham BBCA dengan evaluasi akurasi tinggi.',
                    'Aktif mengikuti seminar teknologi dan pelatihan pengembangan karir di lingkungan kampus.'
                ]
            ],
            [
                'institution' => 'SMK Negeri 1 Kedawung',
                'degree' => 'Sekolah Menengah Kejuruan - Jurusan Multimedia',
                'period' => '2019 – 2022',
                'gpa' => 'Rata-rata Nilai 83.73 / 100',
                'status' => 'Lulus',
                'highlights' => [
                    'Fondasi kuat dalam desain grafis, visualisasi UI/UX, dan multimedia interaktif.',
                    'Pengalaman praktik kerja lapangan dalam perancangan antarmuka pengguna.'
                ]
            ]
        ];
    }

    /**
     * Get Work & Internship Experience
     */
    public static function getExperience(): array
    {
        return [
            [
                'company' => 'PT. Petra Sejahtera Abadi',
                'role' => 'Software Developer / Anggota Tim Pengembang Aplikasi',
                'type' => 'Kerja Praktek / Internship',
                'period' => 'Maret 2025 – Juni 2025',
                'location' => 'Tangerang',
                'description' => 'Mengembangkan aplikasi sistem stock opname gudang berbasis Android untuk mendigitalisasi proses pencatatan inventaris barang perusahaan.',
                'achievements' => [
                    'Mengimplementasikan metode prototype untuk merancang dan mengembangkan sistem stock opname gudang berbasis Android.',
                    'Berhasil mengefisiensikan waktu pencatatan data stok barang yang sebelumnya manual berbasis kartu stok menjadi sistem digital otomatis.',
                    'Mengintegrasikan data stok secara digital dan terpusat menggunakan Firebase Realtime Database untuk meminimalkan risiko kehilangan data inventaris.',
                    'Membangun aplikasi menggunakan Android Studio dan bahasa pemrograman Java.'
                ],
                'tech_stack' => ['Java', 'Android Studio', 'Firebase', 'Mobile Architecture', 'Prototype Method']
            ],
            [
                'company' => 'PT. Java Genius All Technology',
                'role' => 'User Interface Designer',
                'type' => 'Praktek Kerja Lapangan',
                'period' => 'Agustus 2021 – Oktober 2021',
                'location' => 'Jakarta / Remote',
                'description' => 'Merancang antarmuka pengguna komprehensif untuk produk digital website UMKM dan berkolaborasi dalam tim desain.',
                'achievements' => [
                    'Menguasai prinsip desain UI modern di Figma dan menerapkan praktik terbaik dalam pembuatan antarmuka.',
                    'Berperan aktif dalam tim beranggotakan 6 orang untuk mendesain UI sebuah website, berkontribusi dalam wireframing dan mockup awal.',
                    'Berhasil menyelesaikan desain UI untuk 37 tampilan halaman website Pembukuan dan Manajemen Produksi sebuah UMKM, meningkatkan efisiensi visual dan kemudahan navigasi.'
                ],
                'tech_stack' => ['Figma', 'UI/UX Design', 'Wireframing', 'Prototyping', 'Design Systems']
            ],
            [
                'company' => 'SMK Sima Bangsa',
                'role' => 'Instruktur Motion Graphic (Ekstrakurikuler)',
                'type' => 'Pengajaran & Mentorship',
                'period' => 'September 2021 – Oktober 2021',
                'location' => 'Jawa Barat',
                'description' => 'Memberikan pelatihan teknis dasar motion graphic dan pembinaan kreatif kepada siswa kejuruan.',
                'achievements' => [
                    'Meningkatkan kemampuan presentasi publik dan penyampaian materi teknis kompleks secara komunikatif dan sistematis.',
                    'Bertanggung jawab dalam mengisi materi dasar motion graphic menggunakan Adobe After Effects kepada 7 pelajar ekstrakurikuler multimedia.'
                ],
                'tech_stack' => ['Public Speaking', 'Adobe After Effects', 'Motion Design', 'Curriculum Delivery']
            ]
        ];
    }

    /**
     * Get Master Project Catalog
     */
    public static function getProjects(): array
    {
        return [
            [
                'id' => 'bbca-stock-prediction',
                'title' => 'Pemodelan Prediksi Harga Saham BBCA',
                'category' => 'Tugas Akhir',
                'category_slug' => 'tugas-akhir',
                'type_badge' => 'Skripsi / Machine Learning',
                'period' => 'Oktober 2025 – September 2026',
                'role' => 'Lead Researcher & ML Developer',
                'summary' => 'Model prediksi pergerakan tren harga saham PT Bank Central Asia Tbk (BBCA) berbasis Machine Learning / Deep Learning time series dengan tahap data cleaning, preprocessing, feature engineering, dan evaluasi akurasi komprehensif.',
                'description' => 'Proyek tugas akhir berfokus pada analisis data historis pergerakan saham BBCA di Bursa Efek Indonesia. Menggunakan pendekatan data science end-to-end: pembersihan outlier, imputasi, pembuatan indikator teknikal (Moving Averages, RSI, Lagged Price Features), dan pelatihan model prediktif untuk meminimalkan error forecasting.',
                'tech_stack' => ['Python', 'Google Colab', 'Scikit-Learn', 'Pandas', 'NumPy', 'Matplotlib', 'Time Series'],
                'metrics' => [
                    ['name' => 'Mean Absolute Error (MAE)', 'value' => 'Rp 85.40'],
                    ['name' => 'Root Mean Squared Error (RMSE)', 'value' => 'Rp 112.20'],
                    ['name' => 'Accuracy / Precision', 'value' => '98.3%'],
                ],
                'has_dedicated_page' => true,
                'demo_url' => null,
                'repo_url' => 'https://github.com/arul012',
                'image' => '/images/projects/bbca-preview.png',
                'featured' => true
            ],
            [
                'id' => 'stock-opname-android',
                'title' => 'Aplikasi Stock Opname Gudang Berbasis Android',
                'category' => 'Magang',
                'category_slug' => 'magang',
                'type_badge' => 'Kerja Praktek / Mobile App',
                'period' => 'Maret 2025 – Juni 2025',
                'role' => 'Android Developer',
                'summary' => 'Transformasi pencatatan data stok barang manual menjadi sistem digital terpusat berbasis Android dan Firebase di PT. Petra Sejahtera Abadi.',
                'description' => 'Menggantikan metode lama berbasis kartu stok fisik yang rentan selisih dan rusak. Memfasilitasi scanner barcode/input cepat, audit stok real-time, dan penyimpanan data terpusat ke cloud Firebase sehingga pelaporan inventaris gudang dapat diakses instan oleh manajemen.',
                'tech_stack' => ['Java', 'Android Studio', 'Firebase Realtime DB', 'XML Layout', 'CRUD'],
                'metrics' => [
                    ['name' => 'Efisiensi Waktu Audit', 'value' => '65% Lebih Cepat'],
                    ['name' => 'Risiko Kehilangan Data', 'value' => 'Tereduksi 90%']
                ],
                'has_dedicated_page' => false,
                'demo_url' => null,
                'repo_url' => 'https://github.com/arul012',
                'image' => '/images/projects/stock-opname-preview.png',
                'featured' => true
            ],
            [
                'id' => 'student-attendance-app',
                'title' => 'Aplikasi Presensi Siswa Sekolah (CRUD)',
                'category' => 'Personal',
                'category_slug' => 'personal',
                'type_badge' => 'Akademik / Android App',
                'period' => 'Juni 2023',
                'role' => 'Mobile Developer',
                'summary' => 'Aplikasi pencatatan dan manajemen kehadiran siswa per mata pelajaran dengan fungsionalitas CRUD terstruktur.',
                'description' => 'Membangun aplikasi presensi siswa dengan fungsionalitas CRUD (Create, Read, Update, Delete) yang rapi, mempermudah proses pencatatan kehadiran, rekapitulasi siswa hadir, izin, sakit, atau alfa secara periodik.',
                'tech_stack' => ['Java', 'Android Studio', 'SQLite', 'Material UI'],
                'metrics' => [
                    ['name' => 'Fitur CRUD', 'value' => '100% Berfungsi'],
                    ['name' => 'Kecepatan Input', 'value' => 'Instan']
                ],
                'has_dedicated_page' => false,
                'demo_url' => null,
                'repo_url' => 'https://github.com/arul012',
                'image' => '/images/projects/attendance-preview.png',
                'featured' => false
            ],
            [
                'id' => 'word-puzzle-game',
                'title' => 'Game Edukasi Puzzle Huruf Android',
                'category' => 'Personal',
                'category_slug' => 'personal',
                'type_badge' => 'Pelatihan Kominfo / Game Dev',
                'period' => 'Juli 2023',
                'role' => 'Game Developer',
                'summary' => 'Game asah otak interaktif berbasis Android untuk mengacak dan menyusun huruf menjadi kata yang benar.',
                'description' => 'Dikembangkan sebagai implementasi pembelajaran intensif 90 jam program Kominfo VSGA. Menerapkan algoritma pengacakan matriks huruf, pendeteksi kemenangan, timer, dan skor dinamis.',
                'tech_stack' => ['Java', 'Android Studio', 'Game Logic', 'Algorithm'],
                'metrics' => [
                    ['name' => 'Nilai Evaluasi Pelatihan', 'value' => 'Kompeten'],
                ],
                'has_dedicated_page' => false,
                'demo_url' => null,
                'repo_url' => 'https://github.com/arul012',
                'image' => '/images/projects/puzzle-game-preview.png',
                'featured' => false
            ],
            [
                'id' => 'umkm-accounting-ui',
                'title' => 'Desain UI Website Pembukuan & Produksi UMKM',
                'category' => 'Magang',
                'category_slug' => 'magang',
                'type_badge' => 'UI/UX Design / Figma',
                'period' => 'Oktober 2021',
                'role' => 'UI Designer (Team of 6)',
                'summary' => 'Desain komprehensif 37 tampilan layar website pembukuan keuangan dan manajemen alur produksi UMKM.',
                'description' => 'Melakukan riset kebutuhan alur kerja pemilik usaha kecil, membuat sketsa wireframe, serta merancang visual mockup akhir dengan desain sistem konsisten di Figma guna menyederhanakan data finansial yang rumit.',
                'tech_stack' => ['Figma', 'Wireframing', 'UI Mockup', 'User Flow', 'Design System'],
                'metrics' => [
                    ['name' => 'Total Tampilan Halaman', 'value' => '37 Halaman'],
                    ['name' => 'Anggota Tim', 'value' => '6 Desainer']
                ],
                'has_dedicated_page' => false,
                'demo_url' => null,
                'repo_url' => 'https://github.com/arul012',
                'image' => '/images/projects/figma-ui-preview.png',
                'featured' => true
            ]
        ];
    }

    /**
     * Get Thesis Detailed Specifications & Data
     */
    public static function getThesisDetails(): array
    {
        return [
            'title' => 'Pemodelan Prediksi Harga Saham PT Bank Central Asia Tbk (BBCA) Menggunakan Machine Learning',
            'period' => 'Oktober 2025 – September 2026',
            'advisor' => 'Program Studi S1 Teknik Informatika, Universitas Pamulang',
            'abstract' => 'Pasar modal memiliki tingkat volatilitas tinggi yang dipengaruhi oleh dinamika ekonomi dan sentimen pasar. Penelitian tugas akhir ini bertujuan merancang dan mengevaluasi model prediktif berbasis Machine Learning / Time Series untuk mengestimasi pergerakan harga penutupan (Close Price) saham PT Bank Central Asia Tbk (BBCA). Melalui integrasi tahapan data cleaning, rekayasa fitur indikator teknikal, dan evaluasi menggunakan MAE, RMSE, dan MAPE, model terbukti mampu memetakan pola historis secara presisi dan menghasilkan proyeksi yang akurat untuk mendukung pengambilan keputusan investasi.',
            'objectives' => [
                'Menganalisis tren fluktuasi historis pergerakan harga saham BBCA secara multi-periode.',
                'Menerapkan tahapan data preprocessing komprehensif (penanganan data hilang, normalisasi, penghapusan outlier).',
                'Mengekstrak fitur berbasis lag-price dan technical indicators (Moving Averages 7 & 14 hari, Volatilitas) untuk meningkatkan performa model.',
                'Menguji dan membandingkan performa model algoritma prediktif berbasis metrik evaluasi baku (MAE, RMSE, MAPE).'
            ],
            'methodology' => [
                [
                    'step' => '01',
                    'name' => 'Data Acquisition',
                    'desc' => 'Pengambilan data historis harga saham BBCA dari Yahoo Finance / Bursa Efek Indonesia mencakup Open, High, Low, Close, Volume.'
                ],
                [
                    'step' => '02',
                    'name' => 'Data Cleaning & Preprocessing',
                    'desc' => 'Validasi integritas data, imputasi nilai null pada hari libur bursa, dan transformasi format waktu standar ISO.'
                ],
                [
                    'step' => '03',
                    'name' => 'Feature Engineering',
                    'desc' => 'Pembuatan fitur lag $T-1$ hingga $T-7$, Simple Moving Average (SMA), Exponential Moving Average (EMA), serta rasio volatilitas harian.'
                ],
                [
                    'step' => '04',
                    'name' => 'Model Training & Tuning',
                    'desc' => 'Pemisahan data Train-Test (80:20), fitting model time series berbasis Python di Google Colab dengan hyperparameter tuning.'
                ],
                [
                    'step' => '05',
                    'name' => 'Evaluation & Verification',
                    'desc' => 'Pengukuran deviasi nilai prediksi terhadap harga aktual menggunakan MAE, RMSE, dan kalkulasi persentase kesalahan MAPE.'
                ]
            ],
            'evaluation_metrics' => [
                [
                    'metric' => 'Mean Absolute Error (MAE)',
                    'value' => 'Rp 85.40',
                    'desc' => 'Rata-rata selisih absolut antara harga prediksi dan harga aktual pasar saham.'
                ],
                [
                    'metric' => 'Root Mean Squared Error (RMSE)',
                    'value' => 'Rp 112.20',
                    'desc' => 'Akar kuadrat rata-rata kesalahan, sensitif terhadap outlier ekstrem, membuktikan stabilitas model.'
                ],
                [
                    'metric' => 'Mean Absolute Percentage Error (MAPE)',
                    'value' => '1.72%',
                    'desc' => 'Tingkat kesalahan di bawah 2%, mengindikasikan kemampuan prediksi berkategori Sangat Akurat (Very High Accuracy).'
                ],
                [
                    'metric' => 'R-Squared (R² Score)',
                    'value' => '0.968',
                    'desc' => 'Model mampu menerangkan 96.8% variansi fluktuasi pergerakan harga penutupan BBCA.'
                ]
            ],
            // 30-Day Time Series Simulation Data (BBCA Price Sample) for Chart.js
            'chart_data' => [
                'labels' => [
                    'Hari 1', 'Hari 2', 'Hari 3', 'Hari 4', 'Hari 5',
                    'Hari 6', 'Hari 7', 'Hari 8', 'Hari 9', 'Hari 10',
                    'Hari 11', 'Hari 12', 'Hari 13', 'Hari 14', 'Hari 15',
                    'Hari 16', 'Hari 17', 'Hari 18', 'Hari 19', 'Hari 20',
                    'Hari 21', 'Hari 22', 'Hari 23', 'Hari 24', 'Hari 25',
                    'Hari 26', 'Hari 27', 'Hari 28', 'Hari 29', 'Hari 30'
                ],
                'actual' => [
                    9850, 9900, 9875, 9950, 10025,
                    10000, 9975, 10050, 10100, 10075,
                    10150, 10200, 10175, 10125, 10225,
                    10275, 10250, 10300, 10350, 10325,
                    10375, 10425, 10400, 10475, 10525,
                    10500, 10450, 10550, 10600, 10575
                ],
                'predicted' => [
                    9840, 9890, 9885, 9935, 10010,
                    10015, 9965, 10035, 10090, 10085,
                    10135, 10185, 10185, 10140, 10210,
                    10260, 10265, 10285, 10340, 10335,
                    10360, 10410, 10415, 10460, 10510,
                    10515, 10465, 10535, 10585, 10590
                ]
            ],
            'paper_link' => '#',
            'presentation_link' => '#',
            'colab_link' => 'https://colab.research.google.com'
        ];
    }

    /**
     * Get Certifications
     */
    public static function getCertifications(): array
    {
        return [
            [
                'title' => 'BNSP Junior Data Analyst',
                'issuer' => 'Badan Nasional Sertifikasi Profesi (BNSP)',
                'date' => 'Oktober 2025',
                'credential_id' => 'BNSP-JDA-2025-XX',
                'description' => 'Lulus uji kompetensi profesi nasional mencakup pengumpulan data, penelaahan integritas data, validasi, dan ekstraksi wawasan strategis dari dataset real-case.',
                'badge' => 'BNSP Certified'
            ],
            [
                'title' => 'BNSP Junior Mobile Programmer',
                'issuer' => 'Kementerian Kominfo - Digital Talent Scholarship (VSGA)',
                'date' => 'Juni 2023 – Juli 2023',
                'credential_id' => 'VSGA-KOMINFO-2023',
                'description' => 'Menyelesaikan pelatihan intensif 90 Jam Pelatihan (JP) mencakup arsitektur mobile, mobile security, persistensi data SQLite/Firebase, dan implementasi CRUD.',
                'badge' => 'Kominfo VSGA'
            ],
            [
                'title' => 'Memulai Pemrograman dengan Java',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Desember 2022',
                'credential_id' => 'DICODING-JAVA-2022',
                'description' => 'Mendalami dasar pemrograman Java, tipe data, struktur kontrol alur, fungsi I/O, serta konsep Object-Oriented Programming (OOP).',
                'badge' => 'Dicoding'
            ],
            [
                'title' => 'Meniti Karir Sebagai Software Developer',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'September 2022',
                'credential_id' => 'DICODING-CAREER-2022',
                'description' => 'Pemahaman komprehensif alur karir developer, metodologi kerja Agile/Scrum, dan kolaborasi tim software engineering.',
                'badge' => 'Dicoding'
            ],
            [
                'title' => 'Pengenalan Data pada Pemrograman (Data 101)',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'September 2022',
                'credential_id' => 'DICODING-DATA-2022',
                'description' => 'Konsep fundamental representasi data, tipe struktur data, basis data relasional, dan etika pengolahan data.',
                'badge' => 'Dicoding'
            ],
            [
                'title' => 'Pengenalan ke Logika Pemrograman',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Agustus 2022',
                'credential_id' => 'DICODING-LOGIC-2022',
                'description' => 'Studi komputasional mengenai logika proposisi, pemecahan masalah algoritma, dan alur perancangan solusi.',
                'badge' => 'Dicoding'
            ]
        ];
    }

    /**
     * Get Skills categorized
     */
    public static function getSkills(): array
    {
        return [
            'Programming & Query' => [
                ['name' => 'Python', 'level' => 'Tingkat Mahir', 'percent' => 90, 'icon' => 'python'],
                ['name' => 'SQL (MySQL, PostgreSQL)', 'level' => 'Tingkat Menengah', 'percent' => 85, 'icon' => 'database'],
                ['name' => 'Java', 'level' => 'Tingkat Menengah', 'percent' => 80, 'icon' => 'code'],
                ['name' => 'PHP (Laravel)', 'level' => 'Tingkat Menengah', 'percent' => 78, 'icon' => 'server']
            ],
            'Data Analytics & BI' => [
                ['name' => 'Google Colab & Jupyter', 'level' => 'Tingkat Mahir', 'percent' => 92, 'icon' => 'cpu'],
                ['name' => 'Tableau & Power BI', 'level' => 'Tingkat Menengah', 'percent' => 82, 'icon' => 'bar-chart'],
                ['name' => 'Spreadsheet & MS Excel', 'level' => 'Tingkat Mahir', 'percent' => 90, 'icon' => 'table'],
                ['name' => 'Firebase Realtime DB', 'level' => 'Tingkat Menengah', 'percent' => 80, 'icon' => 'cloud']
            ],
            'Data Science Competencies' => [
                ['name' => 'Data Cleaning & Wrangling', 'level' => 'Teruji', 'percent' => 90],
                ['name' => 'Exploratory Data Analysis (EDA)', 'level' => 'Teruji', 'percent' => 88],
                ['name' => 'Predictive Modeling & ML', 'level' => 'Teruji', 'percent' => 85],
                ['name' => 'Time Series Forecasting', 'level' => 'Teruji', 'percent' => 88],
                ['name' => 'Data Quality & Validation', 'level' => 'Teruji', 'percent' => 86]
            ],
            'Tools & Design' => [
                ['name' => 'Android Studio', 'level' => 'Terbiasa', 'percent' => 82],
                ['name' => 'Figma (UI/UX)', 'level' => 'Terbiasa', 'percent' => 80],
                ['name' => 'Git & GitHub', 'level' => 'Terbiasa', 'percent' => 85],
                ['name' => 'Adobe After Effects', 'level' => 'Dasar Menengah', 'percent' => 70]
            ],
            'Soft Skills' => [
                'Problem Solving',
                'Berpikir Analitis & Kritis',
                'Ketelitian & Validasi Detail',
                'Komunikasi Data & Presentasi',
                'Kerjasama Tim Lintas Fungsi'
            ],
            'Languages' => [
                ['name' => 'Bahasa Indonesia', 'status' => 'Penutur Asli (Native)'],
                ['name' => 'Bahasa Inggris', 'status' => 'Tingkat Menengah (Professional Working Proficiency)']
            ]
        ];
    }
}
