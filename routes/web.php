<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*********** Start Lang Route***************/
Route::get('langSwap/{local}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session()->put('locale', $locale);
    }

    return redirect()->back();
})->name('langSwap');

/*********** End Lang Route***************/

Route::get('/', function () {
    return view('pages.index');
});

// ---------------------------------------------------

/*********** Start Register Route***************/
Route::get('/register', function () {
    return view('pages.register');
});

Route::post('/register', [RegisterController::class, 'registration']);
/*********** End Register Route***************/


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

Route::get('/result', function () {
    return view('pages.result');
});
Route::get('/videos', function () {
    return view('pages.videos');
});