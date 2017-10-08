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
    return view('index');
});


Route::get('/train', 'IdeaController@trainDataSet');
Route::post('/submit', 'IdeaController@generate_idea');
//Route::post('/result', 'IdeaController@redirect_idea');

