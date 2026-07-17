<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailNilaiQuiz extends Model
{
    protected $table = 'detail_nilai_quiz';


    protected $fillable = [
        'nilai_quiz_id',
        'quiz_id',
        'percobaan',
        'skor'
    ];


    public function nilaiQuiz()
    {
        return $this->belongsTo(NilaiQuiz::class);
    }


    public function quiz()
    {
        return $this->belongsTo(Quiz::class)->withDefault();
    }
}