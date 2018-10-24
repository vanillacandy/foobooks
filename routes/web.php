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
//Route::get('/', 'WelcomeController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/{title?}', function ($title=null) {
    if($title ==null){
        return 'You did not sepcify a title';
    }else{
        return 'You are viewing the book: '.$title;
    }

});
Route::any('/practice/{n?}', 'PracticeController@index');

