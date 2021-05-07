<?php
Route::group(['prefix'=>'/','namespace'=>'frontend'], function (){
    //Trang chủ
    Route::get('/','Frontendcontroller@index')->name('home');
    //logout

    //login
    route::get('/dang-ky','Frontendcontroller@dang_ky')->name('dang_ky');
    route::post('/dang-ky','Frontendcontroller@post_dangky');
    route::get('/dang-nhap','Frontendcontroller@dangNhap')->name('dang-nhap');
    route::post('/dang-nhap','Frontendcontroller@post_dangnhap');
    Route::get('/home-logout','Frontendcontroller@logout')->name('logout');
    //Liên hệ
    Route::get('/contact','Frontendcontroller@contact')->name('contact');
    Route::post('/contact','Frontendcontroller@post_contact')->name('contact');
    //Tin tức
    Route::get('/blog','Frontendcontroller@blog')->name('blog');
    Route::get('/blog-detail/{id}','Frontendcontroller@blogdetail')->name('blog-detail');
    //Sản phẩm
    Route::get('/product-detail/{id}','Frontendcontroller@productDetail')->name('product-detail');
    //Giỏ hàng
    route::get('add-cart/{id}','CartController@add')->name('add-cart');
    route::get('show-cart','CartController@show')->name('show-cart');
    route::post('show-cart','CartController@update')->name('update');
    route::get('delete-cart/{id}','CartController@delete')->name('delete-cart');
    //Danh mục sp
    route::get('/category','FrontendController@danhmuc')->name('danhmuc');
    route::get('/danh-muc/{id}','FrontendController@product')->name('cate-pro');
    //Danh muc cua hang
    route::get('/cua-hang/{id}','FrontendController@store')->name('cate-store');
    //tim kiem
    route::get('/search','FrontendController@get_search')->name('search');
    //dat hang
    route::get('/dat-hang','CheckoutController@index')->name('checkout');
    route::post('/dat-hang','CheckoutController@submit_form')->name('checkout');
    route::get('/gr','CheckoutController@success')->name('checkout.success');

    //don hang
    Route::get('/don-hang', 'FrontendController@order')->name('order-frontend');
    Route::get('don-hang/chi-tiet/{id}', 'FrontendController@order_detail')->name('order-detail-frontend');
    Route::post('don-hang/chi-tiet/{id}', 'FrontendController@post_order_detail');

});

//Route::get('/home-login','frontend\FrontendController@login')->name('login');
//Route::post('/home-logout','frontend\FrontendController@post_login')->name('login');
//Route::get('/home-logout','frontend\FrontendController@logout')->name('home.logout');
//Route::get('admin/login','backend\DadminController@login')->name('login');
//Route::post('admin/login','backend\DadminController@postLogin');
//Route::get('admin/logout','backend\DadminController@logout')->name('logout');

