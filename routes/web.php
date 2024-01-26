<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MovietypeController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('contentcreator/home', [App\Http\Controllers\HomeController::class, 'contentcreatorHome'])->name('contentcreator.home')->middleware('is_admin');
Route::get('company/home', [App\Http\Controllers\HomeController::class, 'companyHome'])->name('company.home')->middleware('is_admin');


Route::post('/videos', 'App\Http\Controllers\VideoController@store');
Route::get('upload', 'App\Http\Controllers\VideoController@create');

Route::post('/categories', 'App\Http\Controllers\CategoryController@store');
Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create')->name('categories.create');
Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('index');
Route::post('/categories', 'App\Http\Controllers\CategoryController@store')->name('categories.store');

Route::post('/movietypes', 'App\Http\Controllers\MovietypeController@store');
Route::get('/movietypes/create', 'App\Http\Controllers\MovietypeController@create')->name('movietypes.create');
Route::get('/movietypes', 'App\Http\Controllers\MovietypeController@movietypes')->name('movietypes');
Route::post('/movietypes', 'App\Http\Controllers\MovietypeController@store')->name('movietypes.store');




Route::get('my-tvproductions', 'App\Http\Controllers\TvproductionController@myTvproductions')->name('my.tvproductionS');
Route::get('show-tvproductionS/', 'App\Http\Controllers\TvproductionController@showtvproductions');
Route::get('show-all-tvproductions', 'App\Http\Controllers\TvproductionController@ShowingAllTvproductions');
Route::get('tvproductions/create', 'App\Http\Controllers\TvproductionController@create');
Route::post('tvproductions', 'App\Http\Controllers\TvproductionController@store')->name('tvproductions.store');
Route::get('tvproductions/', 'App\Http\Controllers\TvproductionController@index');
Route::get('show-tvproductions/', 'App\Http\Controllers\TvproductionController@showtvproductions');
Route::get('tvproductions/{id}', 'App\Http\Controllers\TvproductionController@show');
Route::get('tvproduction/{id}', 'App\Http\Controllers\TvproductionController@showtv');
Route::get('tv/{id}', 'App\Http\Controllers\TvproductionController@watchvideo');
Route::get('tvproductions/{id}/edit', 'App\Http\Controllers\TvproductionController@edit');
Route::put('tvproductions/{id}', 'App\Http\Controllers\TvproductionController@update')->name('tvproductions.update');
Route::delete('/tvproductions/{id}', 'App\Http\Controllers\TvproductionController@destroy')->name('tvproductions.destroy');
Route::get('/tvproductions/download/{file}', 'App\Http\Controllers\TvproductionController@download');
