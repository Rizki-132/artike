<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.berita.tabel');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.berita.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //Validasi input
        $validated = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048', // maksimum ukuran 2mb
            'judul' => 'required|string|unique:beritas,judul',
            'kategori_id' => 'required|integer|exists:kategori,id', //pastikan kategori valid
            'desk_singkat' => 'required|string|max:500',
            'desk_detail' => 'required|string',
        ]);
 
        $path = $request->file('gambar')->store('berita', 'public');


       Berita::create([
            'judul' => $validated['judul'],
            'kategori_id' => $validated['kategori_id'],
            'desk_singkat' => $validated['desk_singkat'],
            'desk_detail' => $validated['desk_detail'],
            'gambar' => $path,
        ]);
        
        return redirect()->route('berita.index')->with('succes','Berita berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $berita = Berita::whereRaw("LOWER(REPLACE(judul, ' ', '-')) = ?", [strtolower($slug)])->firstOrFail();
        // return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
