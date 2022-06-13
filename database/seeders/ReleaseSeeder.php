<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Release;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReleaseSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Release::insert([
            [
                // 1
                
                'hex' => Str::random(11), 
                'artist_id' => 1, 
                'song_id' => 1, 
                'distribution_types' => '1,2', 
                'start_date' => Carbon::createFromTimestamp(strtotime('01/06/2021'))->toDateString(), 
                'end_date' => NULL, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                // 2
                'hex' => Str::random(11), 
                'artist_id' => 1, 
                'song_id' => 2, 
                'distribution_types' => '1', 
                'start_date' => Carbon::createFromTimestamp(strtotime('01/04/2021'))->toDateString(), 
                'end_date' => NULL,  
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                // 3
                'hex' => Str::random(11), 
                'artist_id' => 1, 
                'song_id' => 3, 
                'distribution_types' => '1', 
                'start_date' => Carbon::createFromTimestamp(strtotime('01/02/2021'))->toDateString(), 
                'end_date' => NULL, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                // 4
                'hex' => Str::random(11), 
                'artist_id' => 2, 
                'song_id' => 4, 
                'distribution_types' => '1', 
                'start_date' => Carbon::createFromTimestamp(strtotime('01/06/2021'))->toDateString(), 
                'end_date' => NULL, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                // 5
                'hex' => Str::random(11), 
                'artist_id' => 2, 
                'song_id' => 5, 
                'distribution_types' => '1,2', 
                'start_date' => Carbon::createFromTimestamp(strtotime('01/07/2021'))->toDateString(), 
                'end_date' => Carbon::createFromTimestamp(strtotime('01/08/2024'))->toDateString(), 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                // 6
                'hex' => Str::random(11), 
                'artist_id' => 2, 
                'song_id' => 6, 
                'distribution_types' => '1', 
                'start_date' => Carbon::createFromTimestamp(strtotime('01/02/2021'))->toDateString(), 
                'end_date' => NULL,  
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                // 7
                'hex' => Str::random(11), 
                'artist_id' => 2, 
                'song_id' => 6, 
                'distribution_types' => '2', 
                'start_date' => Carbon::createFromTimestamp(strtotime('01/03/2021'))->toDateString(), 
                'end_date' => NULL, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]); 
    }
}
