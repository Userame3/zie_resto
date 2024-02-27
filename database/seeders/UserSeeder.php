<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{

    public function run()
    {
        $user = [
            [

                'nama' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('a'),
                'level' => 1,
            ],
            [
                'nama' => 'Kasir1',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('a'),
                'level' => 2
            ],
            [
                'nama' => 'Kasir2',
                'email' => 'kasir2@gmail.com',
                'password' => bcrypt('a'),
                'level' => 2
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
