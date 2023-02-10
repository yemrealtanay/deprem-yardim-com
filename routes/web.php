<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InjuredController;
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

Route::get('/', HomeController::class);

Route::get('/yardim-isteyenler', function () {
    return view('injured');
});

Route::redirect('/injured', '/yardim-isteyenler');
Route::redirect('/help/datatable', '/yardim-isteyenler');

Route::get('/edit/{injured_id}', [InjuredController::class, 'edit']);
