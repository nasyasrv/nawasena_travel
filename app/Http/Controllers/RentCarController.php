<?php
namespace App\Http\Controllers;

use App\Http\Requests\RentCarCreateRequest;

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
