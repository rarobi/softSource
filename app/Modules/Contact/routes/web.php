<?php

Route::group(['module' => 'Contact', 'middleware' => ['web'], 'namespace' => 'App\Modules\Contact\Controllers'], function() {

    Route::resource('contact-details', 'ContactController');

});
