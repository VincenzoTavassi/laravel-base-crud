<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Song;
        $song->title = "Una canzone di test";
        $song->length = 300;
        $song->save();

        $song = new Song;
        $song->title = "Un'altra canzone";
        $song->album = "L'album migliore";
        $song->author = "Bravissimo autore";
        $song->editor = "Editor d'eccezione";
        $song->length = 150;
        $song->poster = "https://picsum.photos/200/300";
        $song->save();
    }
}
