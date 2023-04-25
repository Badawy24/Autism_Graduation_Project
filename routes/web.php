<?php

use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

/*------------------------------------------------------------------------*/
// Language Routes

/*********** Start Lang Route ***************/
Route::get('langSwap/{local}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session()->put('locale', $locale);
    }

    return redirect()->back();
})->name('langSwap');

/*********** End Lang Route ***************/

////////////////////////////////////////////////////////////////////////////////////////////////

/*------------------------------------------------------------------------*/
// Guests Routes
Route::group(['middleware' => 'guest'], function () {

    // ---------------------------------------------------

    /*********** Start index Route ***************/
    Route::get('/', function () {
        return view('pages.index');
    });
    /*********** End index Route ***************/

    /*------------------------------------------------------------------------*/

    /*********** Start Register Route ***************/
    Route::get('/register', [RegisterController::class, 'showRegister']);
    Route::post('/register', [RegisterController::class, 'registration']);
    /*********** End Register Route***************/

    /*------------------------------------------------------------------------*/

    /*********** Start Login Route ***************/
    Route::get('/login', [LoginController::class, 'showLogin']);
    Route::post('/login', [LoginController::class, 'login']);
    /*********** End Login Route ***************/

    /*------------------------------------------------------------------------*/

    /*********** Start reset password Route ***************/
    Route::get('/email-forget-password', [ForgetPasswordController::class, 'showForgetPasswordForm']);
    Route::get('/reset-form', [ForgetPasswordController::class, 'showResetPassForm']);
    Route::post('/reset-password', [ForgetPasswordController::class, 'resetPassword']);
    /*********** End reset password Route ***************/
});

////////////////////////////////////////////////////////////////////////////////////////////////

/*------------------------------------------------------------------------*/
// Users Routes
Route::group(['middleware' => 'login_auth'], function () {

    Route::get('/logout', [LoginController::class, 'logout']);

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
    Route::get('/head', function () {
        return view('pages.head');
    });
    Route::get('/home', function () {
        return view('pages.home');
    });

    Route::get('/result', function () {
        return view('pages.result');
    });
    Route::get('/videos', function () {
        return view('pages.videos');
    });
});

/*------------------------------------------------------------------------*/

    // Route::get('/email-forget-password', function () {
    //     return view('pages.email-forget-password');
    // });
    // Route::get('/forget-pass', function () {
    //     return view('pages.forget-pass');
    // });