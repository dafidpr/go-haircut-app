<?php

use Illuminate\Support\Facades\Route;

// Route Frontend
Route::get('/', 'HomeController@index');
Route::get('/explore', 'ExploreController@index');
Route::get('/booking', function(){
    $data['title'] = "Booking";
    return view('booking', $data);
});
Route::get('/profile-barber', function(){
    $data['title'] = "Hairneds Studio";
    return view('barber-profile', $data);
});
Route::get('/success', function(){
    $data['title'] = "Success Order";
    return view('success-order', $data);
});


// Route Backend
Route::prefix('administrator')->middleware('auth.login_only')->group(function () {

    Route::get('', 'Admin\DashboardController@index');

    // Route Page
    // Route::get('/page', 'Admin\PageController@index');
    // Route::get('/page/getContent', 'Admin\PageController@getContent');
    // Route::get('/page/create', 'Admin\PageController@addForm');
    // Route::get('/page/edit/{id}', 'Admin\PageController@edit');
    // Route::post('/page/store', 'Admin\PageController@store');
    // Route::patch('/page/update/{id}', 'Admin\PageController@update');
    // Route::delete('/page/delete/{id}', 'Admin\PageController@destroy');

    //Datatable Page
    // Route::get('/page/loadDatatable', 'Admin\PageController@loadDatatable');

    //Route ParentPage
    // Route::get('/parentPage', 'Admin\ParentPageController@index');
    // Route::get('/parentPage/getContent', 'Admin\ParentPageController@getContent');
    // Route::get('/parentPage/create', 'Admin\ParentPageController@addForm');
    // Route::get('/parentPage/edit/{id}', 'Admin\ParentPageController@edit');
    // Route::post('/parentPage/store', 'Admin\ParentPageController@store');
    // Route::patch('/parentPage/update/{id}', 'Admin\ParentPageController@update');
    // Route::delete('/parentPage/delete/{id}', 'Admin\ParentPageController@destroy');

    //Datatable Page
    // Route::get('/parentPage/loadDatatable', 'Admin\ParentPageController@loadDatatable');

    //Route Role
    // Route::get('/role', 'Admin\RoleController@index');
    // Route::get('/role/getContent', 'Admin\RoleController@getContent');
    // Route::get('/role/create', 'Admin\RoleController@addForm');
    // Route::get('/role/edit/{id}', 'Admin\RoleController@edit');
    // Route::post('/role/store', 'Admin\RoleController@store');
    // Route::patch('/role/update/{id}', 'Admin\RoleController@update');
    // Route::delete('/role/delete/{id}', 'Admin\RoleController@destroy');

    //Datatable Role
    // Route::get('/role/loadDatatable', 'Admin\RoleController@loadDatatable');

    // Update Permission Role
//     Route::post('/role/updatePermission/{permission_id}/{role_id}', 'Admin\RoleController@updatePermission');
});
Route::prefix('/barber')->middleware('auth.login_member')->group(function () {

    Route::get('', 'Barber\DashboardController@index');
    Route::get('/edit_profile', 'Barber\BarberSettingController@index');
    Route::patch('/edit_profile/{id}', 'Barber\BarberSettingController@update');
    Route::get('/update_password', 'Barber\BarberSettingController@update_password');
    Route::patch('/update_password/{id}', 'Barber\BarberSettingController@change_password');
});
Route::prefix('/customer')->middleware('auth.login_member')->group(function () {
    Route::get('/edit_profile', 'Customer\CustomerController@edit_profile');
    Route::patch('/edit_profile/{id}', 'Customer\CustomerController@update_profile');
    Route::get('/update_password', 'Customer\CustomerController@update_password');
    Route::patch('/update_password/{id}', 'Customer\CustomerController@change_password');
});
Route::prefix('auth')->group(function () {
    Route::prefix('login')->middleware('auth.logout_only')->group(function () {
        Route::get('', 'Admin\Auth\AuthController@login');
        Route::post('', 'Admin\Auth\AuthController@postLogin');
    });
    Route::get('/logout', 'Admin\Auth\AuthController@logout');
    
});
Route::prefix('member')->group(function () {
    Route::prefix('login')->middleware('auth.logout_member')->group(function () {
        Route::get('', 'AuthController@login');
        Route::post('', 'AuthController@postLogin');
    });
    Route::get('/register', 'AuthController@register');
    Route::get('/register-member', 'AuthController@register_member');
    Route::post('/register-member', 'AuthController@PostRegister_member');
    Route::post('/register', 'AuthController@postRegister');
    Route::get('/logout', 'AuthController@logout');
    
});
