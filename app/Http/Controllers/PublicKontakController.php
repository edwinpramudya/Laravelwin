<?php

namespace App\Http\Controllers;

use App\Models\Kontak;

class PublicKontakController extends Controller
{
    public function index()
    {
        $kont = Kontak::all();
        return view('contact',[
            'title' => 'kontak',
            'kont' => $kont,
        ]);
    }
}
