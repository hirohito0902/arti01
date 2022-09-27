<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperController; 

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/papers', [PaperController::class, 'index']);*/

Route::get('/', [PaperController::class, 'index']);
Route::get('/papers/bookshelf', [PaperController::class, 'bookshelf']);
Route::get('/papers/search', [PaperController::class, 'search']);
Route::get('/papers/submission', [PaperController::class, 'submission']);
Route::get('/papers/register', [PaperController::class, 'register']);