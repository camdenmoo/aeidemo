<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    // List all partners
    public function index(){
        $partners = Partner::get();
        return view('partners.index', [
            'partners' => $partners
        ]);
    }
}
