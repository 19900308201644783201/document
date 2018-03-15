<?php
Route::group(['prefix' => 'toeic'], function () {
    Route::resource('part6', 'Part6Controller');
});