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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

/*Route::get('/', [PaperController::class, 'index'])->name('index');*/



Route::get('/papers', [PaperController::class, 'index']);

Route::get('/', [PaperController::class, 'logout']);
Route::get('/papers/bookshelf', [PaperController::class, 'bookshelf']);
Route::get('/papers/search', [PaperController::class, 'search']);
/*Route::get('/papers/submission', [PaperController::class, 'submission']);*/
Route::get('/papers/register', [PaperController::class, 'register']);

Route::get('/papers/submission', [PaperController::class, 'upload'])->name('file_upload.upload');
Route::get('/papers/submission/action', [PaperController::class, 'action']);
Route::post('/papers/submission/action', [PaperController::class, 'action'])->name('file_upload.action');

