<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriHuruf extends Model
{
    protected $fillable = [
        'huruf',
        'gambar',
        'audio'
    ];
}