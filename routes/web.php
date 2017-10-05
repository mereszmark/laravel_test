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
     return redirect('/list');
});

Route::get('/list', 'UserListController@showListPage');
Route::get('/user_detail.php', 'UserListController@showDetailedPage');
Route::get('/add', 'UserListController@showFormPage');
Route::get('/adduser','UserListController@add');
Route::get('/updateuser','UserListController@update');
Route::get('/deleteuser','UserListController@delete');
