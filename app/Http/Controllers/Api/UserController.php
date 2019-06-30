<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getAllPatients($id){
        return User::find($id)->patient;
    }
}
