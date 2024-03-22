<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about_us', [AboutUsController::class, 'index'])-> name('about_us');

Route::get('/', function () {
    return view('about_us');
});
