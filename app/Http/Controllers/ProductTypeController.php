<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Product;

class ProductTypeController extends Controller
{
    public function index() {
        $types = ProductType::with('product')->get();
        return view('admin.produk.indexproducttypes', compact('types'));
    }

    public function create() {
        $products = Product::all();
        return view('admin.produk.createproducttypes', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'pdf' => 'nullable|file|mimes:pdf|max:5120', // <= 5MB
        ]);

        $data = $request->only('product_id', 'nama');

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('img/produk/'), $filename);
            $data['gambar'] = $filename;
        }

        // Upload PDF
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdfName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('pdf/produk/'), $pdfName);
            $data['pdf'] = $pdfName;
        }

        ProductType::create($data);

        return redirect()->route('admin.product-types.index')->with('success', 'Type berhasil ditambahkan.');
    }

    public function edit($id) {
        $type = ProductType::findOrFail($id);
        $products = Product::all();
        return view('admin.produk.editproducttypes', compact('type', 'products'));
    }

    public function update(Request $request, $id) {
        $type = ProductType::findOrFail($id);

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'pdf' => 'nullable|file|mimes:pdf|max:5120', // <= 5MB
        ]);

        $data = $request->only('product_id', 'nama');

        // Update gambar
        if ($request->hasFile('gambar')) {
            if ($type->gambar && file_exists(public_path('img/produk/'.$type->gambar))) {
                unlink(public_path('img/produk/'.$type->gambar));
            }
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('img/produk/'), $filename);
            $data['gambar'] = $filename;
        }

        // Update PDF
        if ($request->hasFile('pdf')) {
            if ($type->pdf && file_exists(public_path('pdf/produk/'.$type->pdf))) {
                unlink(public_path('pdf/produk/'.$type->pdf));
            }
            $file = $request->file('pdf');
            $pdfName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('pdf/produk/'), $pdfName);
            $data['pdf'] = $pdfName;
        }

        $type->update($data);

        return redirect()->route('admin.product-types.index')->with('success', 'Type berhasil diupdate.');
    }

    public function destroy($id) {
        $type = ProductType::findOrFail($id);

        // Hapus gambar
        if ($type->gambar && file_exists(public_path('img/produk/'.$type->gambar))) {
            unlink(public_path('img/produk/'.$type->gambar));
        }

        // Hapus PDF
        if ($type->pdf && file_exists(public_path('pdf/produk/'.$type->pdf))) {
            unlink(public_path('pdf/produk/'.$type->pdf));
        }

        $type->delete();

        return redirect()->route('admin.product-types.index')->with('success', 'Type berhasil dihapus.');
    }
}
