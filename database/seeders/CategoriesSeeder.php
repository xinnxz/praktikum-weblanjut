<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Fiction',
            'Non-Fiction',
            'Science Fiction',
            'Mystery',
            'Romance',
            'Fantasy',
            'Thriller',
            'Biography',
            'History',
            'Self-Help',
            'Cooking',
            'Travel',
            'Science',
            'Art',
            'Poetry',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'category' => $category,
            ]);
        }
    }
}
