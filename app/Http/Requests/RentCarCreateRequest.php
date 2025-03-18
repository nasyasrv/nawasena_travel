<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentCarCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'picture' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'price' => 'required|numeric',
            'include_driver' => 'required|boolean',
            'excellent_service' => 'required|boolean',
            'include_fuel' => 'required|boolean',
            'include_toll' => 'required|boolean',
            'note' => 'nullable|string|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama kendaraan wajib diisi.',
            'picture.required' => 'Foto kendaraan wajib diunggah.',
            'picture.image' => 'File harus berupa gambar.',
            'picture.mimes' => 'Format gambar harus png, jpg, jpeg, svg, atau webp.',
            'price.required' => 'Harga kendaraan wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
            'include_driver.required' => 'Pilih apakah kendaraan termasuk driver.',
            'excellent_service.required' => 'Pilih apakah layanan kendaraan sangat baik.',
            'include_fuel.required' => 'Pilih apakah bahan bakar sudah termasuk.',
            'include_toll.required' => 'Pilih apakah biaya tol sudah termasuk.',
        ];
    }
}
