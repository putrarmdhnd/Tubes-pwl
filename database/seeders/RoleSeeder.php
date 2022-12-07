<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'nama' => 'Admin',
            ],
            [
                'id' => 2,
                'nama' => 'Perawat',
            ],
            [
                'id' => 3,
                'nama' => 'Doktor',
            ]
        ];

        foreach($roles as $key => $role){
            Role::create($role);
        }
    }
}
