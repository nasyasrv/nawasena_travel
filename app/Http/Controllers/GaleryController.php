<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditGaleryRequest;
use App\Http\Requests\StoreGaleryRequest;
use App\Models\galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = galery::all();
        return view('admin.galery',compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.galery', compact('galery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleryRequest $request)
    {
        try {
            $existingCount = Galery::count();

            if ($existingCount >= 12) {
                return back()->with('error', 'Maaf, sudah ada 12 gambar. Anda harus menghapus salah satu foto untuk menambahkan yang baru.');
            }

            Galery::create([
                'name' => $request->name,
                'picture' => $request->file('picture')->store('pictures', 'public'),
            ]);

            return back()->with('success', 'Gambar berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $th->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(galery $galery)
    {

        return view('admin.galery',compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(galery $galery, $id)
    {

        return view('admin.galery',compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     */public function update(EditGaleryRequest $request, Galery $galery)
{
    try {
        // Simpan path gambar lama
        $oldPicturePath = $galery->picture;

        // Data untuk di-update
        $dataToUpdate = [
            'name' => $request->input('name'),
        ];

        // Jika ada file baru diunggah
        if ($request->hasFile('picture_update')) {
            $picture = $request->file('picture_update');
            $path = $picture->store('pictures', 'public');
            $dataToUpdate['picture'] = $path;
        }

        // Update data galeri
        $galery->update($dataToUpdate);

        // Hapus file lama jika ada file baru diunggah
        if (isset($dataToUpdate['picture']) && $oldPicturePath) {
            Storage::disk('public')->delete($oldPicturePath);
        }

        // Respon untuk AJAX atau biasa
        if ($request->ajax()) {
            return response()->json(['message' => 'Sukses mengubah data'], 200);
        } else {
            return redirect()->back()->with('success', 'Gambar berhasil diperbarui');
        }
    } catch (\Throwable $th) {
        // Tangani error
        if ($request->ajax()) {
            return response()->json(['error' => $th->getMessage()], 500);
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);
        }
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, galery $galery)
    {
        try{
            if (Storage::disk('public')->exists($galery->picture)){
                Storage::disk('public')->delete( $galery->picture);
            }

            $galery->delete();

            if ($request->ajax()) {
                return response("Sukses menghapus data");
            } else {
                return redirect()->route('galery.index')->with('success', 'Gambar berhasil dihapus');
            }
        }catch(\Throwable $th){

        }
    }
}
