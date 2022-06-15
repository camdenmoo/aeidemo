<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
            [
                // Hip-Hop
                'hex' => Str::random(11), 'name' => 'Hip-Hop', 'slug' => 'hip-hop', 'image' => NULL, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Psy Ambient
                'hex' => Str::random(11), 'name' => 'Psy Ambient', 'slug' => 'psy-ambient', 'image' => NULL, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Dub
                'hex' => Str::random(11), 'name' => 'Dub', 'slug' => 'dub', 'image' => NULL, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Minimal Techno
                'hex' => Str::random(11), 'name' => 'Minimal Techno', 'slug' => 'minimal-techno', 'image' => NULL, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Dirty House
                'hex' => Str::random(11), 'name' => 'Dirty House', 'slug' => 'dirty-house', 'image' => NULL, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Chillout
                'hex' => Str::random(11), 'name' => 'Chillout', 'slug' => 'chillout', 'image' => NULL, 'created_at' => now(), 'updated_at' => now()
            ],
            

        ]);
    }
}
