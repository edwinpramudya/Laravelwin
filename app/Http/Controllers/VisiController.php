<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visi;

class VisiController extends Controller
{
    public function index() {
        $visim = visi::all();
        return view('admin.visimisi.indexvisimisi', compact('visim'));
    }

    public function edit($id) {
        $visi = visi::findOrFail($id);
        return view('admin.visimisi.editvisimisi', compact('visi'));
    }

    public function update(Request $request, $id) {
        $visi = visi::findOrFail($id);

        $request->validate([
            'visi' => 'required|string|max:255',
            'misi1' => 'required|string',
            'misi2' => 'required|string',
            'misi3' => 'required|string',
        ]);

        $data = $request->only('visi','misi1','misi2','misi3');

        $visi->update($data);

        return redirect()->route('admin.visimisi.index')->with('success','visi dan misi berhasil diupdate.');
    }
}
