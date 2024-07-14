<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        if(!Auth::attempt($request->only('email','password'))){
            return "error";
        }

        return new UserResource(Auth::user());
    }
}
