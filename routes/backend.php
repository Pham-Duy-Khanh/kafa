<?php
Route::group(['prefix'=>'admin','namespace'=>'backend','middleware'=>'checkAdmin'],function(){
//    route::get("","DadminController@index")->name('backend.login');
    Route::get('/','DadminController@index')->name('backend.home');

    Route::resources(['category' => 'CategoryController']);
    Route::resources(['product' => 'ProductController']);
    Route::resources(['banner' => 'BannerController']);
    Route::resources(['blog' => 'BlogController']);
    Route::resources(['storecate' => 'StoreCateController']);
    Route::resources(['store' => 'StoreController']);
    Route::get('dang-xuat','DadminController@logout')->name('dang-xuat');

    Route::get('order','OrderController@index')->name('order_backend');
    Route::get('order/{id}/order_detail', 'Order_detailController@index')->name('order_detail_backend');
    Route::post('order/{id}/order_detail', 'Order_detailController@update');


});
//route::get('admin/dang-ky','backend\DadminController@dangKy')->name('dang-ky');
//route::post('admin/dang-ky','backend\DadminController@post_dang_ky');
Route::get('login','backend\DadminController@login');
Route::post('login','backend\DadminController@postLogin');
//Route::get('logout','backend\DadminController@logout')->name('logout');
//Route::get('admin/logout','backend\DadminController@logout')->name('logout');


//route::get('/dang-nhap','HomeController@dangNhap')->name('dang-nhap');
//route::post('/dang-nhap','HomeController@post_dang_nhap');

