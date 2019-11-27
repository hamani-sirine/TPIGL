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

Route::post('/etud',"EtudiantController@create");
Route::post('/cr',"EtudiantController@Ajouter_etudiant");
Route::get('/viewst',"EtudiantController@ViewStud");

Route::post('/admin',"AdminController@create");
Route::post('/cr2',"AdminController@Ajouter_admin");

Route::post('/ens',"EnseignantController@create");
Route::post('/cr3',"EnseignantController@Ajouter_enseignant");


Route::get('/notes/{id}','NoteController@index')->name('notes');
