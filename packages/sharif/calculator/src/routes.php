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
    return base_path('packages/sharif/calculator/src/views');
});


Route::get('add/{a}/{b}', 'Sharif\Calculator\CalculatorController@add');

Route::get('subtract/{a}/{b}', 'Sharif\Calculator\CalculatorController@subtract');

// Route::contorller('add/{a}/{b}', 'CalculatorController@add');
// Route::contorller('subtract/{a}/{b}','CalculatorController@subtract');