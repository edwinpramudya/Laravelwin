<?php

use App\Models\Product;
use App\Models\Berita;
use App\Models\ProductType;
use App\Models\Karir;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController; 
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PublicProductController;
use App\Http\Controllers\PublicKarirController;
use App\Http\Controllers\StrukturteamController;
use App\Http\Controllers\PublicVisiController;
use App\Http\Controllers\PublicKontakController;
use App\Http\Controllers\PublicCompanyController;
use App\Http\Controllers\PublicStrukturteamController;
use App\Http\Controllers\PublicBeritaController;
use App\Http\Middleware\LogVisitor;


Route::middleware([LogVisitor::class])->group(function () {

    Route::get('/', function () {
        $products = Product::all();
        $news = Berita::latest()->take(6)->get();
        return view('home', [
            'title' => 'Hayyu pratama dealer',
            'products' => $products,
            'news' => $news,
        ]);
    });

    // Route detail berita
    Route::get('/news/{id}', function ($id) {
        $new = Berita::findOrFail($id);
        $recent = Berita::where('id', '!=', $id)->latest()->take(5)->get();
        return view('news-detail', [
            'title' => 'News Detail',
            'new' => $new,
            'recent' => $recent
        ]);
    })->name('news.show');

    // Karir
    Route::get('/karir/{id}', function ($id) {
        $karirs = Karir::findOrFail($id);
        $detail = Karir::where('id', '!=', $id)->latest()->get();
        return view('detail-karir', [
            'title' => 'Detail Karir',
            'karirs' => $karirs,
            'detail' => $detail,
        ]);
    });

    // Route produk
    Route::get('/product/{id}', function ($id) {
        $product = Product::with('types')->findOrFail($id);
        return view('product-detail', [
            'title' => $product->nama,
            'product' => $product,
            'types' => $product->types
        ]);
    })->name('product.show');

    // All products
    Route::get('/all-products', [PublicProductController::class, 'allProducts'])->name('products.index');
    Route::get('/products', function () {
        $products = Product::with('types')->get();
        return view('allproduct', [
            'title' => 'Products',
            'products' => $products
        ]);
    })->name('products.index');

    // Halaman publik
    Route::get('/visimisi', [PublicVisiController::class, 'index'])->name('visimisi.index');
    Route::get('/career', [PublicKarirController::class, 'index'])->name('career.index');
    Route::get('/contact', [PublicKontakController::class, 'index'])->name('contact.index');
    Route::get('/companyoverview', [PublicCompanyController::class, 'index'])->name('companyoverview.index');
    Route::get('/teamstructure', [PublicStrukturteamController::class, 'index'])->name('teamstructure.index');
    Route::get('/news', [PublicBeritaController::class, 'index'])->name('news.index');

    // Detail jenis produk
    Route::get('/models/{id}', function ($id) {
        $type = ProductType::findOrFail($id);
        return view('Product-Lebih-detail', ['type' => $type]);
    })->name('models.detail');
});

// Route Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Admin (pakai AdminController)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard'); // ✅ tambah name
    
    // Route untuk melihat detail visitors
    Route::get('/visitors', [AdminController::class, 'visitors'])->name('visitors'); // ✅ tambah route baru

    Route::resource('product-types', ProductTypeController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('visimisi', VisiController::class);
    Route::resource('karir', KarirController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('strukturteam', StrukturteamController::class);
});