<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiQuiz extends Model
{
    protected $table = 'nilai_quiz';

    protected $fillable = [
        'murid_id',
        'jenis_quiz',
        'nilai'
    ];


    public function murid()
    {
        return $this->belongsTo(Murid::class)->withDefault();
    }


    public function detailNilai()
    {
        return $this->hasMany(DetailNilaiQuiz::class);
    }
}