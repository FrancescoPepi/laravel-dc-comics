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
            $newComics->description = $book['description'];
            $newComics->thumb = $book['thumb'];
            $newComics->price = $book['price'];
            $newComics->series = $book['series'];
            $newComics->sale_date = $book['sale_date'];
            $newComics->type = $book['type'];
            $newComics->save();
        }
    }
}