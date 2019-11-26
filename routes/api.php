<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/etud',"EtudiantController@create");
Route::get('/cr',"EtudiantController@Ajouter_etudiant");
Route::get('/viewst',"EtudiantController@ViewStud");

Route::get('/admin',"AdminController@create");
Route::get('/cr2',"AdminController@Ajouter_admin");

Route::get('/ens',"EnseignantController@create");
Route::get('/cr3',"EnseignantController@Ajouter_enseignant");


Route::get('/notes/{id}','NoteController@index')->name('notes');
