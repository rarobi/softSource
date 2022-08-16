<?php

Route::group(['module' => 'Videos', 'middleware' => ['web'], 'namespace' => 'App\Modules\Videos\Controllers\Backend'], function() {

    Route::resource('video', 'VideosController');

});
