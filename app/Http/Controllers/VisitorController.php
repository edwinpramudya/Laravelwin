<?php

namespace App\Http\Controllers;

use App\Models\VisitorLog;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = VisitorLog::orderBy('visited_at', 'desc')->paginate(20);
        return view('admin.index', compact('visitors'));
    }
}