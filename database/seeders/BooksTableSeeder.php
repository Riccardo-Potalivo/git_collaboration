<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $books = file_get_contents(__DIR__ . "/books_db.json");
        $books = json_decode($books, true);

        //$houses = array_map('str_getcsv', file(__DIR__ . './houses.csv'));
        foreach ($books as $book) {
            $newbook = new Book();
            $newbook->title = $book["title"];
            $newbook->thumbnailUrl = $book["thumbnailUrl"];
            $newbook->save();
        }


    }
}
