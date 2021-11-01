<?php

Route::get('/cdn/{width}/{height}/{image}', 'ImageController@resize')
->where('width', '[0-9]+')
->where('height', '[0-9]+')
->where('image', '.*')->name('cdn');
