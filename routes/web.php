<?php

use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahDataPasien;
use App\Http\Controllers\TerapiController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CancerCategory;
use App\Http\Livewire\CancerDetail;
use App\Http\Livewire\PatientBiodata;
use App\Http\Livewire\EducationArticle;

// Route::get('/cancer-categories', CancerCategory::class)->name('cancer-categories')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('beranda');
// });


Route::get('/', [TambahDataPasien::class, 'index']);

Route::get('/definisi', [HomeController::class, 'definisi']);
// Route::get('/terapi', [TerapiController::class, 'index']);
Route::post('/tambah', [TambahDataPasien::class, 'tambah']);
Route::get('/efek-samping', [HomeController::class, 'efeksamping']);
Route::get('/penanganan', [HomeController::class, 'penanganan']);
Route::get('/terapi', [HomeController::class, 'terapi']);
Route::get('/edukasi', [EdukasiController::class, 'index']);


// YAANG DIBAWAH BUAT ADMIN DASHBOARD

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/cancer-category', CancerCategory::class)->name('cancer-category');
    Route::get('/cancer-detail', CancerDetail::class)->name('cancer-detail');
    Route::get('/patient-biodata', PatientBiodata::class)->name('patient-biodata');
    Route::get('/education-article', EducationArticle::class)->name('education-article');
});
