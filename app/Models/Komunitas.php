<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    protected $table = 'komunitas';
    protected $fillable = ['nama', 'deskripsi', 'universitas', 'logo'];
}
