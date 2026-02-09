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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs');
Route::get('/programs/{slug}', [ProgramController::class, 'show'])->name('programs.show');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/structure', [StructureController::class, 'index'])->name('structure');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/cek-anggota', [MemberCheckController::class, 'index'])->name('member.check');
Route::post('/cek-anggota', [MemberCheckController::class, 'check'])->name('member.check.submit');