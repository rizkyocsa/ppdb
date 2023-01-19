<?php

namespace App\Exports;

use App\Models\Registrasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RegistrasiExport implements FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        return Registrasi::getDataRegistrasi();
    }
    public function headings(): array
    {
        return [
            'nama_depan',
            'nama_belakang',
            'alamat',
            'tanggal_lahir'
        ];
    }
}
