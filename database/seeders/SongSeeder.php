<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $song = new Song;
            $song->title = $faker->sentence(3);
            $song->album = $faker->words(5, true);
            $song->author = $faker->name();
            $song->author = $faker->name();
            $song->length = $faker->numberBetween(30, 2000);;
            $song->poster = "https://picsum.photos/200/300?random=" . $faker->unique()->numberBetween(1, $i);
            $song->save();
        }
    }
}
