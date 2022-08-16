<?php

Route::group(['module' => 'Dashboard', 'middleware' => ['web','auth'], 'namespace' => 'App\Modules\Dashboard\Controllers\Backend'], function() {

    Route::resource('dashboard', 'DashboardController');

});
