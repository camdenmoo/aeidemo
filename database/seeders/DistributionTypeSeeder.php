<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\DistributionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistributionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DistributionType::insert([
            [
                // Digital Download
                'hex' => Str::random(11), 'name' => 'Digital Download', 'slug' => 'digital-download', 'image' => 'direct-download.png', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                // Streaming Product
                'hex' => Str::random(11), 'name' => 'Streaming', 'slug' => 'streaming', 'image' => 'streaming.png', 'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }
}
