<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Murid;
use App\Models\NilaiQuiz;
use App\Models\DetailNilaiQuiz;

class QuizController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | QUIZ MENGEJA
    |--------------------------------------------------------------------------
    */

    // Form Quiz Mengeja
    public function quizMengeja()
    {
        return view('guru.pages.quiz-mengeja');
    }

    // Data Quiz Mengeja
    public function dataMengeja()
    {
        $quiz = Quiz::where('jenis_quiz', 'huruf')->get();

        return view('guru.pages.data-quiz-mengeja', compact('quiz'));
    }

    /*
    |--------------------------------------------------------------------------
    | QUIZ BERHITUNG
    |--------------------------------------------------------------------------
    */

    // Form Quiz Berhitung
    public function quizBerhitung()
    {
        return view('guru.pages.quiz-berhitung');
    }

    // Data Quiz Berhitung
    public function dataBerhitung()
    {
        $quiz = Quiz::where('jenis_quiz', 'berhitung')->get();

        return view('guru.pages.data-quiz-berhitung', compact('quiz'));
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN QUIZ
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'jenis_quiz' => 'required',
            'pertanyaan' => 'required',

            'gambar_soal' => 'nullable|image|mimes:jpg,jpeg,png',
            'audio_soal' => 'nullable|mimes:mp3,wav',

            'gambar_opsi_a' => 'nullable|image|mimes:jpg,jpeg,png',
            'gambar_opsi_b' => 'nullable|image|mimes:jpg,jpeg,png',
            'gambar_opsi_c' => 'nullable|image|mimes:jpg,jpeg,png',

            'jawaban_benar' => 'required'
        ]);

        $gambarSoal = null;
        $audioSoal = null;

        $gambarA = null;
        $gambarB = null;
        $gambarC = null;

        // Upload gambar soal
        if ($request->hasFile('gambar_soal')) {

            $file = $request->file('gambar_soal');

            $namaFile = time() . '_soal.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/quiz'), $namaFile);

            $gambarSoal = 'uploads/quiz/' . $namaFile;
        }

        // Upload audio soal
        if ($request->hasFile('audio_soal')) {

            $file = $request->file('audio_soal');

            $namaFile = time() . '_audio.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/quiz'), $namaFile);

            $audioSoal = 'uploads/quiz/' . $namaFile;
        }

        // Opsi A
        if ($request->hasFile('gambar_opsi_a')) {

            $file = $request->file('gambar_opsi_a');

            $namaFile = time() . '_a.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/quiz'), $namaFile);

            $gambarA = 'uploads/quiz/' . $namaFile;
        }

        // Opsi B
        if ($request->hasFile('gambar_opsi_b')) {

            $file = $request->file('gambar_opsi_b');

            $namaFile = time() . '_b.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/quiz'), $namaFile);

            $gambarB = 'uploads/quiz/' . $namaFile;
        }

        // Opsi C
        if ($request->hasFile('gambar_opsi_c')) {

            $file = $request->file('gambar_opsi_c');

            $namaFile = time() . '_c.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/quiz'), $namaFile);

            $gambarC = 'uploads/quiz/' . $namaFile;
        }

        Quiz::create([
            'jenis_quiz' => $request->jenis_quiz,
            'pertanyaan' => $request->pertanyaan,

            'gambar_soal' => $gambarSoal,
            'audio_soal' => $audioSoal,

            'gambar_opsi_a' => $gambarA,
            'gambar_opsi_b' => $gambarB,
            'gambar_opsi_c' => $gambarC,

            'jawaban_benar' => $request->jawaban_benar
        ]);

        return redirect()->back()
            ->with('success', 'Quiz berhasil ditambahkan');
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT QUIZ
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);

        return view('guru.pages.edit-quiz', compact('quiz'));
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE QUIZ
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
    $quiz = Quiz::findOrFail($id);

    
    $request->validate([
        'pertanyaan' => 'required',

        'gambar_soal' => 'nullable|image|mimes:jpg,jpeg,png',
        'audio_soal' => 'nullable|mimes:mp3,wav',

        'gambar_opsi_a' => 'nullable|image|mimes:jpg,jpeg,png',
        'gambar_opsi_b' => 'nullable|image|mimes:jpg,jpeg,png',
        'gambar_opsi_c' => 'nullable|image|mimes:jpg,jpeg,png',

        'jawaban_benar' => 'required'
    ]);

    $gambarSoal = $quiz->gambar_soal;
    $audioSoal = $quiz->audio_soal;

    $gambarA = $quiz->gambar_opsi_a;
    $gambarB = $quiz->gambar_opsi_b;
    $gambarC = $quiz->gambar_opsi_c;

    // Gambar Soal
    if ($request->hasFile('gambar_soal')) {

        $file = $request->file('gambar_soal');

        $namaFile = time() . '_soal.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads/quiz'), $namaFile);

        $gambarSoal = 'uploads/quiz/' . $namaFile;
    }

    // Audio Soal
    if ($request->hasFile('audio_soal')) {

        $file = $request->file('audio_soal');

        $namaFile = time() . '_audio.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads/quiz'), $namaFile);

        $audioSoal = 'uploads/quiz/' . $namaFile;
    }

    // Opsi A
    if ($request->hasFile('gambar_opsi_a')) {

        $file = $request->file('gambar_opsi_a');

        $namaFile = time() . '_a.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads/quiz'), $namaFile);

        $gambarA = 'uploads/quiz/' . $namaFile;
    }

    // Opsi B
    if ($request->hasFile('gambar_opsi_b')) {

        $file = $request->file('gambar_opsi_b');

        $namaFile = time() . '_b.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads/quiz'), $namaFile);

        $gambarB = 'uploads/quiz/' . $namaFile;
    }

    // Opsi C
    if ($request->hasFile('gambar_opsi_c')) {

        $file = $request->file('gambar_opsi_c');

        $namaFile = time() . '_c.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads/quiz'), $namaFile);

        $gambarC = 'uploads/quiz/' . $namaFile;
    }

    $quiz->update([

        'pertanyaan' => $request->pertanyaan,

        'gambar_soal' => $gambarSoal,
        'audio_soal' => $audioSoal,

        'gambar_opsi_a' => $gambarA,
        'gambar_opsi_b' => $gambarB,
        'gambar_opsi_c' => $gambarC,

        'jawaban_benar' => $request->jawaban_benar

    ]);

    return redirect()->route(
        $quiz->jenis_quiz == 'huruf'
            ? 'quiz.mengeja.data'
            : 'quiz.berhitung.data'
    )->with('success', 'Quiz berhasil diupdate');
    

    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS QUIZ
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {
        $quiz = Quiz::findOrFail($id);

        $quiz->delete();

        return redirect()->back()
            ->with('success', 'Quiz berhasil dihapus');
    }

    public function landingMengeja()
    {
        $murid = \App\Models\Murid::all();

        return view('landing.pages.ayo-mengeja', compact('murid'));
    }
    
    

    /*
    */
