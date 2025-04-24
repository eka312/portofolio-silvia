<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projek;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projek = projek::all(); 
         return view('projek.data_projek', compact('projek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projek.tambah_projek');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
            'demo_url' => 'nullable|url',
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image_projek'), $namaFile); // simpan di public/image_projek
        } else {
            $namaFile = null;
        }

        // Simpan data ke database
        $projek = projek::create([
            'gambar' => $namaFile,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'demo_url' => $request->demo_url,
        ]);

        return redirect('/data_projek');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // untuk mengambil data projek berdasarkan kolom id_projek
         $projek = projek::findOrFail($id);
         return view('projek.ubah_projek', compact('projek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projek = projek::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'demo_url' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        // Cek jika user upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            $gambarLama = public_path('image_projek/' . $projek->gambar);
            if (file_exists($gambarLama) && $projek->gambar) {
                unlink($gambarLama);
            }
    
            // Simpan gambar baru
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image_projek'), $namaFile);
            $projek->gambar = $namaFile;
        }
    
        // Update data lain
        $projek->judul = $request->judul;
        $projek->deskripsi = $request->deskripsi;
        $projek->demo_url = $request->demo_url;
        $projek->save();
    
        return redirect('/data_projek');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = projek::where('id_projek', $id)->delete();
        
        //setelah terhapus akan dialihkan ke hal data projek
        return redirect('/data_projek');
    }
}
