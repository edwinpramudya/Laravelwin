<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index() {
        $kontaks = kontak::all();
        return view('admin.kontak.indexkontak', compact('kontaks'));
    }

    public function edit($id) {
        $kontaks = kontak::findOrFail($id);
        return view('admin.kontak.editkontak', compact('kontaks'));
    }

    public function update(Request $request, $id) {
        $kontaks = kontak::findOrFail($id);

        $request->validate([
            'email' => 'required|string|max:255',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $data = $request->only('email','no_hp','alamat');

        $kontaks->update($data);

        return redirect()->route('admin.kontak.index')->with('success','kontak berhasil diupdate.');
    }
}
