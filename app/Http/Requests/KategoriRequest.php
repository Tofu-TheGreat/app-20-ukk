<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
            'nama_kategori' => 'required|unique:kategori,nama_kategori,' . $this->input(['id_kategori']) . ',id_kategori'
        ];
    }

    public function messages(){
        return [
            'nama_kategori.required' => 'Kategori harus diisi',
            'nama_kategori.unique' => 'Kategori sudah terdaftar'
        ];
    }
}
