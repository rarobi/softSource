<?php

Route::group(['module' => 'Settings', 'middleware' => ['web','auth'], 'namespace' => 'App\Modules\Settings\Controllers\Backend'], function() {

    /*
     * Social Management Routes
     */
    Route::delete('settings/socials/{id}/delete','SocialSettingsController@destroy')->name('settings.socials.destroy');
    Route::resource('settings/socials', 'SocialSettingsController', ['names' => [
        'index'     => 'settings.socials.index',
        'create'    => 'settings.socials.create',
        'store'    => 'settings.socials.store',
        'edit'      => 'settings.socials.edit',
        'update'     => 'settings.socials.update',
    ]]);

    Route::resource('settings/general', 'SettingsController', ['names' => [
        'index'     => 'settings.general.index',
        'create'    => 'settings.general.create',
        'store'    => 'settings.general.store',
        'edit'      => 'settings.general.edit',
        'update'     => 'settings.general.update',
    ]]);

});