public function mulaiQuizMengeja($id, $nomor)
{
    $murid = \App\Models\Murid::findOrFail($id);


    if ($nomor == 1) {


        // Cek nilai quiz lama di session
        $nilaiQuizId = session('nilai_quiz_id');


        // Kalau session kosong ATAU data sudah tidak ada
        if (!$nilaiQuizId || !NilaiQuiz::find($nilaiQuizId)) {


            $nilaiQuiz = NilaiQuiz::create([
                'murid_id' => $id,
                'jenis_quiz' => 'huruf',
                'nilai' => 0
            ]);


            session([
                'nilai_quiz_id' => $nilaiQuiz->id
            ]);

        }


        session()->forget([
            'quiz_huruf',
            'percobaan_huruf'
        ]);
    }



    // Acak soal jika belum ada
    if (!session()->has('quiz_huruf')) {


        $acakSoal = Quiz::where('jenis_quiz', 'huruf')
            ->inRandomOrder()
            ->limit(5)
            ->get();


        session([
            'quiz_huruf' => $acakSoal
        ]);

    }



    $semuaQuiz = session('quiz_huruf');



    if (!isset($semuaQuiz[$nomor - 1])) {


        session()->forget([
            'quiz_huruf',
            'percobaan_huruf'
        ]);


        return redirect()->route('quiz.selesai', $id);

    }



    $quiz = $semuaQuiz[$nomor - 1];


    $totalSoal = $semuaQuiz->count();



    return view(
        'landing.pages.quiz-mengeja-main',
        compact(
            'murid',
            'quiz',
            'nomor',
            'totalSoal'
        )
    );
}

