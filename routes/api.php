<?php

use App\Http\Controllers\EasportsPageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('/getEasportsPage/{page}', [EasportsPageController::class, 'index']);

Route::group(["middleware" => "apikey.validate"], function () {

    //Rutas
    Route::get("/getEasportsPage/{page}", "App\Http\Controllers\EasportsPageController@index");
  
});
