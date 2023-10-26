<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Fiction',
            'category' => 'Horror',
            'category' => 'Thriller',
            'category' => 'Romance',
            'category' => 'Action',
            'category' => 'Slice of Life',
            'category' => 'Music',
        ]);
    }
}
