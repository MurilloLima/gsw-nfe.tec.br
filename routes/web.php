<?php
Route::group(['prefix' => 'panel', 'middleware' => ['auth']], function () {

    Route::get('/', 'Panel\HomeController@index')->name('admin.index');

    //products
    Route::get('products/', 'Panel\ProductsController@index')->name('admin.products');
    Route::get('product/create/', 'Panel\ProductsController@create')->name('admin.product.create');
    Route::post('product/', 'Panel\ProductsController@store')->name('admin.product.store');
    Route::get('product/edit/{id}', 'Panel\ProductsController@edit')->name('admin.product.edit');
    Route::post('product/update/{id}', 'Panel\ProductsController@update')->name('admin.product.update');
    Route::get('product/delete/{id}', 'Panel\ProductsController@delete')->name('admin.product.delete');

    //Clients
    Route::get('clients/', 'Panel\ClientsController@index')->name('admin.clients');
    Route::get('client/create/', 'Panel\ClientsController@create')->name('admin.client.create');
    Route::post('client/', 'Panel\ClientsController@store')->name('admin.client.store');
    Route::get('client/edit/{id}', 'Panel\ClientsController@edit')->name('admin.client.edit');
    Route::post('client/update/{id}', 'Panel\ClientsController@update')->name('admin.client.update');
    Route::get('client/delete/{id}', 'Panel\ClientsController@delete')->name('admin.client.delete');

    //NFCe
    Route::get('nfce/', 'Panel\NfceController@index')->name('admin.nfce');
    Route::get('nfce/create/', 'Panel\NfceController@create')->name('admin.nfce.create');

    Route::get('tools/', 'Panel\ToolsController@index')->name('admin.tools');
    Route::post('tools/', 'Panel\ToolsController@update')->name('admin.tools.update');
});


Auth::routes();
