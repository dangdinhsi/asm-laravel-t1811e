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
    return view('welcome');
});
Route::get('/danh-sach-san-pham',function (){
   return view('dsProduct');
});
Route::get('/addSanpham',function (){
   return view('addSanpham');
})->name('input-sp');
Route::post('/addSanpham','SanphamController@addSP')->name('add-sp');
Route::get('/danh-sach-san-pham-method-2','SanphamController@listSP')->name('list-sp');
