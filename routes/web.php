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



Route::middleware(['auth'])->group(function(){
	Route::get('/', function () {
    return view('frontpage');
	});

	Route::get('/notebooks.html','NotebooksController@index' );
Route::post('/notebooks.html','NotebooksController@store' );


Route::get('/notebooks.html/create','NotebooksController@create' );
Route::get('/notebooks.html/{notebooks}','NotebooksController@show' )->name('notebooks.show');
Route::get('/notebooks.html/{notebooks}/edit','NotebooksController@edit' )->name('notebooks.edit');

Route::put('/notebooks.html/{notebooks}','NotebooksController@update' );

Route::delete('/notebooks.html/{notebooks}','NotebooksController@destroy' );

Route::resource('notes','NotesController');
});

Route::get('notes/{notebookId}/createNote','NotesController@createNote')->name('notes.createNote');




Auth::routes();