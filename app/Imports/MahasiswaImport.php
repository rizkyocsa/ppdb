<?php

namespace App\Imports;

use App\Models\mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mahasiswa([
            'NPM' => $row['NPM'],
            'nama' => $row['nama'], 
            'kelas' => $row['kelas'],
            'angkatan' => $row['angkatan'],
            'prodi' => $row['prodi'],
        ]);
    }
}
