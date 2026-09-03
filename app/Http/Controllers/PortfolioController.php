<?php

namespace App\Http\Controllers;

use App\Services\PortfolioData;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Halaman Beranda (Home)
     */
    public function home()
    {
        $profile = PortfolioData::getProfile();
        $featuredProjects = array_filter(PortfolioData::getProjects(), fn($p) => $p['featured']);
        $thesis = PortfolioData::getThesisDetails();
        $recentExperience = array_slice(PortfolioData::getExperience(), 0, 2);
        $topSkills = PortfolioData::getSkills();

        return view('pages.home', compact('profile', 'featuredProjects', 'thesis', 'recentExperience', 'topSkills'));
    }

    /**
     * Halaman Tentang Saya (About)
     */
    public function about()
    {
        $profile = PortfolioData::getProfile();
        $education = PortfolioData::getEducation();
        $certifications = PortfolioData::getCertifications();
        $skills = PortfolioData::getSkills();

        return view('pages.about', compact('profile', 'education', 'certifications', 'skills'));
    }

    /**
     * Halaman Katalog Proyek (Projects)
     */
    public function projects()
    {
        $profile = PortfolioData::getProfile();
        $projects = PortfolioData::getProjects();
        $categories = [
            ['slug' => 'all', 'name' => 'Semua Proyek'],
            ['slug' => 'tugas-akhir', 'name' => 'Tugas Akhir / Skripsi'],
            ['slug' => 'magang', 'name' => 'Magang / Kerja Praktek'],
            ['slug' => 'personal', 'name' => 'Personal & Akademik'],
        ];

        return view('pages.projects', compact('profile', 'projects', 'categories'));
    }

    /**
     * Halaman Khusus Skripsi / Tugas Akhir (Thesis)
     */
    public function thesis()
    {
        $profile = PortfolioData::getProfile();
        $thesis = PortfolioData::getThesisDetails();

        return view('pages.thesis', compact('profile', 'thesis'));
    }

    /**
     * Halaman Riwayat Pengalaman (Experience)
     */
    public function experience()
    {
        $profile = PortfolioData::getProfile();
        $experiences = PortfolioData::getExperience();

        return view('pages.experience', compact('profile', 'experiences'));
    }

    /**
     * Halaman CV Digital + Download
     */
    public function cv()
    {
        $profile = PortfolioData::getProfile();
        $education = PortfolioData::getEducation();
        $experience = PortfolioData::getExperience();
        $certifications = PortfolioData::getCertifications();
        $skills = PortfolioData::getSkills();
        $projects = PortfolioData::getProjects();

        return view('pages.cv', compact('profile', 'education', 'experience', 'certifications', 'skills', 'projects'));
    }

    /**
     * Halaman Kontak (Contact)
     */
    public function contact()
    {
        $profile = PortfolioData::getProfile();

        return view('pages.contact', compact('profile'));
    }

    /**
     * Handle Form Submission (Untuk Server Dinamis)
     */
    public function sendMessage(Request $request)
    {
        // 1. Cek Honeypot (Anti-Spam)
        if (!empty($request->input('_gotcha'))) {
            return redirect()->route('contact')->with('error', 'Spam detected.');
        }

        // 2. Validasi Input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:3000',
        ]);

        // Simpan ke log atau kirim email jika mail driver terkonfigurasi
        \Illuminate\Support\Facades\Log::info('Pesan Kontak Masuk:', $validated);

        return redirect()->route('contact')->with('success', 'Terima kasih, pesan Anda telah berhasil dikirim! Saya akan segera merespons.');
    }
}
