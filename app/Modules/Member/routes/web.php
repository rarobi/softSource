<?php

Route::group(['module' => 'Member', 'middleware' => ['web'], 'namespace' => 'App\Modules\Member\Controllers'], function() {

    Route::resource('member', 'MemberController');

});
