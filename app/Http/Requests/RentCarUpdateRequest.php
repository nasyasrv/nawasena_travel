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
            'name' => 'required',
            'picture' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp',
            'price' => 'required|numeric',
            'include_driver' => 'required|boolean',
            'excellent_service' => 'required|boolean',
            'include_fuel' => 'required|boolean',
            'include_toll' => 'required|boolean',
            'note' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'nama kendaraan harus di isi',
            'price.required' => 'Harga harus ada',
            'include_driver' => 'pilih include driver atau tidak',
            'excellent_service' => 'pilih excellent service atau tidak',
            'include_fuel' => 'pilih include fuel atau tidak',
            'include_toll' => 'pilih include toll atau tidak',
        ];
    }
}
