<?php

Route::group(['module' => 'Subscriber', 'middleware' => ['api'], 'namespace' => 'App\Modules\Subscriber\Controllers'], function() {

    Route::resource('Subscriber', 'SubscriberController');

});
