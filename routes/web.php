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


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin/home');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/bordero/{bordero}/rates', 'TarifaBorderoController@index')->name('bordero.rates');
        Route::post('/bordero/{bordero}/rates/{rate}', 'TarifaBorderoController@create')->name('bordero.rates.create');
        Route::resource('bordero', 'BorderoController');
        Route::resource('rate', 'TarifaController');
    });

    Route::get('/home', 'HomeController@index')->name('home');
});


// Route::get('/listBordero', function(){
// return view('admin/list-borderos');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
