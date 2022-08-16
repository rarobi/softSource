<?php

Route::group(['module' => 'Portfolio', 'middleware' => ['api'], 'namespace' => 'App\Modules\Portfolio\Controllers'], function() {

    Route::resource('Portfolio', 'PortfolioController');

});
