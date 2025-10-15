<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class PublicCompanyController extends Controller
{
    public function index()
    {
        $comp = Company::all();
        return view('companyoverview', compact('comp'));
    }
}
