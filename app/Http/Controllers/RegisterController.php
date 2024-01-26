<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index ()
    {
        return view("sessions.register");
    }

    public function create (Request $request) 
    {
        dd($request->repeat_password);
    }
}
