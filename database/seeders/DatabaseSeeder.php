<?php

namespace Database\Seeders;


use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this ->call ([
            CategorySeeder::class,
            CompanySeeder::class,
            JobSeeder::class,
            UserSeeder::class,
        ]);
    }
}
