<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PageController@index');
    Route::post('/contact', 'ContactController@send');
});
