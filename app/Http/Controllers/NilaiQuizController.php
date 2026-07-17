<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NilaiQuiz;

class NilaiQuizController extends Controller
{


    public function index(Request $request)
    {
        $query = NilaiQuiz::with('murid');

        // Filter jenis quiz
        if ($request->filled('jenis_quiz')) {
            $query->where('jenis_quiz', $request->jenis_quiz);
        }

        // Pencarian nama murid
        if ($request->filled('search')) {
            $query->whereHas('murid', function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%');
            });
        }

        $nilai = $query
            ->orderBy('created_at', 'desc')
            ->get();

        $rataHuruf = NilaiQuiz::where('jenis_quiz', 'huruf')
            ->avg('nilai');

        $rataBerhitung = NilaiQuiz::where('jenis_quiz', 'berhitung')
            ->avg('nilai');

        return view(
            'guru.pages.laporan-nilai',
            compact(
                'nilai',
                'rataHuruf',
                'rataBerhitung'
            )
        );
    }


    public function detail($id)
    {

        $nilai = NilaiQuiz::with([
            'murid',
            'detailNilai.quiz'
        ])
        ->findOrFail($id);


        return view(
            'guru.pages.detail-nilai',
            compact('nilai')
        );

    }

}