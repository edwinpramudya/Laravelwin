<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class PublicProductController extends Controller
{
    // Method untuk All Products
    public function allProducts(Request $request) 
    {
        $search = $request->search;
        
        // Ambil SEMUA ProductType (anak) dari semua Product (parent)
        $types = ProductType::with('product')
            ->when($search, function($query, $search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->get();
        
        return view('allproduct', [
            'title' => 'All Products',
            'types' => $types
        ]);
    }
}