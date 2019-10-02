<?php

Route::get('product/view',function (){
   return view('product/form');
});
Route::get('product/view',function (){
   return view('product/form');
})->name('form-input-product');
Route::post('product/view','ProductController@addProduct')->name('add-product');
