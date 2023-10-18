<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = Config("comics");
        foreach ($comics as $book) {
            $newComics = new Comic();
            $newComics->title = $book['title'];
            $newComics->title = $book['description'];
            $newComics->title = $book['thumb'];
            $newComics->title = $book['price'];
            $newComics->title = $book['series'];
            $newComics->title = $book['sale_date'];
            $newComics->title = $book['type'];
            $newComics->save();
        }
    }
}