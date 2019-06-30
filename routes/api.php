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

    //Doctor Custom routes
    Route::get('doctor/{id}/patients', 'DoctorController@doctorPatients');
    Route::get('doctor/{id}/consultations', 'DoctorController@doctorConsultations');
    
    //Patient Custon routes
    Route::get('patient/{id}/consultations', 'PatientController@patientConsultations');

    //Medical Consultation custom routes
    Route::get('consultation/{id}/prescriptions', 'ConsultationController@consultationPrescriptions');
    


    //Lucas
    /*Route::get('doctor/patients/{id}', 'DoctorController@getAllPatients');
    Route::get('doctor/consultations/{id}', 'DoctorController@medical_consultations');

    Route::get('patient/consultations/{id}', 'PatientController@medical_consutations');

    Route::get('consultations/prescriptions/{id}', 'ConsultationController@prescritions');
    

    Route::get('patient/find/{telefone}', 'PatientController@findPatient');
    */
});