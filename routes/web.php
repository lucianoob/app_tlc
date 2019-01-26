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

Route::get('/activate/{token}', 'Auth\RegisterController@activate')->name('activate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('/users/{user}',  'UserController@update')->name('users.update');

Route::get('/companies/{user}',  ['as' => 'companies.edit', 'uses' => 'CompanyController@edit']);
Route::patch('/companies/{company}',  'CompanyController@update')->name('companies.update');

Route::get('/suppliers/list/', 'SupplierController@list');
Route::get('/suppliers/new/',  'SupplierController@new');
Route::post('/suppliers/new/{id}',  'SupplierController@save');
Route::get('/suppliers/edit/{id}',  'SupplierController@edit');
Route::post('/suppliers/edit/{id}',  'SupplierController@save');
Route::get('/suppliers/remove/{id}',  'SupplierController@remove');

Route::get('/payments/list/', 'PaymentController@list');
Route::post('/payments/list/', 'PaymentController@filter');
Route::get('/payments/new/{supplier}',  'PaymentController@new');
Route::post('/payments/new/{id}',  'PaymentController@save');
Route::get('/payments/edit/{id}',  'PaymentController@edit');
Route::post('/payments/edit/{id}',  'PaymentController@save');
Route::get('/payments/remove/{id}',  'PaymentController@remove');
