<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Strukturteam;

class StrukturteamController extends Controller
{
    public function index() {
        $stru = Strukturteam::latest()->get();
        return view('admin.strukturteam.indexstrukturteam', compact('stru'));
    }

    public function create() {
        $stru = Strukturteam::all();
        return view('admin.strukturteam.createstrukturteam', compact('stru'));
    }

    public function store(Request $request) {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Siapkan data kosong
        $data = [];

        // Kalau ada file baru, simpan ke folder
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/team/'), $filename);
            $data['gambar'] = $filename;
        } else {
            $data['gambar'] = null; // biar gak error walau kosong
        }

        Strukturteam::create($data);

        return redirect()->route('admin.strukturteam.index')->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function edit($id) {
        $stru = Strukturteam::findOrFail($id);
        return view('admin.strukturteam.editstrukturteam', compact('stru'));
    }

    public function update(Request $request, $id) {
        $stru = Strukturteam::findOrFail($id);

        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Hanya proses jika ada file baru
        if ($request->hasFile('gambar')) {
            if ($stru->gambar && file_exists(public_path('img/team/' . $stru->gambar))) {
                unlink(public_path('img/team/' . $stru->gambar));
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/team/'), $filename);

            $stru->update(['gambar' => $filename]);
        }

        return redirect()->route('admin.strukturteam.index')->with('success', 'Gambar berhasil diupdate.');
    }

    public function destroy($id) {
        $stru = Strukturteam::findOrFail($id);

        if ($stru->gambar && file_exists(public_path('img/team/'.$stru->gambar))) {
            unlink(public_path('img/team/'.$stru->gambar));
        }

        $stru->delete();

        return redirect()->route('admin.strukturteam.index')->with('success', 'Gambar berhasil dihapus.');
    }
}
