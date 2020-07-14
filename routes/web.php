<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('feedback', function () {

    $page_title = '<span style="color: #FF0000">Borang Maklum Balas</span>';
    $copyright = 'Hak Cipta PKPREG';

    // Cara 1 passing data ke view
    // return view('borang_feedback', ['page_title' => $page_title, 'copyright' => $copyright]);
    // Cara 2 passing data ke view
    // return view('borang_feedback')
    // ->with('page_title', $page_title)
    // ->with('copyright', $copyright);
    // Cara 3 passing data ke view
    return view('borang_feedback', compact('page_title', 'copyright'));
});

Route::get('kehadiran', function () {

    $page_title = 'Borang Kehadiran';

    return view('borang_kehadiran', compact('page_title'));

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
