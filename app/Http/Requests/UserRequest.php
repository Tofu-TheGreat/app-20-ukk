<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class UserRequest extends FormRequest
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
        $return =  [
            'nik' => 'required|min:16|max:16|unique:users,nik,' . $this->input(['id']) . ',id',
            'username' => 'required|max:25|unique:users,username,' . $this->input(['id']) . ',id',
            'email' => 'required|email|max:50|unique:users,email,' . $this->input(['id']) . ',id',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required|min:12|max:13|unique:users,nomor_telepon,' . $this->input(['id']) . ',id',
            'alamat' => 'required',
        ];
        if($this->isMethod('post')){
            $return['password'] = 'required|min:8';
            $return['confirm_password'] = 'required|same:password';
        }

        return $return;
    }

    public function messages(): array
    {
        return [
            'nik.required' => 'NIK harus diisi',
            'nik.min' => 'NIK minimal 16 karakter',
            'nik.max' => 'NIK maksimal 16 karakter',
            'nik.unique' => 'NIK sudah terdaftar',
            'username.required' => 'Username harus diisi',
            'username.max' => 'Username maksimal 25 karakter',
            'username.unique' => 'Username sudah terdaftar',
            'email.required' => 'Email harus diisi',
            'email.max' => 'Email maksimal 50 karakter',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'nama_lengkap.required' => 'Nama harus diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            'nomor_telepon.required' => 'Nomor Telepon harus diisi',
            'nomor_telepon.min' => 'Nomor Telepon minimal 12 karakter',
            'nomor_telepon.max' => 'Nomor Telepon maksimal 13 karakter',
            'confirm_password.same' => 'Password tidak sama',
            'confirm_password.required' => 'Password harus diisi',
            'alamat.required' => 'Alamat harus diisi',
        ];
    }
}
