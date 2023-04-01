<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin\Property;
use App\Models\Admin\Seller;
use Illuminate\Database\Seeder;
use Database\Seeders\Base\RolSeeder;
use Database\Seeders\Base\TeamSeeder;
use Database\Seeders\Base\UserSeeder;
use Database\Seeders\Base\CategorySeeder;
use Database\Seeders\Base\PropertySeeder;
use Database\Seeders\Base\SellerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolSeeder::class,
            TeamSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            SellerSeeder::class,
            PropertySeeder::class,
            
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
