<?php

namespace App\Http\Controllers;

use App\Models\MateriHuruf;
use App\Models\MateriAngka;
use App\Models\Quiz;
use App\Models\Murid;
use App\Models\NilaiQuiz;

class DashboardController extends Controller
{
    public function index()
    {
        // Total materi (huruf + angka)
        $totalMateri = MateriHuruf::count() + MateriAngka::count();

        // Total quiz
        $totalQuiz = Quiz::count();

        // Total murid
        $totalMurid = Murid::count();

        // Total hasil quiz
        $totalNilai = NilaiQuiz::count();

        // Rata-rata nilai quiz mengeja
        $rataHuruf = NilaiQuiz::where('jenis_quiz', 'huruf')
            ->avg('nilai');

        // Rata-rata nilai quiz berhitung
        $rataBerhitung = NilaiQuiz::where('jenis_quiz', 'berhitung')
            ->avg('nilai');

        // Ambil 5 nilai terbaru
        $nilaiTerbaru = NilaiQuiz::with('murid')
            ->latest()
            ->take(5)
            ->get();

        return view('guru.pages.dashboard', compact(
            'totalMateri',
            'totalQuiz',
            'totalMurid',
            'totalNilai',
            'rataHuruf',
            'rataBerhitung',
            'nilaiTerbaru'
        ));
    }
}