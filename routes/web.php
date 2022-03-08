<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\jobController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uploadcandidates',[CandidatesController::class,'importcandidates']);
Route::get('/uploadjobs',[jobController::class,'importjobs']);