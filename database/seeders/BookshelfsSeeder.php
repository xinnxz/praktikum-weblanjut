<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfsSeeder extends Seeder
{
    public function run()
    {
        DB::table('bookshelfs')->insert([
            [
                'code' => 'BS1',
                'name' => 'Bookshelf A',
            ],
            [
                'code' => 'BS2',
                'name' => 'Bookshelf B',
            ],
            [
                'code' => 'BS3',
                'name' => 'Bookshelf C',
            ],
            [
                'code' => 'BS4',
                'name' => 'Bookshelf D',
            ],
            [
                'code' => 'BS5',
                'name' => 'Bookshelf E',
            ],
            [
                'code' => 'BS6',
                'name' => 'Bookshelf F',
            ],
            [
                'code' => 'BS7',
                'name' => 'Bookshelf G',
            ],
            [
                'code' => 'BS8',
                'name' => 'Bookshelf H',
            ],
            [
                'code' => 'BS9',
                'name' => 'Bookshelf I',
            ],
            [
                'code' => 'BS10',
                'name' => 'Bookshelf J',
            ],
        ]);
    }
}
