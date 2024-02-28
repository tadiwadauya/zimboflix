<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MovietypeController;
use App\Http\Controllers\UserController;
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

Route::resource('users', UserController::class);

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

//views
Route::get('productionviews/{id}', 'App\Http\Controllers\TvProductionController@incrementViews')->name('productionviews.increment');

//downloads
// Route::get('productiondownloads/{id}/download', 'App\Http\Controllers\TvProductionController@incrementDownloads')->name('productiondownloads.download');
Route::post('productiondownloads/{id}/{download?}', 'App\Http\Controllers\TvProductionController@incrementDownloads')->name('productiondownloads.increment');
Route::post('productiondownloads2nd/{id}/{download?}', 'App\Http\Controllers\TvProductionController@incrementDownloads2nd')->name('productiondownloads2nd.increment');
Route::post('productiondownloads3rd/{id}/{download?}', 'App\Http\Controllers\TvProductionController@incrementDownloads3rd')->name('productiondownloads3rd.increment');
Route::post('productiondownloads4th/{id}/{download?}', 'App\Http\Controllers\TvProductionController@incrementDownloads4th')->name('productiondownloads4th.increment');
// Route::get('/increment-downloads/{id}', 'TvProductionController@incrementDownloads')->name('increment-downloads');
// Route::get('/download/{id}/{size}', 'TvProductionController@download')->name('download');
//tvproduction routes

Route::get('movielist', 'App\Http\Controllers\TvproductionController@movies')->name('movies');
Route::get('shows', 'App\Http\Controllers\TvproductionController@shows')->name('shows');
Route::get('skits', 'App\Http\Controllers\TvproductionController@skits')->name('skits');
Route::get('/tvproductions/search', 'App\Http\Controllers\TVProductionController@search')->name('tvproductions.search');
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

Route::get('/tv-production/{id}/second-stage', 'App\Http\Controllers\TVProductionController@secondStage')->name('second_stage');
Route::post('/tv-production/{id}/save-second-stage', 'App\Http\Controllers\TVProductionController@saveSecondStage')->name('save_second_stage');

Route::get('/tv-production/{id}/third-stage', 'App\Http\Controllers\TVProductionController@thirdStage')->name('third_stage');

Route::post('/tv-production/{id}/save-third-stage', 'App\Http\Controllers\TVProductionController@saveThirdStage')->name('save_third_stage');

Route::get('/tv-production/{id}/fourth-stage', 'App\Http\Controllers\TVProductionController@fourthStage')->name('fourth_stage');
Route::post('/tv-production/{id}/save-fourth-stage', 'App\Http\Controllers\TVProductionController@saveFourthStage')->name('save_fourth_stage');


Route::get('/downloads', 'App\Http\Controllers\DownloadController@index')->name('downloads');
