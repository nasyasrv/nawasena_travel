<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'email' => 'required',
            'comment' => 'required|string|max:250',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama kamu harus tertera ya!',
            'email.required' => 'Email harus diisi ya!',
            'comment.required' => 'Komentar harus tertera!',
            'comment.max' => 'komentar maksimal 250 karakter',
        ];
    }
}
