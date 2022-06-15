<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    // List all partners
    public function index(){
        $releases = Release::orderBy('start_date', 'ASC')->get();
        return view('releases.index', [
            'releases' => $releases
        ]);
    }
}
