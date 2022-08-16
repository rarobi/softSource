<?php

Route::group(['module' => 'Advertisement', 'middleware' => ['web'], 'namespace' => 'App\Modules\Advertisement\Controllers\Backend'], function() {

    Route::resource('advertisement', 'AdvertisementController');

});
