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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/admin', ['as' => 'admin', 'uses' => 'AuthController@getLogin']);
Route::post('/admin', ['as' => 'login', 'uses' => 'AuthController@postLogin']);

Route::get('/', 'FaqController@getIndex');
Route::get('/add', ['as' => 'add', 'uses' => 'FaqController@getAdd']);
Route::post('/add', ['as' => 'save',  'uses' => 'FaqController@postAdd']);

Route::get('/admin/index', ['as' => 'adminMain','middleware' => 'auth', 'uses' => 'AdminController@getIndex']);
Route::post('/admin/index', ['as' => 'adminMain','middleware' => 'auth', 'uses' => 'AdminController@postIndex']);

Route::get('/admin/edit/{id?}', ['as' => 'edit','middleware' => 'auth', 'uses' => 'AdminController@getEdit']);
Route::post('/admin/edit/{id?}', ['as' => 'edit','middleware' => 'auth', 'uses' => 'AdminController@postEdit']);

Route::get('/admin/edittheme', ['as' => 'editTheme','middleware' => 'auth', 'uses' => 'AdminController@getEdittheme']);

Route::get('/admin/adminlist', ['as' => 'adminList','middleware' => 'auth', 'uses' => 'AdminController@getAdminlist']);

Route::get('/admin/deleteadmin/{id?}', ['as' => 'deleteAdmin', 'middleware' => 'auth', 'uses' => 'AdminController@getDeleteadmin']);
Route::post('/admin/deleteadmin/{id?}', ['middleware' => 'auth', 'uses' => 'AdminController@postDeleteadmin']);

Route::get('/admin/changepswd/{id?}', ['as' => 'changeAdmin', 'middleware' => 'auth', 'uses' => 'AdminController@getChangepassword']);
Route::post('/admin/changepswd/{id?}', ['middleware' => 'auth', 'uses' => 'AdminController@postChangepassword']);

Route::get('/admin/addadmin', ['as' => 'addAdmin','middleware' => 'auth', 'uses' => 'AdminController@getAddadmin']);
Route::post('/admin/addadmin', ['middleware' => 'auth', 'uses' => 'AdminController@postAddadmin']);

Route::get('/admin/addtheme', ['as' => 'addTheme','middleware' => 'auth', 'uses' => 'AdminController@getAddtheme']);
Route::post('/admin/addtheme', ['middleware' => 'auth', 'uses' => 'AdminController@postAddtheme']);

Route::get('/admin/deletetheme/{id?}', ['as' => 'deleteTheme', 'middleware' => 'auth', 'uses' => 'AdminController@getDeletetheme']);
Route::post('/admin/deletetheme/{id?}', ['middleware' => 'auth', 'uses' => 'AdminController@postDeletetheme']);

Route::get('/admin/logout', ['as' => 'logout','middleware' => 'auth', 'uses' => 'AuthController@getLogout']);
