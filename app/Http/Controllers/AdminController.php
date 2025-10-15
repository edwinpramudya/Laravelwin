<?php

namespace App\Http\Controllers;

use App\Models\VisitorLog;

class AdminController extends Controller
{
    public function index()
    {
        $totalVisitors = VisitorLog::count();
        $recentVisitors = VisitorLog::latest()->take(5)->get();
        return view('admin.index', compact('totalVisitors', 'recentVisitors'));
    }

    public function visitors()
    {
        $visitors = VisitorLog::latest()->paginate(20);
        return view('admin.visitor', compact('visitors'));
    }
}