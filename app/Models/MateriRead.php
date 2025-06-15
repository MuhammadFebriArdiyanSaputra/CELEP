<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriRead extends Model
{
    protected $table = 'materi_read';
    protected $fillable = [
        'user_id',
        'level',
        'sub_level',
    ];
}
