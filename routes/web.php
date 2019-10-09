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



Auth::routes();



Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::namespace('Master')->group(function () {       
        Route::resource('/company', 'CompanyController');
        Route::resource('/items', 'ItemsController');
        Route::resource('/itemsgroup', 'ItemsGroupController');
        Route::resource('/unit', 'UnitController');
        Route::resource('/accounts', 'AccountsController');
        Route::resource('/setpartyrate', 'SetPartyRateController');
        Route::resource('/setgsm', 'SetGSMController');
    });

});

