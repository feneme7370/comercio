<?php

namespace Database\Seeders\Base;

use App\Models\Base\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create(['name' => 'admin']);
        Rol::create(['name' => 'usuario']);
        Rol::create(['name' => 'cliente']); 
    }
}
