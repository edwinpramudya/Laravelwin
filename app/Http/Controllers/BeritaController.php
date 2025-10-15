<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index() {
        $news = Berita::latest()->get();
        return view('admin.berita.indexberita', compact('news'));
    }

    public function create() {
        return view('admin.berita.createberita');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'tanggal' => 'required|date',
        ]);

        $data = $request->only('judul','isi','tanggal');

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('img/berita/'), $filename);
            $data['gambar'] = $filename;
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success','Berita berhasil ditambahkan.');
    }

    public function edit($id) {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.editberita', compact('berita'));
    }

    public function update(Request $request, $id) {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'tanggal' => 'required|date',
        ]);

        $data = $request->only('judul','isi','tanggal');

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && file_exists(public_path('img/berita/'.$berita->gambar))) {
                unlink(public_path('img/berita/'.$berita->gambar));
            }
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('img/berita/'), $filename);
            $data['gambar'] = $filename;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success','Berita berhasil diupdate.');
    }

    public function destroy($id) {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && file_exists(public_path('img/berita/'.$berita->gambar))) {
            unlink(public_path('img/berita/'.$berita->gambar));
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success','Berita berhasil dihapus.');
    }
}
