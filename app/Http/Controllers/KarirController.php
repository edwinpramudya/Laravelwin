<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;

class KarirController extends Controller
{
    public function index() {
        $karirs = Karir::all();
        return view('admin.karir.indexkarir', compact('karirs'));
    }

    public function create() {
        return view('admin.karir.createkarir');
    }

    public function store(Request $request) {
        $request->validate([
            'jenis_kelamin' => 'required|string',
            'jabatan' => 'required|string',
            'deskripsi' => 'required|string',
            'umur' => 'required|integer',
        ]);

        $data = $request->only('jenis_kelamin','jabatan','deskripsi','umur');

        Karir::create($data);

        return redirect()->route('admin.karir.index')->with('success','Karir erhasil ditambahkan.');
    }

    public function edit($id) {
        $karir = Karir::findOrFail($id);
        return view('admin.karir.editkarir', compact('karir'));
    }

    public function update(Request $request, $id) {
        $karir = Karir::findOrFail($id);

        $request->validate([
            'jenis_kelamin' => 'required|string',
            'jabatan' => 'required|string',
            'deskripsi' => 'required|string',
            'umur' => 'required|integer',
        ]);

        $data = $request->only('jenis_kelamin','jabatan','deskripsi','umur');

        $karir->update($data);

        return redirect()->route('admin.karir.index')->with('success','Karir berhasil diupdate.');
    }

    public function destroy($id) {
        $karir = Karir::findOrFail($id);

        $karir->delete();

        return redirect()->route('admin.karir.index')->with('success','Karir berhasil dihapus.');
    }
}
