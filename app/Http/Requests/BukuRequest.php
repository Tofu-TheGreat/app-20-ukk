<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
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
        $return = [
            'judul_buku' => 'required|max:100',
            'sinopsis_buku' => 'required',
            'penulis_buku' => 'required',
            'stok_buku' => 'required|min:1',
            'penerbit' => 'required',
        ];

        if($this->isMethod('post')){
            $return['id_kategori'] = 'required';
            $return['tahun_terbit'] = 'required';
            $return['sampul_buku'] = 'required';
        }

        return $return;
    }

    public function messages()
    {
        return [
            'judul_buku.required' => 'Judul harus diisi',
            'id_kategori.required' => 'Kategori harus diis',
            'sinopsis_buku.required' => 'Sinopsis harus diisi',
            'penulis_buku.required' => 'Penulis harus diisi',
            'stok_buku.required' => 'Stok harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun_terbit.required' => 'Tahun Terbit harus diisi',
            'sampul_buku.required' => 'Sampul harus diisi',
        ];
    }
}
