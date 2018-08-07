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
Route::get('/datatables', 'PostController@datatables')->name('datatables.getdata');

Route::resource('posts', 'PostController');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';
});
Route::get('/getapidata', 'PostController@api')->name('ajax.getapidata');

// Route::get('/laravel-filemanager', '\vendor\uniSharp\LaravelFilemanager\src\Controllers\LfmController@show');
// Route::post('/laravel-filemanager/upload', '\vendor\uniSharp\LaravelFilemanager\src\Controllers\UploadController@upload');