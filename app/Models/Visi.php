<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    protected $table = 'visi';
    //
    protected $fillable = [
        'visi',
        'misi1',
        'misi2',
        'misi3',
    ];   
}
