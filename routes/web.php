<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberCheckController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Programs
Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{slug}', [ProgramController::class, 'show'])->name('programs.show');

// News
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Structure
Route::get('/structure', [StructureController::class, 'index'])->name('structure');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Member Check
Route::get('/cek-anggota', [MemberCheckController::class, 'index'])->name('member.check');
Route::post('/cek-anggota', [MemberCheckController::class, 'check'])->name('member.check.post');