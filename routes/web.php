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
    return view('welcome');
})->name('homepage');

// Адреса для работы с животными
Route::get('/animal/create', function(){
   return view('animals.create');
});

Route::post('/animal/create', 'Animals@create')->name('animal-create');
Route::get('/animals', 'Animals@show')->name('animals-show');