public function cekJawabanMengeja($murid, $nomor, $jawaban)
{

    $semuaQuiz = session('quiz_huruf');


    if(!$semuaQuiz){
        return redirect()->route('quiz.mengeja.main', [$murid,1]);
    }


    $quiz = $semuaQuiz[$nomor - 1];



    $percobaan = session('percobaan_huruf', []);



    if(!isset($percobaan[$quiz->id])){

        $percobaan[$quiz->id] = 1;

    }



    if($jawaban == $quiz->jawaban_benar)
    {


        $jumlahPercobaan = $percobaan[$quiz->id];



        if($jumlahPercobaan == 1){

            $skor = 20;

        }elseif($jumlahPercobaan == 2){

            $skor = 10;

        }else{

            $skor = 0;

        }



        $nilaiQuizId = session('nilai_quiz_id');



        // pastikan nilai quiz masih ada
        if(!$nilaiQuizId || !NilaiQuiz::find($nilaiQuizId)){


            return back()->with([
                'error' => true,
                'message' => 'Data nilai quiz tidak ditemukan'
            ]);

        }

        $cek = DetailNilaiQuiz::where('nilai_quiz_id', $nilaiQuizId)
            ->where('quiz_id', $quiz->id)
            ->exists();

        if($cek){
            return back()->with([
                'success' => true,
                'next' => route('quiz.mengeja.main', [$murid, $nomor + 1])
            ]);
        }

        DetailNilaiQuiz::create([

            'nilai_quiz_id' => $nilaiQuizId,

            'quiz_id' => $quiz->id,

            'percobaan' => $jumlahPercobaan,

            'skor' => $skor

        ]);




        unset($percobaan[$quiz->id]);



        session([
            'percobaan_huruf' => $percobaan
        ]);



        $soalBerikutnya = $nomor + 1;



        if($soalBerikutnya > $semuaQuiz->count())
        {


            $totalNilai = DetailNilaiQuiz::where(
                'nilai_quiz_id',
                $nilaiQuizId
            )->sum('skor');



            NilaiQuiz::where('id',$nilaiQuizId)
            ->update([
                'nilai'=>$totalNilai
            ]);



            session()->forget([
                'quiz_huruf',
                'percobaan_huruf',
                'nilai_quiz_id'
            ]);



            return back()->with([

                'success'=>true,

                'next'=>route('quiz.selesai',$murid)

            ]);

        }



        return back()->with([

            'success'=>true,

            'next'=>route(
                'quiz.mengeja.main',
                [$murid,$soalBerikutnya]
            )

        ]);

    }




    // kalau jawaban salah

    $percobaan[$quiz->id]++;



    session([
        'percobaan_huruf'=>$percobaan
    ]);



    return back()->with([
        'error'=>true
    ]);

}

/*
|--------------------------------------------------------------------------
| LANDING QUIZ BERHITUNG
|--------------------------------------------------------------------------
*/

public function landingBerhitung()
{
    $murid = \App\Models\Murid::all();

    return view('landing.pages.ayo-berhitung', compact('murid'));
}

