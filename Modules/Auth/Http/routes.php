<?php

use Modules\Admin\Http\Middleware\AdminMiddleware;

Route::group(
    [
        // 'middleware' => AdminMiddleware::class,
        'middleware' => ['web', AdminMiddleware::class],
        'prefix' => 'admin',
        'namespace' => 'Modules\Auth\Http\Controllers'
    ],
    function () {
        Route::resource('roles', 'RoleController');
        Route::get('roles/adduser/{id}', 'RoleController@addUser');
        Route::post('roles/storeUser/{id}', 'RoleController@storeUser');
        Route::delete('roles/destroyUser/{id}', 'RoleController@destroyUser');
        Route::resource('abilities', 'AbilitiesController');
    }
);
