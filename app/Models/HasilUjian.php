<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    use HasFactory;
    protected $table = 'hasil_ujian';
    
    protected $fillable = [
        'user_id',
        'nilai'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
