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
}
