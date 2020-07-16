<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'WelcomeController@index');

Route::group(['middleware' => 'auth'], function() {

    // Halaman Pelanggan
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('feedback', 'FeedbackController@index')->name('feedback.index');
    Route::get('feedback/new', 'FeedbackController@create')->name('feedback.create');
    Route::post('feedback/new', 'FeedbackController@store')->name('feedback.store');
    Route::get('feedback/{id}/edit', 'FeedbackController@edit')->name('feedback.edit');

    Route::get('profile', 'ProfileController@edit')->name('profile.edit');
    Route::patch('profile', 'ProfileController@update')->name('profile.update');

    Route::get('checkinlist', 'CheckinlistController@index')->name('checkinlist.index');
    Route::get('checkinlist/new', 'CheckinlistController@create')->name('checkinlist.create');
    Route::post('checkinlist/new', 'CheckinlistController@store')->name('checkinlist.store');

});




Route::get('checkin', 'CheckinController@create')->name('checkin.create');
Route::post('checkin', 'CheckinController@store')->name('checkin.store');





// Halaman Admin
// Route::group(['prefix' => 'admin'], function() {

//     Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard.index');

//     // Pengurusan Users
//     Route::get('users', 'Admin\UserController@index')->name('admin.users.index');
//     Route::get('users/create', 'Admin\UserController@create')->name('admin.users.create');
//     Route::post('users/create', 'Admin\UserController@store')->name('admin.users.store');
//     Route::get('users/{id}', 'Admin\UserController@show')->name('admin.users.show');
//     Route::get('users/{id}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
//     Route::patch('users/{id}', 'Admin\UserController@update')->name('admin.users.update');
//     Route::delete('users/{id}', 'Admin\UserController@destroy')->name('admin.users.destroy');

//     // Pengurusan Feedback
//     Route::get('feedback', 'Admin\FeedbackController@index')->name('admin.feedback.index');
//     Route::delete('feedback/{id}', 'Admin\FeedbackController@destroy')->name('admin.feedback.destroy');

//     // Pengurusan Check in
//     Route::get('checkin', 'Admin\CheckinController@index')->name('admin.checkin.index');
//     Route::get('checkin/create', 'Admin\CheckinController@create')->name('admin.checkin.create');
//     Route::post('checkin/create', 'Admin\CheckinController@store')->name('admin.checkin.store');
//     Route::get('checkin/{id}', 'Admin\CheckinController@show')->name('admin.checkin.show');
//     Route::get('checkin/{id}/edit', 'Admin\CheckinController@edit')->name('admin.checkin.edit');
//     Route::patch('checkin/{id}', 'Admin\CheckinController@update')->name('admin.checkin.update');
//     Route::delete('checkin/{id}', 'Admin\CheckinController@destroy')->name('admin.checkin.destroy');
// });
