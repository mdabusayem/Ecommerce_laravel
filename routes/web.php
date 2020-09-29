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
Route::get('/','PagesController@index')->
name('index');
Route::get('/products','PagesController@products')->name('products');

// Admin
Route::get('/admin','AdminPagesController@index')->name('admin.index');
Route::get('/admin/products','AdminPagesController@manage_products')->name('admin.product.create');
Route::get('/admin/product/create','AdminPagesController@product_create')->name('admin.products');
Route::get('/admin/product/edit/{id}','AdminPagesController@product_edit')->name('admin.product.edit');
Route::post('/admin/product/create','AdminPagesController@product_store')->name('admin.product.store');
Route::post('/admin/product/edit/{id}','AdminPagesController@product_update')->name('admin.product.update');
Route::get('/admin/product/delete/{id}','AdminPagesController@product_delete')->name('admin.product.delete');

// category
Route::get('/category/index','CategoryController@index')->name('admin.categories');
Route::get('/category/create','CategoryController@create')->name('admin.category.create');
Route::get('/category/edit/{id}','CategoryController@edit')->name('admin.category.edit');
Route::post('/category/store','CategoryController@store')->name('admin.category.store');
Route::post('/category/edit/{id}','CategoryController@update')->name('admin.category.update');
Route::get('/category/delete/{id}','CategoryController@delete')->name('admin.category.delete');





Route::get('/welcome', function () {
    return view('welcome');
});
