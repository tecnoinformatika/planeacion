<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitucionesOficialesController;

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

Route::get('/instituciones', [InstitucionesOficialesController::class, 'instituciones'])->name('instituciones');
Route::get('/institucionesData', [InstitucionesOficialesController::class, 'institucionesData'])->name('institucionesData');
Route::get('/cupos/{id}', [InstitucionesOficialesController::class, 'cupos'])->name('cupos');