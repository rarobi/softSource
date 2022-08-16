<?php

Route::group(['module' => 'News', 'middleware' => ['web'], 'namespace' => 'App\Modules\News\Controllers\Backend'], function() {

    Route::resource('news', 'NewsController');

});

//Route::group(['module' => 'News', 'middleware' => ['web'], 'namespace' => 'App\Modules\News\Controllers\Frontend'], function() {
Route::group(['module' => 'News', 'namespace' => 'App\Modules\News\Controllers\Frontend'], function() {

    Route::get('/', 'HomeController@index')->name('home');;

    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/portfolio-list', 'HomeController@portfolio')->name('portfolio');
    Route::get('/blog-list', 'HomeController@blog')->name('blog');
    Route::get('/blog-details/{id}', 'HomeController@blogDetails')->name('blog-details');
    Route::get('/services', 'HomeController@service')->name('services');
    Route::get('/team', 'HomeController@team')->name('team');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::post('/contact', 'HomeController@contactStore')->name('contact');

//    Route::get('{lang}/international', 'InternationalNewsController@index');
//    Route::get('{lang}/sports', 'SportsNewsController@index');
//    Route::get('{lang}/business', 'BusinessNewsController@index');
//    Route::get('{lang}/opinion', 'OpinionNewsController@index');
//    Route::get('{lang}/economics', 'EconomicsNewsController@index');
//    Route::get('{lang}/entertainment', 'EntertainmentNewsController@index');
//    Route::get('{lang}/life-style', 'LifeStyleNewsController@index');
//
//    Route::get('{lang}/video', 'VideoNewsController@index');
//    Route::get('{lang}/video/{id}', 'VideoNewsController@show');


});
