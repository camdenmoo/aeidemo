<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::insert([
            [
                // iTunes
                'hex' => Str::random(11), 'name' => 'iTunes', 'slug' => 'itunes', 'distribution_types' => '1', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // YouTube
                'hex' => Str::random(11), 'name' => 'YouTube', 'slug' => 'youtube', 'distribution_types' => '2', 'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }
}
