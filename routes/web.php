<?php

use App\Http\Controllers\addChildController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\CoursesController;
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

    /*********** Start contact us Route ***************/
    Route::post('/contact', [contactController::class, 'contact']);
    /*********** End contact us Route ***************/
});

////////////////////////////////////////////////////////////////////////////////////////////////

/*------------------------------------------------------------------------*/
// Users Routes
Route::group(['middleware' => 'login_auth'], function () {

    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/home', function () {
        return view('pages.home');
    });

    Route::get('/avoid', function () {
        return view('pages.avoid');
    });

    /*********** Start courses Route ***************/

    Route::get('/courses', [CoursesController::class, 'show_courses']);

    Route::post('/fav/{id}', [CoursesController::class, 'add_favorite']);

    Route::get('/videos/{id}', [CoursesController::class, 'show_videos']);

    /*********** End courses Route ***************/


    /*********** Start childs Route ************/

    Route::post('/add-child/{id}', [addChildController::class, 'addChild']);

    Route::get('/child-profile/{id}', [addChildController::class, 'showChildProfile']);
    /*********** Start childs Route ************/



    Route::get('/diog', function () {
        return view('pages.diog');
    });

    Route::get('/result', function () {
        return view('pages.result');
    });
});

/*------------------------------------------------------------------------*/

    // Route::get('/email-forget-password', function () {
    //     return view('pages.email-forget-password');
    // });
    // Route::get('/forget-pass', function () {
    //     return view('pages.forget-pass');
    // });