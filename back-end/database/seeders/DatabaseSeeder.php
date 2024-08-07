<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
/*        Admin::factory(4)->create();*/
/*        User::factory(20)->create();*/
/*        Category::factory(10)->create();*/
        Product::factory(30)->create();
    }
}
