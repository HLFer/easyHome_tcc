<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/'], function () {
    Route::get('/living_room', 'LivingRoomController@index')->name('living_room');
    //Route::get('/cozinha', 'CozinhaController@index')->name('cozinha');
    //Route::get('/banheiro', 'BanheiroController@index')->name('banheiro');
    //Route::get('/quarto', 'QuartoController@index')->name('quarto');
    //Route::get('/garagem', 'GaragemController@index')->name('garagem');
    //Route::get('/lavanderia', 'LavanderiaController@index')->name('lavanderia');
    //Route::get('/jardim', 'JardimController@index')->name('jardim');
});

Route::group(['prefix' => '/lights'], function ($convenient) {
    Route::get( '/on/{convenient}', 'LightsController@turnOnLights');
    Route::get('/off/{convenient}', 'LightsController@turnOffLights');
});

Route::group(['prefix' => '/fans'], function ($convenient) {
    Route::get('/on/{convenient}', 'FansController@turnOnFans');
    Route::get('/off/{convenient}', 'FansController@turnOffFans');
});

Route::group(['prefix' => '/televisions'], function ($convenient) {
    Route::get('/on/{convenient}', 'TelevisionsController@turnOnTelevisions');
    Route::get('/off/{convenient}', 'TelevisionsController@turnOffTelevisions');
});