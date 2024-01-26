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
        
        return view("users.index", [
            "users" => $users,
        ]);   
    }

    public function show ($id) 
    {
        $user = User::find($id);
        
        return view ("users.show", [
            "user" => $user,
        ]);
    }
}