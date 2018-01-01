<?php


Route::group(['namespace' => 'Book'], function () {
    Route::resource('book', 'BookController', ['except' => ['show']]);
});