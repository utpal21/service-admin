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

Route::group(
    [
    'prefix' => 'admin',
    'namespace' => 'admin'
    ], function()
    {    
    Route::get('dashboard', 'DashboardController@index');
    Route::get('category', 'CategorizationContraller@category');
    Route::get('category/create', 'CategorizationContraller@createCategory');
    Route::get('subcategory', 'CategorizationContraller@subcategory');
    Route::get('subcategory/create', 'CategorizationContraller@createsubCategory');
    });

Route::group(
    [
    'prefix' => 'partner',
    'namespace' => 'partner'
    ], function()
    {    
    Route::resource('dashboard', 'DashboardController');
    Route::resource('profile', 'ProfileController');
    Route::resource('company_profile', 'CompanyProfileController');
    Route::resource('order', 'OrderController');

    });
    
