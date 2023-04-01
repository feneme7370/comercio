<?php

namespace Database\Seeders\Base;

use App\Models\Base\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['type' => '1', 'name' => 'alquiler','description' => 'la descripcion']);
        Category::create(['type' => '2', 'name' => 'compra','description' => 'la descripcion']);
        Category::create(['type' => '2', 'name' => 'venta','description' => 'la descripcion']);
    }
}
