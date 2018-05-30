<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('admin.index');
});*/

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/main', function () {
    return view('admin.main.main');
});

Route::get('/admin/users', function () {
    return view('admin.users.user');
});
