<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;

class PublicVisiController extends Controller
{
    public function index()
    {
        $visim = Visi::all();
        return view('visimisi', compact('visim'));
    }
}
