<?php

//add student
Route::get('student/create',function (){
   return view('student/form');
})->name('input-student');
Route::post('/student/create','StudentController@addStudent')->name('add-student');
//list student
Route::get('/student/list','StudentController@listStudent')->name('list-student');

