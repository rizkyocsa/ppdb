<?php

namespace App\Imports;

use App\Models\Registrasi;
use Maatwebsite\Excel\Concerns\ToModel;
<<<<<<< HEAD
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class RegistrasiImport implements WithHeadingRow, ToModel
=======

class RegistrasiImport implements ToModel
>>>>>>> f8b00f58f20381881d066e2bc930eac97832a5c8
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Registrasi([
<<<<<<< HEAD
            'nama_depan' =>$row ['nama_depan'],
            'nama_belakang' =>$row ['nama_belakang'],
            'alamat' =>$row ['alamat'],
            'tanggal_lahir' =>$row ['tanggal_lahir'],
=======
            //
>>>>>>> f8b00f58f20381881d066e2bc930eac97832a5c8
        ]);
    }
}
