<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{   
    // List all artists
    public function index(){
        $artists = Artist::get();
        foreach($artists as $artist){
            $artist->get_counts($artist);
        }
        return view('artists.index', [
            'artists' => $artists
        ]);
    }

    // Show single listing
    public function show(Artist $artist){
        $artist->get_counts($artist);
        return view('artists.show', [
            'artist' => $artist,
        ]);
    }
}
