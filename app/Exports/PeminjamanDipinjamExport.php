<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\FromCollection;

class PeminjamanDipinjamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Peminjaman::where('status_peminjaman', 'dipinjam')->all();
    }
}
