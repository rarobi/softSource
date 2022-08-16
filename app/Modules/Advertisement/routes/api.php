<?php

Route::group(['module' => 'Advertisement', 'middleware' => ['api'], 'namespace' => 'App\Modules\Advertisement\Controllers'], function() {

    Route::resource('Advertisement', 'AdvertisementController');

});
