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

Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('/clients', 'ClientController@getIndex')->name('clients_index');

Route::get('/clients/new', 'ClientController@getCreate')->name('clients_create');

Route::get('/clients/{id}', 'ClientController@editClient')->name('clients_edit');

Route::post('/clients/save', 'ClientController@postSave')->name('clients_post');

Route::get('/rooms', 'RoomsController@checkAvailableRooms')->name('room_get');
Route::post('/rooms/{id}', 'RoomsController@postAvailableRooms')->name('room_post');

Route::get('/reservations', 'ReservationsController@getReservations')->name('reservations_index');
Route::get('/reservations/new', 'ReservationsController@getCreate')->name('reservations_create');
Route::get('/reservations/edit', 'ReservationsController@getEdit')->name('reservations_edit');
Route::get('/reservations/save', 'ReservationsController@postSave')->name('reservations_post');


