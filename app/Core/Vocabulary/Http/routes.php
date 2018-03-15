<?php
Route::group([], function () {
    Route::resource('vocabularies', 'VocabularyController');
});