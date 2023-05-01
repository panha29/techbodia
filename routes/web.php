<?php

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

// index routing via Route feature
Route::redirect('/', '/Dashboards/Index');


/*
|--------------------------------------------------------------------------
| Dashboards
|--------------------------------------------------------------------------
|
*/
Route::prefix('Dashboards')->group(function () {
    Route::view('Index', 'index');

});



