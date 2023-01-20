<?php

namespace App\Exports;

use App\Models\Registrasi;
use Maatwebsite\Excel\Concerns\FromCollection;
<<<<<<< HEAD
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RegistrasiExport implements FromArray, WithHeadings, ShouldAutoSize
=======

class RegistrasiExport implements FromCollection
>>>>>>> f8b00f58f20381881d066e2bc930eac97832a5c8
{
    /**
    * @return \Illuminate\Support\Collection
    */
<<<<<<< HEAD
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
=======
    public function collection()
    {
        return Registrasi::all();
>>>>>>> f8b00f58f20381881d066e2bc930eac97832a5c8
    }
}
