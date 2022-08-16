<?php

Route::group(['module' => 'Category', 'middleware' => ['web'], 'namespace' => 'App\Modules\Category\Controllers\Backend'], function() {

    Route::resource('category', 'CategoryController');

});
