<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Artist;
use App\Models\Partner;
use App\Models\Release;
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

    public function formResults(Request $request){

        $partner = Partner::find($request->partner);
        $search_partner = $partner;
        $search_date = $request->date;

        $search_distribution_types = explode('|', $partner->distribution_types);

        $releases = Release::get();
        $results = [];
        foreach($releases as $release){
            $release_distribution_types = explode('|', $release->distribution_types);

            foreach($search_distribution_types as $search_distribution_type){
                if(in_array($search_distribution_type, $release_distribution_types)){
                    $results[] = $release;
                }
            }
        }

        $valid_releases = [];
        foreach($results as $result){
            if(strtotime($result->start_date) <= strtotime($request->date)){
                $valid_releases[] = $result;
            }
        }

        $releases = $valid_releases;

        $partners = Partner::get();

        return view('search.form-results', [
            'search_partner' => $search_partner,
            'search_date' => $search_date,
            'partners' => $partners,
            'releases' => $releases 
        ]);
    }

    public function commandLine(){
        return view('command-line', [
        ]);  
    }

    public function commandLineResults(Request $request){

        $search_terms = explode(' ', $request->search_terms, 2);

        // dd($search_terms);

        $partner_name = $search_terms[0];
        $date = $search_terms[1];

        $partner = Partner::where('name', $partner_name)->first();

        // dd($date);
        $search_partner = $partner;
        $search_date = $date;
        
        $search_distribution_types = explode('|', $partner->distribution_types);

        $releases = Release::get();
        $results = [];
        foreach($releases as $release){
            $release_distribution_types = explode('|', $release->distribution_types);

            foreach($search_distribution_types as $search_distribution_type){
                if(in_array($search_distribution_type, $release_distribution_types)){
                    $results[] = $release;
                }
            }
        }

        $valid_releases = [];
        foreach($results as $result){
            if(strtotime($result->start_date) <= strtotime($date)){
                $valid_releases[] = $result;
            }
        }

        $releases = $valid_releases;

        $partners = Partner::get();

        return view('search.command-line-results', [
            'search_partner' => $search_partner,
            'search_date' => $search_date,
            'partners' => $partners,
            'releases' => $releases 
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
