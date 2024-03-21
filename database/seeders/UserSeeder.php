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

                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('a'),
                'level' => 1,
            ],
            [
                'name' => 'Kasir',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('a'),
                'level' => 2
            ],
            [
                'name' => 'Owner',
                'email' => 'owner@gmail.com',
                'password' => bcrypt('a'),
                'level' => 3
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
