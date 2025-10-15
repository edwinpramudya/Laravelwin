<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;

class PublicBeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search'); // ambil keyword dari input

        $news = Berita::when($query, function ($q) use ($query) {
            $q->where('judul', 'like', "%{$query}%")
              ->orWhere('isi', 'like', "%{$query}%");
        })
        ->latest()
        ->get();

        return view('news', [
            'title' => 'News',
            'news' => $news,
            'search' => $query
        ]);
    }
}
