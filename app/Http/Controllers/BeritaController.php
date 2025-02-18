<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.tabel', compact('berita'));
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
        // dd($request);
        $validated = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|unique:beritas,judul|max:255',
            'kategori_id' => 'required|exists:kategoris,id',
            'desk_singkat' => 'required',
            'desk_detail' => 'required',
        ],
    );
    
        // Buat slug unik dari judul
        $slug = Str::slug($validated['judul']);
    
        // Handle Upload Gambar
     
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '-' . Str::slug($file->getClientOriginalName()); // Nama unik
            $file->move(public_path('uploads/berita'), $filename); // Simpan ke folder public/uploads/berita
            $imagePath = 'uploads/berita/' . $filename;
        } else {
            $imagePath = null;
        }
    
        // Simpan ke database
        Berita::create([
            'judul' => $validated['judul'],
            'slug' => $slug,
            'kategori_id' => $validated['kategori_id'],
            'desk_singkat' => $validated['desk_singkat'],
            'desk_detail' => $validated['desk_detail'],
            'gambar' => $imagePath,
        ]);
      
    
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
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
