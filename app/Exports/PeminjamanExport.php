<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeminjamanExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Peminjaman::get();
    }
    public function map($row): array
    {
        return [
            $row->user->nama_lengkap,
            $row->tanggal_peminjaman,
            $row->tanggal_pengembalian,
            $row->status_peminjaman == null ? "Menunggu" : $row->status_peminjaman,
            $row->created_at
        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Tgl. Peminjaman',
            'Tgl. Pengembalian',
            'Status Peminjaman',
            'Created At'
        ];
    }
}
