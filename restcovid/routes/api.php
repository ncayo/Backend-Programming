<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    # get all resource restcovid
    # method get
    Route::get('/restcovid', [PatientController::class, 'index']);

    # menambahkan resource Patient
    # method post
    Route::post('/restcovid', [PatientController::class, 'store']);

    # mendapatkan detail resource Patient
    # method get
    Route::get('/restcovid/{id}', [PatientController::class, 'show']);

    # mempebaruhi resource Patient
    # method put
    Route::put('/restcovid/{id}', [PatientController::class, 'update']);

    # menghapus resource Patient
    # method delete
    Route::delete('/restcovid/{id}', [PatientController::class, 'destroy']);

    # method get search
    Route::get('/restcovid/search/{name}', [PatientController::class, 'search']);
    // Route::get('/restcovid/status/{status}', [PatientController::class, 'status']);
    Route::get('/restcovid/status/positive', [PatientController::class, 'positive']);
    Route::get('/restcovid/status/recovered', [PatientController::class, 'recovered']);
    Route::get('/restcovid/status/dead', [PatientController::class, 'dead']);
});

# membuat route untuk register dan login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);