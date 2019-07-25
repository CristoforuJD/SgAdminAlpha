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
        Route::post('/bordero/{bordero}/rates/{rate}', 'TarifaBorderoController@store')->name('bordero.rates.create');
        Route::delete('/bordero/{bordero}/rates/{rate}', 'TarifaBorderoController@destroy')->name('bordero.rates.destroy');
        Route::get('/bordero/{bordero}/rates/{rate}/edit', 'TarifaBorderoController@edit')->name('bordero.rates.edit');
        Route::put('/bordero/{bordero}/rates/{rate}', 'TarifaBorderoController@update')->name('bordero.rates.update');
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
