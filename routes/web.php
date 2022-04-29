<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::post('login', 'AuthController@store');
Route::post('logout', 'AuthController@destroy');
Route::get('tets', 'AuthController@show');

Route::middleware(['appAuth'])->group(
    function () {
        Route::get('user', 'AppController@index');
    }
);







Route::get('{any?}', 'SpaController@index')->where('any', '.*');;
