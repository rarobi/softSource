<?php

Route::group(['module' => 'Blog', 'middleware' => ['web'], 'namespace' => 'App\Modules\Blog\Controllers'], function() {

    Route::resource('blog', 'BlogController');

});
