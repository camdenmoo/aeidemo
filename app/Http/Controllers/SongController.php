<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // List all songs
    public function index(){
        $songs = Song::orderBy('name', 'ASC')->get();
        return view('songs.index', [
            'songs' => $songs
        ]);
    }
}
