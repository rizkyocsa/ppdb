<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class CreateRolesSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Admin'
            ],
            [
                'id' => 2,
                'name' => 'Siswa'
            ],
            [
                'id' => 3,
                'name' => 'User'
            ]
        ];

        foreach($roles as $key => $role){
            Role::create($role);
        }
    }
}
