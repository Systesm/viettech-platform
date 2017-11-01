<?php

use Modules\Admin\Http\Middleware\AdminMiddleware;

Route::group(
    [
        // 'middleware' => AdminMiddleware::class,
        'middleware' => ['web', AdminMiddleware::class],
        'prefix' => 'admin',
        'namespace' => 'Modules\User\Http\Controllers'
    ],
    function () {
        Route::resource('users', 'UserController');
    }
);
