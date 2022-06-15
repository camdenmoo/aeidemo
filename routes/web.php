<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ReleaseController;
use App\Http\Controllers\DistributionTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:

// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit a listing
// update - Update listing
// destroy - Delete listing


// Home Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/form/results', [HomeController::class, 'formResults']);


Route::get('/command-line', [HomeController::class, 'commandLine']);



// Routes for Artists

// List all artists
Route::get('/artists', [ArtistController::class, 'index']);

// Show single artist
Route::get('/artists/{artist}', [ArtistController::class, 'show']);



// Routes for Songs
Route::get('/songs', [SongController::class, 'index']);


// Routes for Partners
Route::get('/partners', [PartnerController::class, 'index']);

Route::post('/partners', [HomeController::class, 'storePartner']);
Route::get('/partners/create', [HomeController::class, 'createPartner']);



// Routes for Distribution Types

// List all distribution types
Route::get('/distribution-types', [DistributionTypeController::class, 'index']);



// Routes for Releases

// List all releases
Route::get('/releases', [ReleaseController::class, 'index']);
