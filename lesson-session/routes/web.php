<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/painel', 'HomeController@index')->name('student.painel');

Route::get('/share', 'InfoController@share')->name('info.share');
Route::get('/team', 'InfoController@team')->name('info.team');
Route::get('/technologies', 'InfoController@technologies')->name('info.technologies');