<?php
Route::group(['prefix' => 'panel', 'middleware' => ['auth']], function () {

    Route::get('/', 'Panel\HomeController@index')->name('admin.index');

    //products
    Route::get('products/', 'Panel\ProductsController@index')->name('admin.products');
    Route::get('products/create/', 'Panel\ProductsController@create')->name('admin.product.create');
    Route::post('product/', 'Panel\ProductsController@store')->name('admin.product.store');
    Route::get('products/edit/{id}', 'Panel\ProductsController@edit')->name('admin.product.edit');
    Route::post('products/update/{id}', 'Panel\ProductsController@update')->name('admin.product.update');
    Route::get('products/delete/{id}', 'Panel\ProductsController@delete')->name('admin.product.delete');
    
    //Clients
    Route::get('clients/', 'Panel\ClientsController@index')->name('admin.clients');

    Route::get('nfce/', 'Panel\NfceController@index')->name('admin.nfce');
    Route::get('nfce/create/', 'Panel\NfceController@create')->name('admin.nfce.create');

    Route::get('tools/', 'Panel\ToolsController@index')->name('admin.tools');
});


Auth::routes();
