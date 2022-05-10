<?php

use App\Models\Articles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

// Route::get('/shop', function () {
//     return view('shop', [
//         'articles' => Articles::all()
//     ]);
// });
Route::get('shop', [ArticleController::class, 'index']);
Route::get('list', [ArticleController::class, 'list']);
