<?php

Route::group(['module' => 'News', 'middleware' => ['api'], 'namespace' => 'App\Modules\News\Controllers'], function() {

    Route::resource('News', 'NewsController');

});
