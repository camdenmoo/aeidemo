<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistributionType;

class DistributionTypeController extends Controller
{
    // List all distribution types
    public function index(){
        $distribution_types = DistributionType::get();
        return view('distribution-types.index', [
            'distribution_types' => $distribution_types
        ]);
    }
}
