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

Route::get('/', 'ComiController@index')->name('comics');
Route::get('/comic/{id}', 'ComiController@singleComic')->name('singleComic');


Route::get('/characters', 'StaticController@characters')->name('characters');
Route::get('/movie', 'StaticController@movie')->name('movie');
Route::get('/tv', 'StaticController@tv')->name('tv');
Route::get('/game', 'StaticController@game')->name('game');
Route::get('/collectibles', 'StaticController@collectibles')->name('collectibles');
Route::get('/videos', 'StaticController@videos')->name('videos');
Route::get('/fans', 'StaticController@fans')->name('fans');
Route::get('/news', 'StaticController@news')->name('news');
Route::get('/shop', 'StaticController@shop')->name('shop');




// Memo 
// Route::get('/game', function () {
//     return view('game');
// })->name('game');





