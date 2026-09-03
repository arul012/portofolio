<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExportStaticCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kompilasi seluruh halaman Laravel Blade menjadi static HTML/CSS/JS dengan tautan relatif siap deploy ke GitHub Pages';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🚀 Memulai Export Static Website Portofolio untuk GitHub Pages...');

        $distPath = base_path('dist');

        // 1. Bersihkan atau buat folder dist/
        if (File::exists($distPath)) {
            File::deleteDirectory($distPath);
        }
        File::makeDirectory($distPath, 0755, true);

        // 2. Daftar Route dan output file
        $routes = [
            '/' => 'index.html',
            '/about' => 'about/index.html',
            '/projects' => 'projects/index.html',
            '/thesis' => 'thesis/index.html',
            '/experience' => 'experience/index.html',
            '/cv' => 'cv/index.html',
            '/contact' => 'contact/index.html',
        ];

        $kernel = app()->make(\Illuminate\Contracts\Http\Kernel::class);

        foreach ($routes as $uri => $outputFile) {
            $this->line(" Rendering: {$uri} -> {$outputFile}");

            $request = Request::create($uri, 'GET');
            $response = $kernel->handle($request);

            if ($response->getStatusCode() !== 200) {
                $this->error(" Gagal merender {$uri} (Status {$response->getStatusCode()})");
                continue;
            }

            $htmlContent = $response->getContent();

            // Hitung kedalaman path relatif
            // index.html -> depth 0 (./)
            // about/index.html -> depth 1 (../)
            $depth = substr_count(trim($outputFile, '/'), '/');
            $prefix = $depth > 0 ? str_repeat('../', $depth) : './';

            // Ubah contact form action jika static
            if ($uri === '/contact') {
                $htmlContent = str_replace(
                    'action="' . route('contact.send') . '"',
                    'action="https://formspree.io/f/xbjnbqee" method="POST"',
                    $htmlContent
                );
            }

            // Normalisasi URL http://localhost menjadi tautan relatif
            $replacements = [
                'http://localhost/about' => $prefix . 'about/',
                'http://localhost/projects' => $prefix . 'projects/',
                'http://localhost/thesis' => $prefix . 'thesis/',
                'http://localhost/experience' => $prefix . 'experience/',
                'http://localhost/cv' => $prefix . 'cv/',
                'http://localhost/contact' => $prefix . 'contact/',
                'http://localhost/css/' => $prefix . 'css/',
                'http://localhost/js/' => $prefix . 'js/',
                'http://localhost/images/' => $prefix . 'images/',
                'http://localhost/pdf/' => $prefix . 'pdf/',
                'http://localhost/' => $prefix,
                'http://localhost' => $prefix,
            ];

            foreach ($replacements as $search => $replace) {
                $htmlContent = str_replace($search, $replace, $htmlContent);
            }

            // Simpan file hasil render
            $destination = $distPath . '/' . $outputFile;
            $dir = dirname($destination);
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0755, true);
            }

            File::put($destination, $htmlContent);
        }

        // 3. Salin Aset Statis (CSS, JS, Images, dll)
        $this->info('📦 Menyalin aset publik ke folder dist/...');

        $publicDirs = ['css', 'js', 'images', 'pdf', 'fonts'];
        foreach ($publicDirs as $dirName) {
            $src = public_path($dirName);
            if (File::exists($src)) {
                File::copyDirectory($src, $distPath . '/' . $dirName);
                $this->line("  ✓ Copied: public/{$dirName} -> dist/{$dirName}");
            }
        }

        // 4. Salin favicon jika ada
        if (File::exists(public_path('favicon.ico'))) {
            File::copy(public_path('favicon.ico'), $distPath . '/favicon.ico');
        }

        // 5. Buat file .nojekyll (Wajib untuk GitHub Pages agar tidak memfilter folder/aset)
        File::put($distPath . '/.nojekyll', '');
        $this->line('  ✓ Created: dist/.nojekyll');

        // 6. Buat file 404.html
        if (File::exists($distPath . '/index.html')) {
            File::copy($distPath . '/index.html', $distPath . '/404.html');
            $this->line('  ✓ Created: dist/404.html');
        }

        $this->newLine();
        $this->info('🎉 Export Static Sukses dengan Tautan Relatif!');
        $this->info('📁 Lokasi berkas: ' . $distPath);

        return Command::SUCCESS;
    }
}
