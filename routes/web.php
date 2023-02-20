<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/avoid', function () {
    return view('pages.avoid');
});
Route::get('/child-profile', function () {
    return view('pages.child-profile');
});
Route::get('/courses', function () {
    return view('pages.courses');
});
Route::get('/diog', function () {
    return view('pages.diog');
});
Route::get('/email-forget-password', function () {
    return view('pages.email-forget-password');
});
Route::get('/forget-pass', function () {
    return view('pages.forget-pass');
});
Route::get('/head', function () {
    return view('pages.head');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/result', function () {
    return view('pages.result');
});
Route::get('/videos', function () {
    return view('pages.videos');
});