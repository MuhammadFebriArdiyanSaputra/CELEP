<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatihanScore extends Model
{
    protected $fillable = [
        'user_id',
        'level',
        'jumlah_benar',
        'jumlah_soal',
        'skor',
    ];
}
