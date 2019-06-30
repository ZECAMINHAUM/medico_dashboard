<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home2Controller extends Controller
{
    public function index()
    {
        return view("view.home2.index");
    }
}
