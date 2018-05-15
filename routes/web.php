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

Route::get('/','HomeController@index')->name('home');
Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

Route::get('catagory/{catagory}', 'CatagoryController@show')->name('explore');
Route::get('books/add-new','HomeController@create')->name('addbook');
Route::post('books/add-new','BookController@store')->name('book.store');
Route::get('book/{book}', 'BookController@show')->name('book.show');

Auth::routes();
