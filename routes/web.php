<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'PostController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile/update/{id}', 'ProfileController@update')->name('profile.update');
Route::get('profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');
Route::get('profile/show/{user_id}', 'ProfileController@show')->name('profile.show');


//__________________________ route posts_______________________________________________________________________
//_____________________________________________________________________________________________________________


Route::get('post/trashed','PostController@trashed')->name('post.trashed');
Route::get('post/hdelete/{id}','PostController@hdelete')->name('post.hdelete');
Route::get('post/restore/{id}','PostController@restore')->name('post.restore');



Route::resource('post','PostController');




//________________________________________________________________________________________________________________
//                          --comments--
//________________________________________________________________________________________________________________

Route::resource('comments', 'CommentController');


//_____________________________________________________________________________________________________________________
//                           -- users --
//_____________________________________________________________________________________________________________________

Route::get('/users','UserController@index')->name('users');
Route::get('/users/create','UserController@create')->name('users.create');
Route::post('/users/store','UserController@store')->name('users.store');
Route::get('/users/destroy/{id}','UserController@destroy')->name('users.delete');

Route::get('/users/admin/{id}','UserController@admin')->name('users.admin');
Route::get('/users/notAdmin/{id}','UserController@notAdmin')->name('users.notAdmin');
