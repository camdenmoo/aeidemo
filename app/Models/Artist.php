<?php

namespace App\Models;

use App\Models\Song;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'hex';
    }

    public function get_counts($artist){
        $song_count = count($artist->songs);
        $song_count = ($song_count < 10) ? '0'.$song_count : $song_count;
        $artist['song_count'] = $song_count;

        $release_count = count($artist->releases);
        $release_count = ($release_count < 10) ? '0'.$release_count : $release_count;
        $artist['release_count'] = $release_count;

        return $artist;
    }


    public function songs(){
        return $this->hasMany(Song::class, 'artist_id');
    }

    public function releases(){
        return $this->hasMany(Release::class, 'artist_id');
    }
}
