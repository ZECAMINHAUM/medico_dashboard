<?php

use Illuminate\Http\Request;

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

Route::namespace('Api')->group(function () {
    Route::apiResource('patient', 'PatientController');
    Route::apiResource('consultation', 'ConsultationController');
    Route::apiResource('prescription', 'PrescriptionController');
    Route::apiResource('doctor', 'DoctorController');
});