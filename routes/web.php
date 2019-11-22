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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/add',"EtudiantController@create");
Route::get('/cr',"EtudiantController@create_post");

Route::get('/view',"EtudiantController@ViewStud");
=======
Route::get('/notes/{id}','NoteController@index')->name('index');


>>>>>>> 76cf204b09574a44880bfddc0ed97d86b826a1e4

