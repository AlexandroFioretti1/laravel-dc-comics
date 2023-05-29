<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comic) {
            $singlecomic = new Comic();
            $singlecomic->title = $comic['title'];
            $singlecomic->description = $comic['description'];
            $singlecomic->thumb = $comic['thumb'];
            $singlecomic->price = $comic['price'];
            $singlecomic->series = $comic['series'];
            $singlecomic->sale_date = $comic['sale_date'];
            $singlecomic->type = $comic['type'];
            $singlecomic->save();
        }
    }
}
