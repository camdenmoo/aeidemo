<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SongSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::insert([
            [
                // Frisky (Live from SoHo)
                'hex' => Str::random(11), 'artist_id' => 1, 'name' => 'Frisky (Live from SoHo)', 'slug' => 'frisky-live-from-soho', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Miami 2 Ibiza
                'hex' => Str::random(11), 'artist_id' => 1, 'name' => 'Miami 2 Ibiza', 'slug' => 'miami-2-ibiza', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Till I'm Gone
                'hex' => Str::random(11), 'artist_id' => 1, 'name' => 'Till I\'m Gone', 'slug' => 'till-im-gone', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Black Mountain
                'hex' => Str::random(11), 'artist_id' => 2, 'name' => 'Black Mountain', 'slug' => 'black-mountain', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Iron Horse
                'hex' => Str::random(11), 'artist_id' => 2, 'name' => 'Iron Horse', 'slug' => 'iron-horse', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Motor Mouth
                'hex' => Str::random(11), 'artist_id' => 2, 'name' => 'Motor Mouth', 'slug' => 'motor-mouth', 'created_at' => now(), 'updated_at' => now()
            ],

        ]);

    }
}
