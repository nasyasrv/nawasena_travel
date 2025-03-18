<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGaleryRequest extends FormRequest
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
            'name'=> 'required',
            'picture' => 'required|image|mimes:png,jpg,jpeg,svg,webp'
        ];
    }

    public function massage(): array
    {
        return [
            'name.required'=> 'Judul Gambar harus di isi',
            'picture.required'=> 'Gambar tidak boleh kosong',
            'picture.mimes'=> 'Gambar yang boleh diinputkan hanya bertipe png, jpg, svg, jpeg, webp',
        ];
    }
}
