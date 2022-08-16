<?php

Route::group(['module' => 'Subscriber', 'middleware' => ['web'], 'namespace' => 'App\Modules\Subscriber\Controllers\Backend'], function() {

    Route::resource('subscriber', 'SubscriberController');

});
