<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MateriAngkaController;
use App\Http\Controllers\MateriHurufController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\NilaiQuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing.pages.home');
})->name('landing');

/*
|--------------------------------------------------------------------------
| LANDING MENU
|--------------------------------------------------------------------------
*/

Route::get('/belajar-angka', function () {

    $materi = \App\Models\MateriAngka::all();

    return view('landing.pages.belajar-angka', compact('materi'));

})->name('belajar.angka');

Route::get('/ayo-berhitung', function () {
    return view('landing.pages.ayo-berhitung');
})->name('ayo.berhitung');

Route::get('/belajar-huruf', function () {

    $materi = \App\Models\MateriHuruf::all();

    return view('landing.pages.belajar-huruf', compact('materi'));

})->name('belajar.huruf');

Route::get('/ayo-mengeja', [QuizController::class, 'landingMengeja'])
    ->name('ayo.mengeja');

/*
|--------------------------------------------------------------------------
| DASHBOARD GURU
|--------------------------------------------------------------------------
*/

Route::get('/guru', [DashboardController::class, 'index'])
    ->name('dashboard.guru');

/*
|--------------------------------------------------------------------------
| KELOLA MATERI
|--------------------------------------------------------------------------
*/

Route::get('/guru/materi-angka', [MateriAngkaController::class, 'index'])
    ->name('materi.angka');

Route::post('/guru/materi-angka/store', [MateriAngkaController::class, 'store'])
    ->name('materi.angka.store');

Route::get('/guru/materi-angka/delete/{id}', [MateriAngkaController::class, 'delete'])
    ->name('materi.angka.delete');

Route::get('/guru/materi-angka/edit/{id}', [MateriAngkaController::class, 'edit'])
    ->name('materi.angka.edit');

Route::post('/guru/materi-angka/update/{id}', [MateriAngkaController::class, 'update'])
    ->name('materi.angka.update');

Route::get('/guru/data-materi-angka',
    [MateriAngkaController::class, 'data']
)->name('materi.angka.data');



Route::get('/guru/materi-huruf', [MateriHurufController::class, 'index'])
    ->name('materi.huruf');

Route::get('/guru/materi-huruf/data', [MateriHurufController::class, 'data'])
    ->name('materi.huruf.data');

Route::post('/guru/materi-huruf/store', [MateriHurufController::class, 'store'])
    ->name('materi.huruf.store');

Route::delete('/guru/materi-huruf/{id}', [MateriHurufController::class, 'delete'])
    ->name('materi.huruf.delete');

Route::get('/guru/materi-huruf/edit/{id}', [MateriHurufController::class, 'edit'])
    ->name('materi.huruf.edit');

Route::post('/guru/materi-huruf/update/{id}', [MateriHurufController::class, 'update'])
    ->name('materi.huruf.update');



/*
|--------------------------------------------------------------------------
| QUIZ
|--------------------------------------------------------------------------
*/

// FORM QUIZ MENGEJA
Route::get('/guru/quiz-mengeja', [QuizController::class, 'quizMengeja'])
    ->name('quiz.mengeja');

// DATA QUIZ MENGEJA
Route::get('/guru/data-quiz-mengeja', [QuizController::class, 'dataMengeja'])
    ->name('quiz.mengeja.data');

// FORM QUIZ BERHITUNG
Route::get('/guru/quiz-berhitung', [QuizController::class, 'quizBerhitung'])
    ->name('quiz.berhitung');

// DATA QUIZ BERHITUNG
Route::get('/guru/data-quiz-berhitung', [QuizController::class, 'dataBerhitung'])
    ->name('quiz.berhitung.data');

// SIMPAN QUIZ
Route::post('/guru/quiz/store', [QuizController::class, 'store'])
    ->name('quiz.store');

// EDIT QUIZ
Route::get('/guru/quiz/edit/{id}', [QuizController::class, 'edit'])
    ->name('quiz.edit');

// UPDATE QUIZ
Route::post('/guru/quiz/update/{id}', [QuizController::class, 'update'])
    ->name('quiz.update');

// HAPUS QUIZ
Route::get('/guru/quiz/delete/{id}', [QuizController::class, 'delete'])
    ->name('quiz.delete');



Route::get(
    '/quiz-mengeja/{id}/{nomor}',
    [QuizController::class, 'mulaiQuizMengeja']
)->name('quiz.mengeja.main');

Route::get(
    '/quiz-mengeja/{murid}/{nomor}/{jawaban}',
    [QuizController::class, 'cekJawabanMengeja']
)->name('quiz.mengeja.cek');

Route::get('/quiz-selesai/{id}', function($id){

    $murid = \App\Models\Murid::findOrFail($id);

    return view('landing.pages.quiz-selesai', compact('murid'));

})->name('quiz.selesai');



Route::get(
    '/quiz-berhitung/{id}/{nomor}',
    [QuizController::class, 'mulaiQuizBerhitung']
)->name('quiz.berhitung.main');

Route::get(
    '/quiz-berhitung/{murid}/{nomor}/{jawaban}',
    [QuizController::class, 'cekJawabanBerhitung']
)->name('quiz.berhitung.cek');

Route::get('/ayo-mengeja', [QuizController::class, 'landingMengeja'])
    ->name('ayo.mengeja');

Route::get('/ayo-berhitung', [QuizController::class, 'landingBerhitung'])
    ->name('ayo.berhitung');

Route::get('/quiz-berhitung-selesai/{id}', [QuizController::class, 'quizBerhitungSelesai'])
    ->name('quiz.berhitung.selesai');



/*
|--------------------------------------------------------------------------
| KELOLA MURID
|--------------------------------------------------------------------------
*/

Route::get('/guru/murid/form', [MuridController::class, 'form'])
    ->name('murid.form');

Route::get('/guru/murid/data', [MuridController::class, 'data'])
    ->name('murid.data');

Route::post('/guru/murid/store', [MuridController::class, 'store'])
    ->name('murid.store');

Route::get('/guru/murid/edit/{id}', [MuridController::class, 'edit'])
    ->name('murid.edit');

Route::post('/guru/murid/update/{id}', [MuridController::class, 'update'])
    ->name('murid.update');

Route::get('/guru/murid/delete/{id}', [MuridController::class, 'delete'])
    ->name('murid.delete');

/*
|--------------------------------------------------------------------------
| LAPORAN BELAJAR
|--------------------------------------------------------------------------
*/

Route::get('/guru/laporan-nilai',
    [NilaiQuizController::class, 'index']
)->name('laporan.nilai');


Route::get('/guru/laporan-nilai/{id}',
    [NilaiQuizController::class, 'detail']
)->name('laporan.nilai.detail');

/*
|--------------------------------------------------------------------------
| DASHBOARD DEFAULT
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});



require __DIR__.'/auth.php';