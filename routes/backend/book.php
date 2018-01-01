<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => 'book',
    'as'         => 'book',
    'namespace'  => 'Book',
], function () {
    Route::group([
        'middleware' => 'role:administrator',
    ], function () {
        Route::resource('book', 'BookController');
    });
});
