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

Route::get('/', 'HomeController@index');



Route::namespace('Super')->prefix('super')->middleware(['auth', 'auth.super'])->name('super.')->group(function(){
	Route::resources([
		'/users' => 'UserController',
		'/agencies' => 'AgencyController',
	]);
	Route::get('/profile', 'RouteController@profile');
	Route::get('/settings', 'RouteController@settings');
	Route::get('/activities', 'RouteController@activities');
});

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
	Route::resources([
		'/users' => 'UserController',
		'/vehicles' => 'VehicleController',
		'/transactions' => 'TransactionController',
	]);
	Route::get('/profile', 'RouteController@profile')->name('profile');
	Route::get('/settings', 'RouteController@settings')->name('settings');
	Route::get('/activities', 'RouteController@activities')->name('activities');
	Route::get('/search', 'SearchController@search')->name('search.result');
});

Route::namespace('Director')->prefix('director')->middleware(['auth', 'auth.director'])->name('director.')->group(function(){
	Route::resource('/users', 'UserController');
	Route::get('/profile', 'RouteController@profile');
	Route::get('/settings', 'RouteController@settings');
	Route::get('/activities', 'RouteController@activities');
});

Route::namespace('Manager')->prefix('manager')->middleware(['auth', 'auth.manager'])->name('manager.')->group(function(){
	Route::resource('/users', 'UserController');
	Route::get('/profile', 'RouteController@profile');
	Route::get('/settings', 'RouteController@settings');
	Route::get('/activities', 'RouteController@activities');
});

Route::namespace('Agent')->prefix('agent')->middleware(['auth', 'auth.agent'])->name('agent.')->group(function(){
	Route::resources([
		'/vehicles' => 'VehicleController',
		'/transactions' => 'TransactionController'
	]);
	Route::get('/profile', 'RouteController@profile')->name('profile');
	Route::get('/settings', 'RouteController@settings')->name('settings');
	Route::get('/activities', 'RouteController@activities')->name('activities');
	Route::get('/search', 'SearchController@search')->name('search.result');
	// Route::get('/agencies', 'AgencyController')->only('show')->name('agent.agencies.show');
});

Route::namespace('Driver')->prefix('driver')->middleware(['auth', 'auth.driver'])->name('driver.')->group(function(){
	Route::get('/profile', 'RouteController@profile');
	Route::get('/settings', 'RouteController@settings');
	Route::get('/activities', 'RouteController@activities');
});


Route::get('/super', 'Super\RouteController@index')->middleware(['auth', 'auth.super']);
Route::get('/admin', 'Admin\RouteController@index')->middleware(['auth', 'auth.admin']);
Route::get('/director', 'Director\RouteController@index')->middleware(['auth', 'auth.director']);
Route::get('/manager', 'Manager\RouteController@index')->middleware(['auth', 'auth.manager']);
Route::get('/agent', 'Agent\RouteController@index')->middleware(['auth', 'auth.agent'])->name('agent.index');
Route::get('/driver', 'Driver\RouteController@index')->middleware(['auth', 'auth.driver']);
