<?php

use App\Http\Controllers\apiRegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Helpers\MyTokenManager;
use App\Http\Controllers\apiAddChildController;
use App\Http\Controllers\apiCoursesController;
use App\Http\Controllers\apiLoginController;
use App\Http\Controllers\contactControllerApi;
use App\Http\Controllers\ForgetPasswordControllerApi;
use App\Http\Controllers\questionsDiagnosis;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function (Request $request) {
    return [
        'msg' => 'good',
    ];
});

// tested and documented
Route::post('/register', [apiRegisterController::class, 'registration']);

 /******************************************** */
 Route::post('/reset-form', [ForgetPasswordControllerApi::class, 'showResetPassForm']);
 Route::post('/reset-password', [ForgetPasswordControllerApi::class, 'resetPassword']);
 /*********** End reset password Route ***************/

 /*********** Start contact us Route ***************/
 Route::post('/contact', [contactControllerApi::class, 'contact']);

 /******************************************** */

// tested and documented
Route::post('/login', [apiLoginController::class, 'Login']);

Route::group(['middleware' => 'AuthApi'], function () {

    Route::get('/profile', function (Request $request) {
        // get $patient data from DB
        $user = MyTokenManager::currentPatient($request);
        return [
            'user' => $user
        ];
    });

    Route::post('/add-child', [apiAddChildController::class, 'addChild']);

    //
    Route::get('/show-children', [apiAddChildController::class, 'showChildren']);

    Route::get('/child-profile/{id}', [apiAddChildController::class, 'childProfile']);

    Route::delete('/deleteChild/{id}', [apiAddChildController::class, 'deleteChild']);

    Route::put('/editChild/{id}', [apiAddChildController::class, 'editChild']);

    Route::get('/show-courses', [apiCoursesController::class, 'show_courses']);

    Route::get('/video/{id}', [apiCoursesController::class, 'show_videos']);

    Route::get('/childTests/{id}',[questionsDiagnosis::class, 'showTests']);


    Route::post('/diagnoseQuestions/{id}', [questionsDiagnosis::class, 'create']);

   

   // Route::get('/courses',[])

    // tested and documented
    Route::get('/logout', function (Request $request) {
        MyTokenManager::removePatientToken($request);
        return [
            'message' => 'logged out successfully'
        ];
    });
});
