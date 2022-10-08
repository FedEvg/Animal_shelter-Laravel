<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Breed', 'prefix' => 'breeds'], function () {
        Route::get('/', 'IndexController')->name('admin.breed.index');
        Route::get('/create', 'CreateController')->name('admin.breed.create');
        Route::post('/', 'StoreController')->name('admin.breed.store');
        Route::get('/{breed}', 'ShowController')->name('admin.breed.show');
        Route::get('/{breed}/edit', 'EditController')->name('admin.breed.edit');
        Route::patch('/{breed}', 'UpdateController')->name('admin.breed.update');
        Route::delete('/{breed}', 'DestroyController')->name('admin.breed.destroy');
    });
    Route::group(['namespace' => 'Animal', 'prefix' => 'animals'], function () {
        Route::get('/', 'IndexController')->name('admin.animal.index');
        Route::get('/create', 'CreateController')->name('admin.animal.create');
        Route::post('/', 'StoreController')->name('admin.animal.store');
        Route::get('/{animal}', 'ShowController')->name('admin.animal.show');
        Route::get('/{animal}/edit', 'EditController')->name('admin.animal.edit');
        Route::patch('/{animal}', 'UpdateController')->name('admin.animal.update');
        Route::delete('/{animal}', 'DestroyController')->name('admin.animal.destroy');
    });

});
