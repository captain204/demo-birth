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

Route::resource('child', 'ChildController');
// Multi step registration routes
Route::get('/home','HomeController@index');
Route::get('/register-step1','ChildController@registerStep1')->name('step1');
Route::get('/register-step2','ChildController@registerStep2')->name('step2');
Route::get('/child/register-step3','ChildController@registerStep3')->name('step3');

Route::post('/postregister-step1','ChildController@postregisterStep1')->name('postregister1');
Route::post('/postregister-step2','ChildController@postregisterStep2')->name('postregister2');
Route::post('/child/postregister-step3','ChildController@postregisterStep3')->name('postregister3');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
