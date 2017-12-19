<?php

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('login', 'Auth\Web\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\Web\LoginController@login');
Route::post('logout', 'Auth\Web\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\Web\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\Web\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\Web\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\Web\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\Web\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\Web\ResetPasswordController@reset');

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
Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('user', 'User\Web\UserController');
    Route::resource('post', 'Post\Web\PostController');
});
