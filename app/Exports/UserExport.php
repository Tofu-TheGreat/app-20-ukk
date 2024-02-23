<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'NIK',
            'Username',
            'Email',
            'Nama Lengkap',
            'Jenis Kelamin',
            'Nomor Hp',
            'Alamat',
            'Role',
            "",
            "Tanggal Ditambahkan",
            "Tanggal Terakhir Di-Update",
        ];
    }
}
