<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
          protected $table = 'karir';
    //
    protected $fillable = [
        'jenis_kelamin',
        'jabatan',
        'deskripsi',
        'umur',
    ];   
}
