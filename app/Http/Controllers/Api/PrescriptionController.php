<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prescription;

class PrescriptionController extends Controller
{
    protected $model;

    public function __construct(Prescription $prescriptions, Request $request)
    {
        $this->model = $prescriptions;
        $this->request = $request;
    }
}
