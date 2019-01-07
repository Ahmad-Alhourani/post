<?php

/**
 * Post Management
 * All route names are prefixed with 'admin.post'.
 */
Route::group(
    [
        'namespace' => 'Post',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Post CRUD
         */
        Route::resource('post', 'PostController');
    }
);
