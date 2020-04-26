<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/',['as'=>'/','uses'=>'LoginControllers@getLogin']);
Route::post('/login',['as'=>'logins','uses'=>'LoginControllers@postLogin']);

Route::group(['middleware'=>'auth'], function() {

    Route::get('/frontpage', function () {
        return view('frontpage');
    })->name('frontpage');

    Route::get('/notes', function () {
        return view('notes');
    });
    Route::get('/editTable', function () {
        return view('editTable');
    });

    Route::get('/editNote', function () {
        return view('editNote');
    });

    Route::get('/logout',['as'=>'logout','uses'=>'LoginControllers@getLogout']);

  Route::get('/dashboard', 'NotebookController@index')->name('display');
  Route::get('/createNote', 'NotebookController@create')->name('add-note');
  Route::post('/saveTable', 'NotebookController@store')->name('save-note');


    Route::get('/dashboard/{notebooks}', 'NotebookController@show')->name('show');
    Route::get('/dashboard/{note}', 'NoteController@show')->name('note.shows');
    Route::get('/dashboard/{notebooks}/edit', 'NotebookController@edit')->name('edit');
    Route::put('/dashboard/{notebooks}', 'NotebookController@update');
    Route::delete('/dashboard/{notebooks}', 'NotebookController@del')->name('delete');


    Route::resource('notes', 'NoteController');
    Route::resource('notebook', 'NotebookController');
    Route::get('/notes/{notebookId}/createNote', 'NoteController@createNote')->name('notes.createNote');



});


Auth::routes();


Route::get('/slide', function () {
    return view('slide');
});
Route::get('/newNote', function () {
    return view('newNote');

});

//Route::get('/home', 'HomeController@index');
