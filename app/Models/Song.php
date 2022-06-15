<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    public function artist(){
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function releases(){
        return $this->hasMany(Release::class, 'song_id');
    }
}
