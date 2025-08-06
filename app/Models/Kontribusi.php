<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontribusi extends Model
{
    use HasFactory;

    protected $table = 'kontribusi';

    protected $fillable = [
        'nama',
        'email',
        'jenis',
        'judul',
        'isi',
    ];
}
