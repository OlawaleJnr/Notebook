<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
    return view('index');
});

Route::get('/dashboard', 'NotebookController@dashboard')->name('notebooks.dashboard');

Route::resource('/notebooks', 'NotebookController');

Route::resource('/notes', 'NoteController');

Route::get('/notes/{notebook}/create-note', 'NoteController@createNote')->name('notes.createNote');

Auth::routes();

