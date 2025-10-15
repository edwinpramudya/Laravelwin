<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;

class PublicKarirController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search'); // ambil query search

        $karirs = Karir::when($search, function($query, $search) {
            return $query->where('jabatan', 'like', "%{$search}%");
        })->get();

        $title = 'karir';

        return view('career', compact('karirs', 'search','title'));
    }
}
