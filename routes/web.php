<?php
//Definição das rotas do Framework EasyHome


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Grupo de rotas para os comodos das casa
Route::group(['prefix' => '/'], function () {
    Route::get('/living_room', 'LivingRoomController@index')->name('living_room');
    Route::get('/kitchen', 'KitchenController@index')->name('kitchen');
    Route::get('/bathroom', 'BathroomController@index')->name('bathroom');
    Route::get('/bedroom', 'BedroomController@index')->name('bedroom');
    Route::get('/garage', 'GarageController@index')->name('garage');
    Route::get('/laundry', 'LaundryController@index')->name('laundry');
});

/*Grupo de rotas que recebem a variavel $convenient 
* como parametro para acionamento dos dispositivos 
* nos respecitivos comodos
*/
Route::group(['prefix' => '/operation'], function ($convenient) {
    Route::get('/{convenient}/{param}/{state}', 'OperationsController@index');
});
