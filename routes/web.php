<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

// Halaman Menu Utama
Route::get('/', [SurveyController::class, 'home'])->name('home');

// Halaman Form Kuesioner
Route::get('/survey', [SurveyController::class, 'index'])->name('survey.index');
Route::post('/survey', [SurveyController::class, 'store'])->name('survey.store');

// Halaman Hasil (Admin/Viewer)
Route::get('/results', [SurveyController::class, 'results'])->name('survey.results');
Route::get('/results/{id}', [SurveyController::class, 'show'])->name('survey.show');

// Halaman Sukses
Route::get('/success', function() {
    return view('survey.success'); // Kita akan buat view sederhana untuk ini
})->name('survey.success');