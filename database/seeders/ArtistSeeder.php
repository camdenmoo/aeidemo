<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::insert([
            [
                // Ghost Dragon
                'hex' => Str::random(11), 'name' => 'Ghost Dragon', 'slug' => 'ghost-dragon', 'image' => 'artist-1.jpg', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Caslow
                'hex' => Str::random(11), 'name' => 'Caslow', 'slug' => 'caslow', 'image' => 'artist-2.jpg', 'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }
}
