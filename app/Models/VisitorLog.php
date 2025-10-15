<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    //
    protected $table = 'visitor_log';
    protected $fillable = ['ip_address','user_agent','page_url'];
    public $timestamps = false;
}