public function mulaiQuizBerhitung($id, $nomor)
{
    $murid = Murid::findOrFail($id);

    if ($nomor == 1) {

        $nilaiQuizId = session('nilai_quiz_id_berhitung');

        if (!$nilaiQuizId || !NilaiQuiz::find($nilaiQuizId)) {

            $nilaiQuiz = NilaiQuiz::create([
                'murid_id' => $id,
                'jenis_quiz' => 'berhitung',
                'nilai' => 0
            ]);

            session([
                'nilai_quiz_id_berhitung' => $nilaiQuiz->id
            ]);
        }

        session()->forget([
            'quiz_berhitung',
            'percobaan_berhitung'
        ]);
    }

    if (!session()->has('quiz_berhitung')) {

        $acakSoal = Quiz::where('jenis_quiz', 'berhitung')
            ->inRandomOrder()
            ->limit(5)
            ->get();

        session([
            'quiz_berhitung' => $acakSoal
        ]);
    }

    $semuaQuiz = session('quiz_berhitung');

    if (!isset($semuaQuiz[$nomor - 1])) {

        session()->forget([
            'quiz_berhitung',
            'percobaan_berhitung'
        ]);

        return redirect()->route('quiz.berhitung.selesai', $id);
    }

    $quiz = $semuaQuiz[$nomor - 1];

    $totalSoal = $semuaQuiz->count();

    return view(
        'landing.pages.quiz-berhitung-main',
        compact(
            'murid',
            'quiz',
            'nomor',
            'totalSoal'
        )
    );
}

public function cekJawabanBerhitung($murid, $nomor, $jawaban)
{
    $semuaQuiz = session('quiz_berhitung');

    if(!$semuaQuiz){
        return redirect()->route('quiz.berhitung.main', [$murid,1]);
    }

    $quiz = $semuaQuiz[$nomor - 1];

    $percobaan = session('percobaan_berhitung', []);

    if(!isset($percobaan[$quiz->id])){
        $percobaan[$quiz->id] = 1;
    }

    if($jawaban == $quiz->jawaban_benar)
    {
        $jumlahPercobaan = $percobaan[$quiz->id];

        if($jumlahPercobaan == 1){
            $skor = 20;
        }elseif($jumlahPercobaan == 2){
            $skor = 10;
        }else{
            $skor = 0;
        }

        $nilaiQuizId = session('nilai_quiz_id_berhitung');

        if(!$nilaiQuizId || !NilaiQuiz::find($nilaiQuizId)){
            return back()->with([
                'error' => true,
                'message' => 'Data nilai quiz tidak ditemukan'
            ]);
        }

        $cek = DetailNilaiQuiz::where('nilai_quiz_id', $nilaiQuizId)
            ->where('quiz_id', $quiz->id)
            ->exists();


        if($cek){
            return back()->with([
                'success' => true,
                'next' => route('quiz.berhitung.main', [$murid, $nomor + 1])
            ]);
        }

        DetailNilaiQuiz::create([
            'nilai_quiz_id' => $nilaiQuizId,
            'quiz_id' => $quiz->id,
            'percobaan' => $jumlahPercobaan,
            'skor' => $skor
        ]);

        unset($percobaan[$quiz->id]);

        session([
            'percobaan_berhitung' => $percobaan
        ]);

        $soalBerikutnya = $nomor + 1;

        if($soalBerikutnya > $semuaQuiz->count())
        {
            $totalNilai = DetailNilaiQuiz::where(
                'nilai_quiz_id',
                $nilaiQuizId
            )->sum('skor');

            NilaiQuiz::where('id', $nilaiQuizId)
                ->update([
                    'nilai' => $totalNilai
                ]);

            session()->forget([
                'quiz_berhitung',
                'percobaan_berhitung',
                'nilai_quiz_id_berhitung'
            ]);

            return back()->with([
                'success' => true,
                'next' => route('quiz.berhitung.selesai', $murid)
            ]);
        }

        return back()->with([
            'success' => true,
            'next' => route('quiz.berhitung.main', [$murid, $soalBerikutnya])
        ]);
    }

    $percobaan[$quiz->id]++;

    session([
        'percobaan_berhitung' => $percobaan
    ]);

    return back()->with([
        'error' => true
    ]);
}

public function quizBerhitungSelesai($id)
{
    $murid = Murid::findOrFail($id);

    return view('landing.pages.quiz-berhitung-selesai', compact('murid'));
}

}