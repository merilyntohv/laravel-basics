<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    dd('tere');
});

// file -> array -> method

//Route::get('/authors', [AuthorController::class, 'index']);

//route näed terminalis php artisan route:list
Route::resource('authors', AuthorController::class);
Route::resource('clients', ClientController::class);
