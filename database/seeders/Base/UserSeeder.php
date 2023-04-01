<?php

namespace Database\Seeders\Base;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'federico',
            'last_name' => 'marasco',
            'email' => 'marascofederico95@gmail.com',
            'password' => '$2y$10$H3y0R1g78fkWWKNb.rftQ.M4sbnVroGD5WrpVBCv2UK2eiNtw/Mg6',
            'document' => '38916700',
            'adress' => 'arenales 356',
            'phone' => '2396513953',
            'status' => true,
            'rol_id' => '1',
            'team_id' => '1',
        ]);
    }
}
