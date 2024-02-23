<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembacaRequest extends FormRequest
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
            'id_user'=>'required|exists:users,id'
        ];
    }

    public function messages()
    {
        return [
            'id_user.required' => 'User harus diisi',
            'id_user.exists' => 'User tidak ditemukan'
        ];
    }
}
