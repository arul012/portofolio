<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Khaerul Oktafiansyah Portfolio
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/thesis', [PortfolioController::class, 'thesis'])->name('thesis');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/cv', [PortfolioController::class, 'cv'])->name('cv');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// Dynamic Form Handler
Route::post('/contact/send', [PortfolioController::class, 'sendMessage'])->name('contact.send');
