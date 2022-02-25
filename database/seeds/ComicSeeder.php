<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newComic = new Comic();
            $newComic->name = $faker->word(80);
            $newComic->poster = $faker->imageUrl(250, 450, 'comics', true);
            $newComic->series = $faker->word(80);
            $newComic->price = $faker->randomFloat(2, 10, 20);
            $newComic->description = $faker->text();
            $newComic->sale_date = $faker->date();
            $newComic->page_count = $faker->numberBetween(15, 120);
            $newComic->rated = $faker->numberBetween(0, 10);

            $newComic->save();
        }
    }
}
