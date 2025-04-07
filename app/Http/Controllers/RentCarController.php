<?php
namespace App\Http\Controllers;

use App\Http\Requests\RentCarCreateRequest;
use App\Http\Requests\RentCarUpdateRequest;
use App\Models\rentCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RentCarController extends Controller
{
    public function index()
    {
        $rent = rentCar::all();
        return view('admin.rent' ,compact('rent'));
    }

    public function create()
    {
        return view('admin.rent');
    }

    public function store(RentCarCreateRequest $request)
    {
        try {
            $validatedData = $request->validated();

            if ($request->hasFile('picture')) {
                $validatedData['picture'] = $request->file('picture')->store('car', 'public');
            }

            rentCar::create($validatedData);

            return back()->with('success', 'Kendaraan berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $th->getMessage()]);
        }
    }


    public function show(rentCar $Rent_Car){
        return view ('admin.rent', compact('rent'));
    }

    public function edit(rentCar $Rent_Car, $id){
        return view ('admin.rent', compact('rent'));
    }

  public function update(RentCarUpdateRequest $request, $id)
{
    try {
        // Pastikan model ditemukan, jika tidak akan melempar 404
        $rentCar = rentCar::findOrFail($id);

        $oldPicturePath = $rentCar->picture;
        $dataToUpdate = $request->validated();

        if ($request->hasFile('picture_update')) {
            $picture = $request->file('picture_update');
            $path = $picture->store('pictures', 'public');
            $dataToUpdate['picture'] = $path;
        }

        // Gunakan forceFill untuk memastikan update berjalan
        $updated = $rentCar->forceFill($dataToUpdate)->save();

        // Hapus gambar lama jika ada gambar baru yang diunggah
        if ($updated && isset($dataToUpdate['picture']) && $oldPicturePath) {
            if (Storage::disk('public')->exists($oldPicturePath)) {
                Storage::disk('public')->delete($oldPicturePath);
            }
        }

        if ($request->ajax()) {
            return response()->json(['message' => 'Sukses mengubah data'], 200);
        } else {
            return redirect()->back()->with('success', 'Sewa Mobil berhasil diupdate');
        }
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json(['error' => 'Data tidak ditemukan'], 404);
    } catch (\Throwable $th) {
        return response()->json(['error' => $th->getMessage()], 500);
    }
}



    public function destroy(rentCar $Rent_Car, $id)
    {
        $Rent_Car = rentCar::findOrFail($id);
        try {
            if ($Rent_Car->picture) {
                Storage::disk('public')->delete($Rent_Car->picture);
            }
            $Rent_Car->delete();
            return back()->with('success', 'Kendaraan berhasil dihapus.');
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $th->getMessage()]);
        }
    }
}
