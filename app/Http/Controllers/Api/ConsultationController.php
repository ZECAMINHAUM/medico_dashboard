<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MedicalConsultation;

class ConsultationController extends Controller
{
    protected $model;

    public function __construct(MedicalConsultation $consultations, Request $request)
    {
        $this->model = $consultations;
        $this->request = $request;
    }

    public function prescritions($id){
        return MedicalConsultation::find($id)->prescritions;
    }    
}
