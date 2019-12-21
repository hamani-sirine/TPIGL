<?php



use Illuminate\Support\Facades\Route;

///Contains web routes for the application.
///
///Here is where we register web routes for our application. 
///These routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group.

Route::get('/etud',"EtudiantController@create");
Route::get('/cr',"EtudiantController@Ajouter_etudiant");
Route::get('/viewst',"EtudiantController@ViewStud");

Route::get('/admin',"AdminController@create");
Route::get('/cr2',"AdminController@Ajouter_admin");

Route::get('/ens',"EnseignantController@create");
Route::get('/cr3',"EnseignantController@Ajouter_enseignant");


Route::get('/notes/{id}','NoteController@index')->name('notes');




