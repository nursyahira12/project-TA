<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quiz';

    protected $fillable = [
        'jenis_quiz',
        'pertanyaan',

        'gambar_soal',
        'audio_soal',

        'gambar_opsi_a',
        'gambar_opsi_b',
        'gambar_opsi_c',

        'jawaban_benar'
    ];
}