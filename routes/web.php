<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
ROUTE FILE
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

//Laravel 8 (new)
Route::get('/', [PagesController::class, 'index']);
Route::get('about', [PagesController::class, 'about']);




//before Laravel 8 outdated 
//Route::get('/products', 'ProductsController@index');

// firstproject.com == /
// firstproject.com/users == /users or users