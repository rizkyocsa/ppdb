<?php

namespace App\Imports;

use App\Models\Registrasi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class RegistrasiImport implements WithHeadingRow, ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Registrasi([
            'nama_depan' =>$row ['nama_depan'],
            'nama_belakang' =>$row ['nama_belakang'],
            'alamat' =>$row ['alamat'],
            'tanggal_lahir' =>$row ['tanggal_lahir'],
        ]);
    }
}
