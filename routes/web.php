<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\GenerateQRController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::resource('/events', EventsController::class);
Route::resource('/generate-qr', GenerateQRController::class);
