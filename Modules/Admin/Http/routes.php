<?php

use Modules\Admin\Http\Middleware\AdminMiddleware;

Route::group(
    [
        // 'middleware' => AdminMiddleware::class,
        'middleware' => ['web', AdminMiddleware::class],
        'prefix' => 'admin',
        'namespace' => 'Modules\Admin\Http\Controllers'
    ],
    function () {
        Route::get('/', 'AdminController@index');
    }
);

Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'admin',
        'namespace' => 'Modules\Admin\Http\Controllers'
    ],
    function () {
        Route::get('login', 'AdminController@login');
        Route::post('store', 'AdminController@store')->name('loginAdmin');
    }
);
