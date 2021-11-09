<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', "HomeController@index")->name('home');
Route::get('/{page_name}', "HomeController@index")->name('pages');
Route::post('/{page_name}','HomeController@changeLocale')->name("content.changeLocale");
Route::group(['prefix' => 'admin'],function(){
    Auth::routes();
});

// Demo routes
Route::group(['middleware' => 'auth'], function () {
//    route for dashboard
    
    Route::get('/dashboard', 'PagesController@index');

    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('settings', 'SettingsController');

    Route::post('delete-language/{language}', 'UserController@deleteLanguage')->name('language.delete');;

    Route::get('/datatables', 'PagesController@datatables');
    Route::get('/ktdatatables', 'PagesController@ktDatatables');
    Route::get('/select2', 'PagesController@select2');
    Route::get('/jquerymask', 'PagesController@jQueryMask');
    Route::get('/icons/custom-icons', 'PagesController@customIcons');
    Route::get('/icons/flaticon', 'PagesController@flaticon');
    Route::get('/icons/fontawesome', 'PagesController@fontawesome');
    Route::get('/icons/lineawesome', 'PagesController@lineawesome');
    Route::get('/icons/socicons', 'PagesController@socicons');
    Route::get('/icons/svg', 'PagesController@svg');

//    routes for edit pages content
    Route::get('/dashboard/{page}','ContentController@index')->name('content.edit');
    Route::post('/dashboard/{page}','ContentController@update')->name("content.update");
    Route::post('/dashboard/img/{page}','ContentController@updateImage')->name("image.update");
   

// Quick search dummy route to display html elements in search dropdown (header search)
    Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
});
