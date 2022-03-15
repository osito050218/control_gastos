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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');

Route::get('/cargo','CargoController@index')->name('cargo');

Route::get('/cargo/create','CargoController@create')->name('cargo.create');
Route::get('/cargo/edit/{car_id}','CargoController@edit')->name('cargo.edit');

 
Route::post('/cargo/store','CargoController@store')->name('cargo.store');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');
Route::post('/cargo/update/{car_id}','CargoController@update')->name('cargo.update');
Route::post('/cargo/destroy/{car_id}','CargoController@destroy')->name('cargo.destroy');
