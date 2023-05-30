<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'category' => 'Fiction'
        ]);
        Category::create([
            'category' => 'Spiritual'
        ]);
        Category::create([
            'category' => 'Science'
        ]);
        Category::create([
            'category' => 'Others'
        ]);
    }
}
