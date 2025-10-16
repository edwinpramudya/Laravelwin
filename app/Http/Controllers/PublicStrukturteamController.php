<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Strukturteam;
class PublicStrukturteamController extends Controller
{
      public function index()
    {
        $stru = Strukturteam::first();
        return view('teamstructure', compact('stru'));
    }
}
