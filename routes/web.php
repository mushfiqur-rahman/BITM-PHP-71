<?php

Route::get('/', [
    'uses' => 'NewShopController@index',
    'as' => '/'
]);

Route::get('/category-product', [
    'uses' => 'NewShopController@categoryProduct',
    'as' => 'category-product'
]);

Route::get('/mail-us', [
    'uses' => 'NewShopController@mailUs',
    'as' => 'mail-us'
]);

