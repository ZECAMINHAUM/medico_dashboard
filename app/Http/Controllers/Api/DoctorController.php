<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;

class DoctorController extends Controller
{
    protected $model;

    public function __construct(Doctor $doctors, Request $request)
    {
        $this->model = $doctors;
        $this->request = $request;
    }

    public function doctorPatients($id)
    {
        if (!$data = $this->model->with('doctorPatients')->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function doctorConsultations($id)
    {
        if (!$data = $this->model->with('doctorConsultations')->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }

    //Lucas
    /*public function getAllPatients($id){
        return Doctor::find($id)->patient;
    }

    public function medical_consultations($id){
        return Doctor::find($id)->medical_consultations;
    }*/
}
