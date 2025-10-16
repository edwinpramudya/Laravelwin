<?php

namespace App\Http\Controllers;

use App\Models\Kontak;

class PublicKontakController extends Controller
{
    public function index()
    {
        $kont = Kontak::first();
        return view('contact',[
            'title' => 'kontak',
            'kont' => $kont,
        ]);
    }
}
