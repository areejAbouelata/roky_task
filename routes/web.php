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
Route::get('/', 'HomeController@home')->name('home');
// client registration ---
Route::group(['prefix' => 'client'],function (){
    Route::get('/register' , 'ClientController@getRegister')->name('register');
    Route::post('/register/submit' , 'ClientController@register')->name('register/submit');
    Route::get('/login' , 'ClientController@getLogin')->name('login');
    Route::post('/login' , 'ClientController@login')->name('login');
    Route::get('/ClientHome', 'HomeController@home')->name('ClientHome');
    Route::get('/public/album/show/{id}' , 'AlbumsController@show')->name('public_album_show');

    Route::group(['middleware'=>'auth:clients'],function (){
       Route::get('/albums' , 'AlbumsController@clientAlbums')->name('albums');
//        create Album ------- Edit Album ---- Delete->all photos ---
        Route::get('/album/show/{id}' , 'AlbumsController@show')->name('album_show');
        Route::get('/album/create' , 'AlbumsController@create')->name('create_album');
        Route::post('/album/create' , 'AlbumsController@store')->name('create_album');
        Route::get('/album/edit/{id}' , 'AlbumsController@edit')->name('edit_album');
        Route::post('/album/edit/{id}' , 'AlbumsController@update')->name('edit_album');
        Route::get('/album/delete/{id}' , 'AlbumsController@delete')->name('delete_album');
// ------------------photos-----------------------
        Route::get('/album/{id}/photo/create' , 'PhotosController@create')->name('create_photo');
        Route::post('/album/{id}/photo/create' , 'PhotosController@store')->name('create_photo');
        Route::get('/album/{id}/photo/delete/{photo_id}'  ,'PhotosController@delete')->name('delete_photo');
    });

});

    Route::group(['prefix' => 'AdminPanel' , 'middleware' => 'auth:web'] , function(){
    
            Route::get('/home' , 'AdminPanelController@home');
            Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
            Route::resource('roles','RoleController');
            Route::resource('users','UserController');
    });