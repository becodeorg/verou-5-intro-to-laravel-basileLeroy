<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::all();
        
        return view("users", [
            "users" => $users,
        ]);   
    }

    public function show ($id) 
    {
        $user = User::find($id);
        
        return view ("user", [
            "user" => $user,
        ]);
    }
}
