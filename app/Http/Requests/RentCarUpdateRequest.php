<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentCarUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|integer|min:0',
            'seat' => 'required|integer|min:1',
            'car_driver' => 'boolean',
            'vvip_service' => 'boolean',
            'flexible' => 'boolean',
            'private_luxuryclass' => 'boolean',
            'day_service' => 'required|integer|min:1',
            'hotel_travelticket' => 'boolean',
            'bbm_toll_park_crossing' => 'boolean',
            'note' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama mobil wajib diisi.',
            'name.string' => 'Nama mobil harus berupa teks.',
            'name.max' => 'Nama mobil maksimal 255 karakter.',

            'picture.required' => 'Gambar mobil wajib diunggah.',
            'picture.image' => 'File harus berupa gambar.',
            'picture.mimes' => 'Gambar harus berformat jpeg, png, atau jpg.',
            'picture.max' => 'Ukuran gambar maksimal 2MB.',

            'price.required' => 'Harga sewa wajib diisi.',
            'price.integer' => 'Harga sewa harus berupa angka.',
            'price.min' => 'Harga sewa tidak boleh negatif.',

            'seat.required' => 'Jumlah kursi wajib diisi.',
            'seat.integer' => 'Jumlah kursi harus berupa angka.',
            'seat.min' => 'Jumlah kursi minimal 1.',

            'car_driver.boolean' => 'Format sopir harus berupa true atau false.',
            'vvip_service.boolean' => 'Format VVIP Service harus berupa true atau false.',
            'flexible.boolean' => 'Format Flexibel harus berupa true atau false.',
            'private_luxuryclass.boolean' => 'Format Private Luxury Class harus berupa true atau false.',

            'day_service.required' => 'Jumlah hari Day Service wajib diisi.',
            'day_service.integer' => 'Jumlah hari Day Service harus berupa angka.',
            'day_service.min' => 'Jumlah hari Day Service minimal 1.',

            'hotel_travelticket.boolean' => 'Format Hotel & Travel Ticket harus berupa true atau false.',
            'bbm_toll_park_crossing.boolean' => 'Format BBM, Tol, Parkir & Penyeberangan harus berupa true atau false.',

            'note.string' => 'Catatan harus berupa teks.',
        ];
    }
}
