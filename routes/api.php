<?php

use App\Http\Controllers\apiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::group(['prefix'=>'/api'], function(){
    Route::get('/login/{mobile}',[apiController::class,'login']);
    Route::post('/logincheck',[apiController::class,'logincheck']);
    Route::post('/isvalide',[apiController::class,'isvalide']);
    Route::get('/getcourse',[apiController::class,'getcourse']);
    Route::get('/getsubject/{course_id}',[apiController::class,'getsubject']);
    Route::get('/getcontent/{subject_id}',[apiController::class,'getcontent']);
    Route::get('/mycourse',[apiController::class,'mycourse']);
    Route::get('/notification',[apiController::class,'mynotification']);
// });