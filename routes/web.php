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
    return view('home.home');
});
Route::get('/cloudserver', function () {
    return view('home.cloudserver');
})->name('cloudserver');

Route::get('/thuemaychurieng', function () {
    return view('home.thuemaychurieng');
})->name('thuemaychurieng');

Route::get('/thuechodatmaychu', function () {
    return view('home.thuechodatmaychu');
})->name('thuechodatmaychu');

Route::get('/giaiphapmaychu', function () {
    return view('home.giaiphapmaychu');
})->name('giaiphapmaychu');

Route::match(['get', 'post'], '/tintuc', 'PostController@show')->name('home.tintuc');
Route::match(['get', 'post'], '/xemchitiet/{id}', 'PostController@showDetail')->name('home.xemchitiet');


Route::get('/lienhe', function () {
    return view('home.lienhe');
})->name('lienhe');

Route::group(['prefix' => 'post'], function () {
    Route::get('/', 'PostController@index')->name('post.index');
    Route::get('/create', 'PostController@create')->name('post.create');
    Route::post('/create', 'PostController@store')->name('post.store');
    Route::get('/view/{id}', 'PostController@view')->name('post.view');
    Route::get('/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('/edit/{id}', 'PostController@update')->name('post.update');
    Route::get('/delete/{id}', 'PostController@destroy')->name('post.destroy');
    Route::get('/search', 'PostController@search')->name('post.search');
});

Route::get('/changePassword', 'Auth\ChangePasswordController@index')->name('changePassword.index');
Route::post('/changePassword', 'Auth\ChangePasswordController@store')->name('changePassword.store');
Route::get('/changeProfile', 'Auth\ChangeProfileController@index')->name('changeProfile.index');
Route::post('/changeProfile', 'Auth\ChangeProfileController@store')->name('changeProfile.store');

Route::get('/users', function () {
    return view('user/list');
});

Route::get('/suncloud/admin', function () {
    return view('auth/login');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/create', 'CategoryController@store')->name('categories.store');
    Route::get('/{id}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::post('/edit/{id}', 'CategoryController@update')->name('categories.update');
    Route::get('/{id}/delete', 'CategoryController@destroy')->name('categories.destroy');
    Route::get('/list', 'CategoryController@list')->name('categories.list');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/list', 'UserController@list')->name('users.list');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('admin.homeadmin');
