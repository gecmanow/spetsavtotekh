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

Route::get('/', 'App\Http\Controllers\AppController@index')->name('home');
Route::get('zakazat-avtovyshku-v-krasnoyarske', 'App\Http\Controllers\AppController@autotower')->name('autotower');
Route::get('zakazat-bobcat-v-krasnoyarske', 'App\Http\Controllers\AppController@bobcat')->name('bobcat');
Route::get('thanks', 'App\Http\Controllers\AppController@thanks')->name('thanks');
Route::post('send', 'App\Http\Controllers\AppController@send')->name('send');
Route::post('send-price-form', 'App\Http\Controllers\AppController@sendPriceForm')->name('sendPriceForm');
Route::post('send-modal-form', 'App\Http\Controllers\AppController@sendModalForm')->name('sendModalForm');
