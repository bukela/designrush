<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'IT Services', 'slug' => 'it-services'],
            ['name' => 'Health & Wellness', 'slug' => 'health'],
            ['name' => 'Construction', 'slug' => 'construction'],
            ['name' => 'Education', 'slug' => 'education'],
            ['name' => 'Automotive', 'slug' => 'automotive'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
