<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Breakfasts', 'Salads', 'Drinks', 'Desserts', 'Main Courses'];
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}

