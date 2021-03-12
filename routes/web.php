<?php

Auth::routes();

Route::get('/panel', 'Panel\HomeController@index')->name('admin.index');
Route::get('/panel/nfce', 'Panel\NfceController@index')->name('admin.nfce');
Route::get('/panel/nfce/create', 'Panel\NfceController@create')->name('admin.nfce.create');

Route::get('/panel/tools', 'Panel\ToolsController@index')->name('admin.tools');