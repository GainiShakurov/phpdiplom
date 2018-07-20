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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);

    Route::get('/admin/index', ['as' => 'adminMain', 'uses' => 'AdminController@getIndex']);
    Route::post('/admin/index', ['as' => 'adminMain', 'uses' => 'AdminController@postIndex']);

    Route::get('/admin/edit/{id?}', ['as' => 'edit', 'uses' => 'AdminController@getEdit']);
    Route::post('/admin/edit/{id?}', ['as' => 'edit', 'uses' => 'AdminController@postEdit']);

    Route::get('/admin/delete/{id?}', ['as' => 'deleteQuestion', 'uses' => 'AdminController@getDelete']);
    Route::post('/admin/delete/{id?}', ['as' => 'deleteQuestion', 'uses' => 'AdminController@postDelete']);


    Route::get('/admin/theme/add', ['as' => 'addTheme', 'uses' => 'ThemeController@getAdd']);
    Route::post('/admin/theme/add', ['uses' => 'ThemeController@postAdd']);

    Route::get('/admin/theme/delete/{id?}', ['as' => 'deleteTheme', 'uses' => 'ThemeController@getDelete']);
    Route::post('/admin/theme/delete/{id?}', ['uses' => 'ThemeController@postDelete']);

    Route::get('/admin/theme/change/{id?}', ['as' => 'changeTheme', 'uses' => 'ThemeController@getChange']);
    Route::post('/admin/theme/change/{id?}', ['uses' => 'ThemeController@postChange']);

    Route::get('/admin/theme/index', ['as' => 'themeList', 'uses' => 'ThemeController@getIndex']);

    Route::get('/admin/users/index', ['as' => 'userList', 'uses' => 'UserController@getIndex']);

    Route::get('/admin/users/add', ['as' => 'addUser', 'uses' => 'UserController@getAdd']);
    Route::post('/admin/users/add', ['uses' => 'UserController@postAdd']);

    Route::get('/admin/users/delete/{id?}', ['as' => 'deleteUser', 'uses' => 'UserController@getDelete']);
    Route::post('/admin/users/delete/{id?}', ['uses' => 'UserController@postDelete']);

    Route::get('/admin/users/change/{id?}', ['as' => 'changeUser', 'uses' => 'UserController@getChange']);
    Route::post('/admin/users/change/{id?}', ['uses' => 'UserController@postChange']);

});


Route::get('/admin', ['as' => 'admin', 'uses' => 'AuthController@getLogin']);
Route::post('/admin', ['as' => 'login', 'uses' => 'AuthController@postLogin']);

Route::get('/', 'FaqController@getIndex');
Route::get('/add', ['as' => 'add', 'uses' => 'FaqController@getAdd']);
Route::post('/add', ['as' => 'save',  'uses' => 'FaqController@postAdd']);











