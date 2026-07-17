<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NilaiQuiz;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'murid';

    protected $fillable = [
        'nama',
        'kelas',
        'jenis_kelamin'
    ];

    public function nilaiQuiz()
    {
        return $this->hasMany(NilaiQuiz::class);
    }
}