<?php

namespace Database\Seeders\Base;

use App\Models\Base\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Malatini',
            'email' => 'malatini@gmail.com.ar',
            'phone' => '2396513953',
            'adress' => 'Av. Maya 256',
            'city' => 'pehuajo',
            'status' => true,
            'social' => '{"facebook":"facebook.com","twitter":"twiter.com","instagram":"instagram.com","youtube":"youtube.com","tiktok":"tiktok.com"}'
        ]);
        Team::factory(20)->create();
    }
}
