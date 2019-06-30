<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;

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
    
}
