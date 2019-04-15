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
Route::get('search', 'SearchController@search')->name('search.result');
Route::resource('transactions', 'TransactionController')->middleware('auth');



Route::namespace('Super')->prefix('super')->middleware(['auth', 'auth.super'])->name('super.')->group(function(){
	Route::resources([
		'/users' => 'UserController',
		'/agencies' => 'AgencyController',
	]);
});

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
	Route::resources([
		'/users' => 'UserController',
		'/vehicles' => 'VehicleController',
		'/transactions' => 'TransactionController',
	]);
});

Route::namespace('Director')->prefix('director')->middleware(['auth', 'auth.director'])->name('director.')->group(function(){
	Route::resource('/users', 'UserController');
});

Route::namespace('Manager')->prefix('manager')->middleware(['auth', 'auth.manager'])->name('manager.')->group(function(){
	Route::resource('/users', 'UserController');
});

Route::namespace('Agent')->prefix('agent')->middleware(['auth', 'auth.agent'])->name('agent.')->group(function(){
	Route::resources([
		'/vehicles' => 'VehicleController',
		'/transactions' => 'TransactionController'
	]);
});

Route::namespace('Driver')->prefix('driver')->middleware(['auth', 'auth.driver'])->name('driver.')->group(function(){
	
});


Route::get('/super', 'Super\RouteController@index')->middleware(['auth', 'auth.super']);
Route::get('/super/profile', 'Super\RouteController@profile')->middleware(['auth', 'auth.super']);
Route::get('/super/settings', 'Super\RouteController@settings')->middleware(['auth', 'auth.super']);
Route::get('/super/activities', 'Super\RouteController@activities')->middleware(['auth', 'auth.super']);

Route::get('/admin', 'Admin\RouteController@index')->middleware(['auth', 'auth.admin']);
Route::get('/admin/profile', 'Admin\RouteController@profile')->middleware(['auth', 'auth.admin']);
Route::get('/admin/settings', 'Admin\RouteController@settings')->middleware(['auth', 'auth.admin']);
Route::get('/admin/activities', 'Admin\RouteController@activities')->middleware(['auth', 'auth.admin']);

Route::get('/director', 'Director\RouteController@index')->middleware(['auth', 'auth.director']);
Route::get('/director/profile', 'Director\RouteController@profile')->middleware(['auth', 'auth.director']);
Route::get('/director/settings', 'Director\RouteController@settings')->middleware(['auth', 'auth.director']);
Route::get('/director/activities', 'Director\RouteController@activities')->middleware(['auth', 'auth.director']);

Route::get('/manager', 'Manager\RouteController@index')->middleware(['auth', 'auth.manager']);
Route::get('/manager/profile', 'Manager\RouteController@profile')->middleware(['auth', 'auth.manager']);
Route::get('/manager/settings', 'Manager\RouteController@settings')->middleware(['auth', 'auth.manager']);
Route::get('/manager/activities', 'Manager\RouteController@activities')->middleware(['auth', 'auth.manager']);

Route::get('/agent', 'Agent\RouteController@index')->middleware(['auth', 'auth.agent'])->name('agent.index');
Route::get('/agent/profile', 'Agent\RouteController@profile')->middleware(['auth', 'auth.agent']);
Route::get('/agent/settings', 'Agent\RouteController@settings')->middleware(['auth', 'auth.agent']);
Route::get('/agent/activities', 'Agent\RouteController@activities')->middleware(['auth', 'auth.agent']);

Route::get('/driver', 'Driver\RouteController@index')->middleware(['auth', 'auth.driver']);
Route::get('/driver/profile', 'Driver\RouteController@profile')->middleware(['auth', 'auth.driver']);
Route::get('/driver/settings', 'Driver\RouteController@settings')->middleware(['auth', 'auth.driver']);
Route::get('/driver/activities', 'Driver\RouteController@activities')->middleware(['auth', 'auth.driver']);
