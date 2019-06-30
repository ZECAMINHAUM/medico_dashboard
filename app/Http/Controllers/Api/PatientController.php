<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use App\MedicalConsultation;

class PatientController extends Controller
{

    protected $model;

    public function __construct(Patient $patients, Request $request)
    {
        $this->model = $patients;
        $this->request = $request;
    }

    public function medical_consutations($id){
        return Patient::find($id)->medical_consutations;
    }

    public function findPatient($telefone){
        $patient = Patient::where('phone', $telefone)->first();

        if($patient === null){
            return response()->json(['success' => false], 400);
        }
        $data = Patient::find($patient->id)->medical_consutations;
        if($data === null){
            return response()->json(['success' => true, $data], 400);
        }
        $data = MedicalConsultation::find($data->id)->prescription;
        return response()->json(['success' => true, $data], 200);
    }
    
}
