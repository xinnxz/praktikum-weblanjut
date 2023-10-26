<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'year' => 1925,
                'publisher' => 'Scribner',
                'city' => 'New York',
                'cover' => 'book1.jpg',
                'bookshelf_id' => 1,
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'year' => 1960,
                'publisher' => 'J. B. Lippincott & Co.',
                'city' => 'New York',
                'cover' => 'book2.jpg',
                'bookshelf_id' => 2,
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'year' => 1949,
                'publisher' => 'Secker & Warburg',
                'city' => 'London',
                'cover' => 'book3.jpg',
                'bookshelf_id' => 3,
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'year' => 1913,
                'publisher' => 'T. Egerton, Whitehall',
                'city' => 'London',
                'cover' => 'book4.jpg',
                'bookshelf_id' => 1,
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'year' => 1951,
                'publisher' => 'Little, Brown and Company',
                'city' => 'Boston',
                'cover' => 'book5.jpg',
                'bookshelf_id' => 2,
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'year' => 1937,
                'publisher' => 'Allen & Unwin',
                'city' => 'London',
                'cover' => 'book6.jpg',
                'bookshelf_id' => 3,
            ],
            [
                'title' => 'To the Lighthouse',
                'author' => 'Virginia Woolf',
                'year' => 1927,
                'publisher' => 'Hogarth Press',
                'city' => 'London',
                'cover' => 'book7.jpg',
                'bookshelf_id' => 1,
            ],
            [
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'year' => 1954,
                'publisher' => 'George Allen & Unwin',
                'city' => 'London',
                'cover' => 'book8.jpg',
                'bookshelf_id' => 2,
            ],
            [
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'year' => 1932,
                'publisher' => 'Chatto & Windus',
                'city' => 'London',
                'cover' => 'book9.jpg',
                'bookshelf_id' => 3,
            ],
            [
                'title' => 'Moby-Dick',
                'author' => 'Herman Melville',
                'year' => 1951,
                'publisher' => 'Richard Bentley',
                'city' => 'London',
                'cover' => 'book10.jpg',
                'bookshelf_id' => 1,
            ],
        ]);
    }
}
