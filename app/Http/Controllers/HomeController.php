<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Artist;
use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DistributionType;

class HomeController extends Controller
{
    public function index(){
        $partners = Partner::get();
        return view('index', [
            'partners' => $partners
        ]);
    }

    public function formResults(){
        
    }

    public function commandLine(){
        return view('command-line', [
        ]);  
    }

    public function showArtists(){
        $artists = Artist::get();

        foreach($artists as $artist){
            $artist->get_counts($artist);
        }
        
        
        return view('artists.index', [
            'artists' => $artists
        ]);
    }

    public function showSongs(){
        $artists = Artist::orderBy('name', 'ASC')->get();   
        return view('songs.index', [
            'artists' => $artists
        ]);
    }

    public function showArtistSongs(Request $request){

        $artists = Artist::where('id', $request->artist)->get();   
        return view('artists.index', [
            'artists' => $artists
        ]);
    }

    public function showPartners(){
        $partners = Partner::get();
        return view('partners.index', [
            'partners' => $partners
        ]);
    }

    public function createPartner(){
        $distribution_types = DistributionType::orderBy('name', 'ASC')->get();
        return view('partners.create', [
            'distribution_types' => $distribution_types
        ]);
    }

    public function storePartner(Request $request){
        
        $form_fields = $request->validate([
            'name' => 'required',
            'distribution_types' => 'required'
        ]);
        
        $form_fields['hex'] = Str::random(11);
        $form_fields['slug'] = urlencode($request->name);

        Partner::create($form_fields);

        return redirect('/partners')->with('message', 'The new Partner was added!');

    }

    public function showDistributionTypes(){
        return view('distribution-types.index', [
        ]);
    }

    public function showReleases(){
        return view('releases.index', [
        ]);
    }
}
