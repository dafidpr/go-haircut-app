<?php

use Illuminate\Support\Facades\Route;

// Route Frontend
Route::get('/', 'HomeController@index');
Route::get('/explore', 'ExploreController@index');


Route::get('/administrator', 'Admin\DashboardController@index');
// Route Backend
// Route::prefix('administrator')->middleware(['auth.login_only', 'role.access_validator'])->group(function () {

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
// });

// Route::prefix('auth')->group(function () {
//     Route::prefix('login')->middleware('auth.logout_only')->group(function () {
//         Route::get('', 'Admin\Auth\AuthController@login');
//         Route::post('', 'Admin\Auth\AuthController@postLogin');
//     });
//     Route::get('/logout', 'Admin\Auth\AuthController@logout');
// });
