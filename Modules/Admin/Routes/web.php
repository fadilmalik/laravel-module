<?php

use Modules\Admin\Http\Controllers\BussinessController;

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

// Route::prefix('admin')->group(function() {
//     Route::get('/', 'AdminController@index');
// });

// Route::prefix('admin/user')->group(function() {
//     Route::get('/', 'UserController@index');
// });

Route::get('/', function () {
    return view('admin::home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('admin::about', [
        "title" => "About",
        "name" => "Fadil Malik",
        "email" => "fadilmalik@gmail.com",
        "image" => "formal-bg-blue.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('admin::posts', [
        "title" => "Blog"
    ]);
});

Route::resource('bussiness', 'BussinessController');