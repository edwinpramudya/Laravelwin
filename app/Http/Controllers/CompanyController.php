<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index() {
        $comp = Company::latest()->get();
        return view('admin.company.indexcompany', compact('comp'));
    }

    public function create() {
        $comp = Company::all();
        return view('admin.company.createcompany', compact('comp'));
    }

    public function store(Request $request) {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = [];


        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('img/company/'), $filename);
            $data['gambar'] = $filename;
        }

        Company::create($data);

        return redirect()->route('admin.company.index')->with('success', 'Gambar berhasil ditambahkan.');
    }
    
    public function edit($id) {
        $comp = Company::findOrFail($id);
        return view('admin.company.editcompany', compact('comp'));
    }

    public function update(Request $request, $id) {
        $comp = Company::findOrFail($id);

        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Hanya proses jika ada file baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($comp->gambar && file_exists(public_path('img/company/' . $comp->gambar))) {
                unlink(public_path('img/company/' . $comp->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/company/'), $filename);

            // Update hanya kolom gambar
            $comp->update(['gambar' => $filename]);
        }

        return redirect()->route('admin.company.index')->with('success', 'Gambar berhasil diupdate.');
    }


    public function destroy($id) {
        $comp = Company::findOrFail($id);

        if ($comp->gambar && file_exists(public_path('img/team/'.$comp->gambar))) {
            unlink(public_path('img/team/'.$comp->gambar));
        }

        $comp->delete();

        return redirect()->route('admin.company.index')->with('success', 'Gambar berhasil dihapus.');
    }
}
