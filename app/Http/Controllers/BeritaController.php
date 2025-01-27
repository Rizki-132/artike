<?php

namespace App\Http\Controllers;
use App\Models\Berita;
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
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi input
        $validateDa = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048', // maksimum ukuran 2mb
            'judul' => 'required|string|max:255',
            'kategori_id' => 'required|integer|exists:kategori,id', //pastikan kategori valid
            'desk_singkat' => 'required|string|max:500',
            'desk_detail' => 'required|string',
        ]);

        //proses upload gambar
        if ($request->hasFile('gambar')){
            $fileName = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('uploads/berita', $fileName, 'public');
            $validatedData['gambar'] = $path; // Tambahkan path ke array data yang tervalidasi
        }

        Berita::create($validatedData);

        return redirect()->route('admin.berita.tabel')->with('succes','Berita berhasil di tambahkan');
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
